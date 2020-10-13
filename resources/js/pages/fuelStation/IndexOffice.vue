<template>
    <div>
        <Header/>
        <router-view></router-view>
    </div>
</template>

<script>
import Header from './../../components/fuelStation/HeaderOffice'

export default {
    name: 'IndexFuelStationOffice',
    components: {
        Header
    }
}
</script>