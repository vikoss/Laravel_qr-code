<template>
    <div class="content">
        <div class="title m-b-md">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Expediente</th>
                        <th scope="col">Clave y Valor Catastral</th>
                        <th scope="col">Predial</th>
                        <th scope="col">Aportacion Mejoras</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(tax, key) in data.data" :key="tax.id">
                        <th>
                            {{ tax.EXP }}
                        </th>
                        <td>
                            <button :disabled="!tax.CLAVE_Y_VALOR_CATASTRAL || tax.CLAVE_Y_VALOR_CATASTRAL === '***'" @click="ViewPDF({uuid:tax.uuid, type: 'CV'})">{{ tax.CLAVE_Y_VALOR_CATASTRAL || 'n/a' }}</button>
                        </td>
                        <td>
                            <button :disabled="!tax.NO_ADEUDO_PREDIAL || tax.NO_ADEUDO_PREDIAL === '***'" @click="ViewPDF({uuid:tax.uuid, type: 'PP'})">{{ tax.NO_ADEUDO_PREDIAL || 'n/a' }}</button>
                        </td>
                        <td>
                            <button :disabled="!tax.APORTACIONES_MEJORAS || tax.APORTACIONES_MEJORAS === '***'" @click="ViewPDF({uuid:tax.uuid, type: 'AM'})">{{ tax.APORTACIONES_MEJORAS || 'n/a' }}</button>
                        </td>
                        <td>
                            {{ tax.NOMBRE }}
                        </td>
                        <td>
                            <button @click="ShowModalConfirm(tax, key)">Eliminar</button>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item" v-show="data.prev_page_url">
                                        <a href="#" class="page-link" @click.prevent="getResults(data.current_page-1)">
                                            <span>
                                            <span aria-hidden="true">«</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item" :class="{ 'active': (data.current_page === n) }" v-for="n in pagesNumber" :key="n">
                                        <a href="#" class="page-link" @click.prevent="getResults(n)">
                                            <span>
                                                {{ n }}
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item" v-show="data.next_page_url">
                                        <a href="#" class="page-link" @click.prevent="getResults(data.current_page+1)">
                                            <span>
                                            <span aria-hidden="true">»</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                </tbody>
            </table>

            <ModalPDF v-if="modalPDF" :encodedPDF="encodedPDF" @close="closeModalPDF"/>
            <ModalConfirm v-if="modalConfirm" :tax="deleteTaxData" @close="modalConfirm = false" @delete="Delete"/>
        </div>
    </div>
</template>

<script>
import { getList } from './../../services/nicolasRomero/getList'
import { getPDF } from './../../services/nicolasRomero/getPDF'
import { deleteTax } from './../../services/nicolasRomero/deleteTax'
import ModalPDF from './../../components/nicolasRomero/ModalPDF'
import ModalConfirm from './../../components/nicolasRomero/ModalConfirm'
import { mapGetters } from 'vuex'

export default {
    name: 'ListOfCodes',
    components: {
        ModalPDF,
        ModalConfirm
    },
    data() {
        return {
            data: {},
            offset: 4,
            encodedPDF: null,
            modalPDF: false,
            modalConfirm: false,
            deleteTaxData: {},
            indexOfTax: 0
        }
    },
    created() {
        this.getResults()
    },
    methods: {
        getResults(page) {
            getList(!!page ? page : 1, this.currentUser.token)
                .then(response => {
                    this.data = response
                })
                .catch(error => {
                    console.log('error')
                })
        },
        ViewPDF(payload) {
            this.modalPDF = true
            getPDF(payload, this.currentUser.token)
                .then(response => {
                    this.encodedPDF = response.pdf
                })
                .catch(error => {
                    console.log('error')
                })
        },
        ShowModalConfirm(tax, key) {
            this.modalConfirm = true
            this.deleteTaxData = tax
            this.indexOfTax = key
        },
        Delete(uuid) {
            deleteTax(uuid, this.currentUser.token)
                .then(response => {
                    if (response.success) {
                        this.data.data.splice(this.indexOfTax, 1)
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        },
        closeModalPDF() {
            this.modalPDF = false
            this.encodedPDF = null
        }
    },
    computed: {
        pagesNumber() {
            if (!this.data.to) {
            return [];
            }
            let from = this.data.current_page - this.offset;
            if (from < 1) {
            from = 1;
            }
            let to = from + (this.offset * 2);
            if (to >= this.data.last_page) {
            to = this.data.last_page;
            }
            let pagesArray = [];
            for (let page = from; page <= to; page++) {
            pagesArray.push(page);
            }
            return pagesArray;
        },
        ...mapGetters(['currentUser'])
    }
}
</script>

<style>

.modal-mask {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .5);
    display: table;
    transition: opacity .3s ease;
}

.modal-wrapper {
    display: table-cell;
    vertical-align: middle;
}

</style>