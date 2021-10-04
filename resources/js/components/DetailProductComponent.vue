<template>
    <div v-if="product !== ''">
        <div class="clearfix">
            <div class="float-right animate__animated animate__fadeIn">
                <h5>
                    <router-link to="/">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Regresar
                    </router-link>
                </h5>
            </div>
        </div>

        <div class="card m-3 shadow animate__animated animate__rotateInDownLeft my-5">
            <!-- <img class="img-fluid rounded-circle" :src="'/images/' + product.image" alt="" style="max-width: 10%;"> -->
            <img class="img-fluid rounded-circle" :src="'/images/default.png'" alt="" style="max-width: 30%;">
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
                        Precio: $ {{product.amount}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            product: ''
        }
    },
    created(){
        this.getProducts();
    },
    methods: {
        getProducts(){
            fetch('/api/products/'+this.$route.params.id).then(res => res.json()).then((json) => {
                console.log(json.data);
                this.product = json.data
            });
        },
    },
}
</script>

<style>

</style>
