<template>
    <div class="container-fluid login_container justify-content-center">
        <div class="col-lg-8 m-auto ">
            <b-card class="login_form justify-content-center" >
                <b-card-header><img :src="'/assets/conqueror-logo-hz.svg'"></b-card-header>
                <b-form @submit.prevent="login" @keydown="form.onKeydown($event)">
                    <b-form-group
                        label="Email:"
                        label-for="email" >
                        <b-form-input type="email" id="email" name="email" :class="{ 'is-invalid': form.errors.has('email') }" v-model="form.email"></b-form-input>
                        <has-error :form="form" field="email" />
                    </b-form-group>
                    <b-form-group
                        label="Password:"
                        label-for="password" >
                        <b-form-input type="password" id="password" name="password" :class="{ 'is-invalid': form.errors.has('password') }" v-model="form.password"></b-form-input>
                        <has-error :form="form" field="password" />
                    </b-form-group>
                    <b-button type="submit" class="login_button">Log In</b-button>
                </b-form>
            </b-card>
        </div>
    </div>
</template>

<script>
import Form from 'vform'

export default {
  components: {
  },

  middleware: 'guest',

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      const { data } = await this.form.post('/api/login')

      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })

      await this.$store.dispatch('auth/fetchUser')

      this.redirect()
    },

    redirect () {
        this.$router.push({ name: 'challenges' })
    }
  }
}
</script>

<style scoped>
.login_container {


}
.login_form {
    max-width: 40rem;
    background-color: transparent;
    border: none;
}
.card-header {
    border-bottom: none;
}
.login_button {
    background: linear-gradient(8deg, rgba(254, 225, 151, 1) 0%, rgba(255, 250, 222, 1) 50%, rgba(216, 177, 76, 1) 100%);
    color: black;
    width: 100%;
}
</style>
