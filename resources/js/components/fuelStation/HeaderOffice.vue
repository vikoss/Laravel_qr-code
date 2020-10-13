<template>
    <ul class="nav">
        <li class="nav-item">
            <router-link class="nav-link active" to="/gasolinera/generar">Inicio</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/gasolinera/generar/reporte">Reporte</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link active" to="/gasolinera/generar/bitacora">Bitacora</router-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: 'HeaderFuelStationOffice'
}
</script>

<style>

</style>