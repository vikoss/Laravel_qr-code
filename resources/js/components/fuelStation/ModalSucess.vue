<template>
  <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Perfecto !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" @click="redirect">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        {{ `Se agrego una recarga a la unidad ${vehicle}.` }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="redirect">OK</button>
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
        vehicle: {
            type: String,
            default: ''
        }
    },
    methods: {
        redirect() {
            this.$router.push({name: 'ScanQRCode'})
        }
    }
}
</script>

<style>

</style>