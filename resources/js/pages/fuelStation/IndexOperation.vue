<template>
    <div>
        <Header/>
        <router-view></router-view>
    </div>
</template>

<script>
import Header from './../../components/fuelStation/HeaderOperations'

export default {
    name: 'IndexFuelStation',
    components: {
        Header
    }

}
</script>

<style>

</style>