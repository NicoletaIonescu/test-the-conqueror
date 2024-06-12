<template>
    <div class="container-fluid">
        <div class="alert_in_navbar">The LORD OF THE RINGS Virtual Challanges are here!</div>
        <b-navbar   class="conqueror-navbar" >
            <div class="container">
                <b-navbar-nav >
                    <b-navbar-brand>
                       <img :src="'/assets/conqueror-logo.png'" class="logo">
                    </b-navbar-brand>
                </b-navbar-nav>

                <b-navbar-nav v-if="user">
                    <b-nav-item right>
                        <b-link :to="{name: 'challenges'}" class="meniu_link">
                            All Challenges
                        </b-link>
                    </b-nav-item>

                    <b-nav-item right>
                        <b-link :to="{name: 'my-challenges'}" class="meniu_link">
                            My Challenges
                        </b-link>
                    </b-nav-item>


                    <b-nav-item @click.prevent="logout" right>
                        <b-link>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </b-link>
                    </b-nav-item>
                </b-navbar-nav>
            </div>
        </b-navbar>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    components: {},

    data: () => ({
        appName: window.config.appName
    }),

    computed: mapGetters({
        user: 'auth/user'
    }),

    methods: {
        async logout () {
            await this.$store.dispatch('auth/logout')
            this.$router.push({ name: 'login' })
        }
    }
}
</script>

<style scoped>
.alert_in_navbar {
    background-color: #d8b04a;
    text-align: center;
    font-size: 1rem;
    color: #fff;
    font-weight: bold;
    height: 1.5rem;
}
.conqueror-navbar {
    background-color: #000;
    height: 3rem;
}
.logo {
    position:absolute;
    top:-2rem;
}
.meniu_link {
    color: #fff;
}
</style>
