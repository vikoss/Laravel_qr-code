<template>
    <div>
        <HeaderNicolasRomero/>
        <router-view></router-view>
    </div>
</template>

<script>
import HeaderNicolasRomero from './../../components/nicolasRomero/Header'

export default {
    name: 'IndexNicolasRomero',
    components: {
        HeaderNicolasRomero
    }

}
</script>

<style>

</style>