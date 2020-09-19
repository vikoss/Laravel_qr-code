<template>
    <div>
        <HeaderFuelStation/>
        <router-view></router-view>
    </div>
</template>

<script>
import HeaderFuelStation from './../../components/fuelStation/Header'

export default {
    name: 'IndexFuelStation',
    components: {
        HeaderFuelStation
    }

}
</script>

<style>

</style>