<template>
    <div>
    <!--div class="row">
        <div class="col-xs-12 col-md-8"-->
            <FunctionalCalendar
                :is-date-range='true'
                v-model="calendarData"
                :date-format="'yyyy-mm-dd'"
            />
            <br>
        
        <vSelect 
            v-model="dependency"
            :options="listOfDependencies"
            :reduce="dependency => dependency.name"
            label="name"
            placeholder="Selecciona una dependencia"
        />

        <br>

        <form @submit.prevent="">
            <div class="form-group">
                <label for="invoice">Numero de factura</label>
                <input type="text" class="form-control" id="invoice" required v-model="invoice">
            </div>
            <button type="submot" class="btn btn-primary btn-lg" v-on:click="GetReport">Generar reporte</button>
        </form>

        <!--span v-if="calendarData.dateRange">
            {{ calendarData }}
            {{ calendarData.dateRange.start || '' }} al {{ calendarData.dateRange.end || '' }}
            {{ payload }}
        </span-->
        <ModalPDF v-if="modalPDF" :encodedPDF="encodedPDF" @close="closeModalPDF"/>
    </div>
</template>

<script>
import { FunctionalCalendar } from 'vue-functional-calendar'
import { getDependencies } from './../../services/fuelStation/getDependencies'
import { getReport } from './../../services/fuelStation/getReport'
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
            uuid: '',
            invoice: '',
            listOfDependencies: [],
            dependency: null,
            encodedPDF: null,
            modalPDF: false
        }
    },
    mounted() {
        this.GetDependencies()
    },
    methods: {
        GetDependencies() {
            getDependencies()
                .then(response => {
                    this.listOfDependencies = response
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        GetReport() {
            getReport(this.payload)
                .then(response => {
                    if (response.pdf) {
                        this.modalPDF = true
                        this.encodedPDF = response.pdf
                    }
                    this.listOfVehicles = response
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
            const dateStartString = this.calendarData.dateRange.start || '2020-1-1'
            const arrayStart = dateStartString.split('-')
            const dateEndString = this.calendarData.dateRange.end || '2020-1-1'
            const arrayEnd = dateEndString.split('-')
            const end_date = arrayEnd[0] + '-' + (0 + arrayEnd[1]).slice(-2) + '-' + ('0' + arrayEnd[2]).slice(-2)
            const start_date = arrayStart[0] + '-' + (0 + arrayStart[1]).slice(-2) + '-' + ('0' + arrayStart[2]).slice(-2)
            return {
                dependency: this.dependency,
                invoice: this.invoice,
                end_date,
                start_date

            }
        }
    }

}
</script>

<style lang="scss" scoped>
.margin {
    margin: 20px;
}
</style>