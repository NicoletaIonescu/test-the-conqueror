<template>
  <div class="main-layout">
    <navbar />

    <div class="container-fluid mt-4 main_container">
      <child />
    </div>

    <the-conqueror-footer ></the-conqueror-footer>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Child from '~/components/Child'
import TheConquerorFooter from '~/components/TheConquerorFooter'

export default {
    name: 'MainLayout',

    components: {
        Navbar,
        Child,
        TheConquerorFooter,
    }
}
</script>

<style scoped>
.main_container {
    max-width:76rem;
}
</style>

