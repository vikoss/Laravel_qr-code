<template>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Selecciona el excel
            </div>
            <div class="card-body">
                
                    <input :value="value" type="file" name="file" ref="file" class="form-control" v-on:change="handleFile()">
                    <br>
                    <br>
                    
                    <div v-if="success" class="alert alert-success" role="alert">El archivo se ha importado correctamente !</div>
                    <div v-if="errors" class="alert alert-danger" role="alert">Lo sentimos estamos teniendo problemas !</div>
                    <div v-if="!empty" class="alert alert-warning" role="alert">Debes seleccionar un archivo !</div>
                    
                    <button v-on:click="submit()" class="btn btn-primary">Subir excel</button>
                
            </div>
        </div>
    </div>
</template>

<script>
import { uploadExcel } from './../../services/nicolasRomero/uploadExcel'

export default {
    name: 'other',
    data() {
        return {
            value: '',
            file: null,
            success: false,
            errors: false,
            empty: true,
        }
    },
    methods: {
        handleFile() {
            this.file = this.$refs.file.files[0]
            this.empty = true

        },
        submit() {
            const formData = new FormData()
            
            if (!this.file) {
                this.empty = false
                return
            }

            formData.append('file', this.file)

            uploadExcel(formData)
                .then(response => {
                    if (response.success) {
                        this.success = true
                        this.errors = false
                        this.file = null
                        this.value = null
                    }
                })
                .catch(error => {
                    this.errors = true
                    this.success = false
                    this.empty = true
                    this.file = null
                    //console.log(error)
                })
        }
    }

}
</script>

<style>

</style>