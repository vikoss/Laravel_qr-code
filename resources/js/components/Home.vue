<template>
  <h1>{{ messageAtizapan }}</h1>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: 'home',
    computed: {
        ...mapGetters(['messageAtizapan'])
    },
    mounted() {
        console.log(this.message);
    }

}
</script>

<style>

</style>