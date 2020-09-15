<template>
  <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Estas seguro de eliminar ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" @click="close">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        {{ `Eliminaras a ....${tax.NOMBRE}` }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="close">NO</button>
                    <button type="button" class="btn btn-primary" @click="detele">SI</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: 'ModalConfirm',
    props: {
        tax: {
            type: Object,
            default: {},
        }
    },
    methods: {
        close() {
            this.$emit('close')
        },
        detele() {
            this.$emit('delete', this.tax.uuid)
            this.close()
        }
    }
}
</script>

<style>

</style>