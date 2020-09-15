<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vista previa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" @click="close">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <embed v-if="!!encodedPDF" :src="`data:application/pdf;base64,${encodedPDF}`" width="100%" height="500" alt="pdf">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="close">Cerrar</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </transition>

     <!-- Button trigger modal 
                            <span :click="ViewPDF({uuid:tax.uuid, type: 'CV'})">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>
                            </span-->

                            <!-- Modal 
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <embed :src="`data:application/pdf;base64,${encodedPDF}`" width="600" height="500" alt="pdf">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div-->
                            
</template>

<script>
export default {
    name: 'ModalPDF',
    props: {
        encodedPDF: {
            type: String,
            default: null,
        }
    },
    methods: {
        close() {
            this.$emit('close')
        }
    }
}
</script>

<style>

</style>