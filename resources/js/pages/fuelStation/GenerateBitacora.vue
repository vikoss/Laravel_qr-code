<template>
    <div>
        <FunctionalCalendar
            :is-date-range='true'
            v-model="calendarData"
            :date-format="'yyyy-mm-dd'"
        />
        <br>
        <vSelect 
            v-model="vehicleUuid"
            :options="listOfVehicles"
            :reduce="vehicle => vehicle.uuid"
            label="vehicle"
            placeholder="Selecciona un vehiculo"
        />
        <!--template slot="option" slot-scope="option">
            {{ `${option.name} ${option.section}` }}
        </template-->
        <br>
       
        <button type="submot" class="btn btn-primary btn-lg" v-on:click="GetBitacora" :disabled="!Success">Generar bitacora</button>

        <ModalPDF v-if="modalPDF" :encodedPDF="encodedPDF" @close="closeModalPDF"/>
    </div>

</template>

<script>
import { FunctionalCalendar } from 'vue-functional-calendar'
import { getVehicles } from './../../services/fuelStation/getVehicles'
import { getBitacora } from './../../services/fuelStation/getBitacora'
import ModalPDF from './../../components/nicolasRomero/ModalPDF'
import vSelect from "vue-select"
import "vue-select/dist/vue-select.css"

export default {
    components: {
        FunctionalCalendar,
        vSelect,
        ModalPDF
    },
    data() {
        return {
            calendarData: { 
                currentDate: '', 
                selectedDate: false, 
                selectedDateTime: false, 
                selectedHour: '', 
                selectedMinute: '', 
                selectedDatesItem: '', 
                selectedDates: [], 
                dateRange: { 
                    start: '', 
                    end: '' 
                },
                multipleDateRange: [] 
            },
            calendarConfigs: {
                sundayStart: false,
                dateFormat: 'dd/mm/yyyy',
                isDatePicker: true,
                isDateRange: true
            },
            listOfVehicles: [],
            vehicleUuid: null,
            encodedPDF: null,
            modalPDF: false
        }
    },
    mounted() {
        this.GetVehicles()
    },
    methods: {
        GetVehicles() {
            getVehicles()
                .then(response => {
                    this.listOfVehicles = response
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        GetBitacora() {
            getBitacora(this.payload)
                .then(response => {
                    if (response.pdf) {
                        this.modalPDF = true
                        this.encodedPDF = response.pdf
                    }
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        closeModalPDF() {
            this.modalPDF = false
            this.encodedPDF = null
            //this.payload = null
        },

    },
    computed: {
        payload() {
            const dateStartString = this.calendarData.dateRange.start || '1980-1-1'
            const arrayStart = dateStartString.split('-')
            const dateEndString = this.calendarData.dateRange.end || '1980-1-1'
            const arrayEnd = dateEndString.split('-')
            const end_date = arrayEnd[0] + '-' + (0 + arrayEnd[1]).slice(-2) + '-' + ('0' + arrayEnd[2]).slice(-2)
            const start_date = arrayStart[0] + '-' + (0 + arrayStart[1]).slice(-2) + '-' + ('0' + arrayStart[2]).slice(-2)
            return {
                uuid: this.vehicleUuid,
                end_date,
                start_date

            }
        },
        Success() {
            return !!this.payload.uuid && this.payload.start_date != '1980-01-01' && this.payload.end_date != '1980-01-01'
        }
    }

}
</script>

<style>

</style>