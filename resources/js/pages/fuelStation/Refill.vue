<template>
    <div>
        <div v-if="viewDetails && !!vehicle" class="jumbotron">
            <h1 class="display-4">{{ vehicle.vehicle }}</h1>
            <hr class="my-4">
            <p class="lead">Ultimos datos registrados.</p>
            <span v-if="vehicle.last_refill">
                <p>
                    <strong>kilometraje:</strong>
                    {{ vehicle.last_refill.mileage }}
                </p>
                <p>
                    <strong>Litros:</strong>
                    {{ vehicle.last_refill.liters }}
                </p>
                <p>
                    {{ vehicle.last_refill.created_at | formatFullDate }}
                </p>
            </span>
            <span v-else>
                 <p>
                    <strong>Ninguno.</strong>
                </p>
            </span>
            <!--a class="btn btn-primary btn-lg" href="#" @click="RefillData" role="button">Recargar</a-->
            <button type="submit" class="btn btn-primary btn-lg" @click="RefillData" role="button">Recarga</button>
        </div>




        <form v-if="viewRefill" @submit.prevent="SendRefill">
            <div class="form-group">
                <label for="mileage">Kilometraje</label>
                <input type="text" class="form-control" id="mileage" required v-model="refill.mileage">
            </div>
           
            <div class="form-group margin-bottom-zero">
                <label for="type">Tipo</label>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="option1" v-model="refill.type">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="option2" v-model="refill.type">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="option3" v-model="refill.type">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                </div>
            </div>
           
            <div class="form-group">
                <label for="liters">Litros</label>
                <input type="text" class="form-control" id="liters" required v-model="refill.liters">
            </div>
            <div class="form-group">
                <label for="ticket_id">Ticket ID</label>
                <input type="text" class="form-control" id="ticket_id" required v-model="refill.ticket_id">
            </div>
            <div class="form-group">
                <label for="ticket_amount">Total ticket</label>
                <input type="text" class="form-control" id="ticket_amount" required v-model="refill.ticket_amount">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>


        <ModalSuccess v-if="modalSuccess" :vehicle="vehicle.vehicle"/>


    </div>
  
</template>

<script>
import { QrcodeStream, QrcodeDropZone, QrcodeCapture } from 'vue-qrcode-reader'
import { mapGetters } from 'vuex'
import ModalSuccess from './../../components/fuelStation/ModalSucess'
import { getVehicle } from './../../services/fuelStation/getVehicle'
import { sendRefill } from './../../services/fuelStation/sendRefill'

export default {
    name: 'Refill',
    components: {
        QrcodeStream,
        QrcodeDropZone,
        QrcodeCapture,
        ModalSuccess
    },
    data() {
        return {
            vehicle: null,
            viewDetails: true,
            viewRefill: false,
            modalSuccess: false,
            refill: {
                vehicle_uuid: '',
                mileage: '',
                type: '',
                liters: '',
                ticket_id: '',
                ticket_amount: '',
            },
            //getVehicleUUID: '405cb030-f905-11ea-94ee-cf6e1aaae8be'
        }
    },
    created() {
        this.GetVehicle(this.getVehicleUUID)
    },
    computed: {
        ...mapGetters(['getVehicleUUID'])
    },
    methods: {
        GetVehicle(uuid) {
            getVehicle(this.getVehicleUUID)
                .then(response => {
                    this.vehicle = response
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        RefillData() {
            this.viewDetails = false
            this.viewRefill = true
        },
        SendRefill() {
            this.refill.vehicle_uuid = this.getVehicleUUID
            sendRefill(this.refill)
                .then(response => {
                    if (response.success) {
                        this.modalSuccess = true
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        }

    },
    filters: {
        formatFullDate(date) {
            if (!date) return ''

            const dateObject = new Date(date)
            const optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
            const optionsTime = { hour: '2-digit', minute: '2-digit' }
            const dateFormat = dateObject.toLocaleDateString(undefined, optionsDate)
            const timeFormat = dateObject.toLocaleTimeString('en-US', optionsTime)
            
            return `${dateFormat} a las ${timeFormat}`
        }
    }

}
</script>

<style lang="scss" scoped>
.margin-bottom-zero {
    margin-bottom: 0;
}
</style>