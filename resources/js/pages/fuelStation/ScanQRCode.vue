<template>
    <div>
        <qrcode-stream v-if="showReader" @decode="OnDecode"></qrcode-stream>
        <button type="button" class="btn btn-primary btn-lg btn-block margin-top" v-if="!showReader" @click="ShowReader">Leer codigo QR</button>
    </div>
</template>

<script>
import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'

export default {
    name: 'ScanQRCode',
    components: {
        QrcodeStream,
        QrcodeDropZone,
        QrcodeCapture
    },
    data() {
        return {
            regexUUID: /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i,
            showReader: false
        }
    },
    methods: {
        OnDecode(uuid) {
            if (this.regexUUID.test(uuid)) {
                this.$store.commit('setVehicleUUID', uuid)
                console.log('yes', uuid)
                this.$router.push({name: 'Refill'})
            }
        },
        ShowReader() {
            this.showReader = true
        }
    }

}
</script>

<style lang="scss" scoped>
.margin-top {
    margin-top: 200px;
}

</style>