<template>
    <button type="submit" class="btn btn-danger" @click="eliminarReceta">Eliminar</button>
</template>

<script>
import Swal from "sweetalert2";
export default {
    props:['info','infoId'],
    methods: {
        eliminarReceta() {
            Swal.fire({
                    title: '¿Desea eliminar el producto?',
                    text: "Una vez eliminada no se podra recuperar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'No, canela!',
                    confirmButtonText: 'Si, adelante!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params = {
                            id: this.infoId
                        }

                        //Enviar peticion al servidor
                        axios.post(`/${this.info}/${this.infoId}`, {params, _method: 'delete'}).then( res => {
                            Swal.fire(
                              'Producto eliminado!',
                              'Se elimino el producto.',
                              'success'
                            )

                            //Eliminar receta del DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        }).catch(error => console.log(error));
                    }
                })
        }
    },
}
</script>

<style>

</style>
