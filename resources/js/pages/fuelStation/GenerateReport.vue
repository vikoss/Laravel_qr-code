<template>
    <div>
        <FunctionalCalendar
            :is-date-range='true'
            v-model="calendarData"
            :date-format="'yyyy-mm-dd'"
        />
        <span v-if="calendarData.dateRange">
            {{ calendarData.dateRange.start || '' }} al {{ calendarData.dateRange.end || '' }}
        </span>
        <vSelect v-model="dependency" @onChange="OnChange" :options="dependencies" :reduce="dependency => dependency.id" label="name">
            <template slot="option" slot-scope="option">
                {{ `${option.name} ${option.section}` }}
            </template>
        </vSelect>
    </div>
</template>

<script>
import { FunctionalCalendar } from 'vue-functional-calendar'
import { getDependencies } from './../../services/fuelStation/getDependencies'
import vSelect from "vue-select"
import "vue-select/dist/vue-select.css"

export default {
    components: {
        FunctionalCalendar,
        vSelect
    },
    data() {
        return {
            calendarData: {},
            dependencies: [],
            dependency: {},
            calendarConfigs: {
                sundayStart: false,
                dateFormat: 'dd/mm/yyyy',
                isDatePicker: true,
                isDateRange: true
            }
        }
    },
    mounted() {
        this.GetDependencies()
    },
    methods: {
        GetDependencies() {
            getDependencies()
                .then(response => {
                    this.dependencies = response
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        OnChange(dependency) {
            console.log(dependency)
        }
    },
    computed: {
    }

}
</script>

<style>

</style>