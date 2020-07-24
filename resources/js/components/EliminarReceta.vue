<template>
    <input 
        type="submit" 
        class="btn btn-danger mb-2 d-block w-100" value="Eliminar ×"
        @click="eliminarReceta"
        >         
</template>

<script>
export default {
    props: ['recetaId'],
    methods: {
        eliminarReceta() {
            console.log('diste click', this.recetaId);
        }
    }
}
</script>