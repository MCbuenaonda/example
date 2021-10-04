<template>
    <div>
        <h1>Lista de Productos</h1>

        <div class="row">
            <div class="col-md-4" v-for="product in products" :key="product.id">
                <div class="card m-3 shadow animate__animated animate__flipInX">
                    <!-- <img class="img-fluid rounded-circle" :src="'/images/' + product.image" alt="" style="max-width: 10%;"> -->
                    <img class="img-fluid rounded-circle" :src="'/images/default.png'" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{product.name}}</h5>
                        <p>
                            <b>{{product.business.company.name}}, </b> <small>{{product.business.name}}</small>
                        </p>
                        <div class="clearfix">
                            <div class="float-left">
                                Cantidad: {{product.qty}} pz.
                            </div>

                            <div class="float-right">
                                <!-- <button class="btn btn-primary" v-on:click="postClick(post)">Ver resumen</button> -->
                                <router-link :to="{name: 'product-detail', params: {id: product.id}}" class="btn btn-success">Ver detalles</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div v-if="total > 0">
            <v-pagination class="mt-3" v-model="currentPage" :page-count="total" :classes="bootstrapPaginationClasses" :labels="paginationAnchorText"></v-pagination>
        </div>
    </div>
</template>

<script>
import vPagination  from 'vue-plain-pagination';

export default {
    components: {
        vPagination
    },
    data() {
        return {
            products: [],
            total: 0,
            postSelected: '',
            currentPage: 1,
            bootstrapPaginationClasses: {
                ul: 'pagination',
                li: 'page-item',
                liActive: 'active',
                liDisable: 'disabled',
                button: 'page-link'
            },
            paginationAnchorText: {
                first: '|<',
                prev: '<<',
                next: '>>',
                last: '>|'
            }
        }
    },
    created(){
        this.getProducts()
    },
    methods: {
        getProducts(){
            fetch('/api/products?page='+this.currentPage).then(res => res.json()).then((json) => {
                this.products = json.data.data
                this.total = json.data.last_page
            });
        },
    },
    watch:{
        currentPage(newVal, oldVal) {
            this.currentPage = newVal;
            this.getProducts();
            // this.$emit('getCurrentPage', newVal);
        }
    }
}
</script>

<style>

</style>
