<template>
    <div class="container">
        <div class="row">
        
        <div class="col-sm">
            <img :src="'/images/nr_logo.jpg'" alt="Logo Nicolas Romero" style="width: 100%; height: auto;">
        </div>

        <div class="col-sm">
                <h1 class="h2">Municipio Nicolas Romero, Mexico</h1>
                <h2 class="h3">Certificaciones Vigentes</h2>
                
                <h4>
                Nombre:
                <small class="text-muted">{{ tax.NOMBRE }}</small>
                </h4>
                <h4>
                Certificado:
                <small class="text-muted">{{ tax.CERTIFICACION }}</small>
                </h4> 
                <h4>
                Folio:
                <small class="text-muted">{{ tax.FOLIO }}</small>
                </h4>
                <h4>
                Vigencia(Bimestre):
                <small class="text-muted">{{ tax.VIGENCIA }}</small>
                </h4>

        </div>

        </div>
    </div>
</template>

<script>
import { getTax } from './../../services/nicolasRomero/getTax';

export default {
    name: 'ViewDetails',
    data() {
        return {
            tax: {},
            hostName: window.location.host
        }
    },
    created() {
        this.getDetails()
    },
    methods: {
        getDetails() {
            const pathArray = window.location.pathname.split('/')
            const lengthArray = pathArray.length
            const pathName = `${pathArray[lengthArray-2]}/${pathArray[lengthArray-1]}`
            console.log(pathName);
            getTax(pathName)
                .then(response => {
                    console.log(response)
                    this.tax = response
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }

}
</script>

<style>

</style>