<template>
    <div class = 'p-2' v-text="helpColor" :style="{'background-color': helpColor,'color':fontColor,'border-radius': '30px!important','width': '120px','height':'40px','border':'2px solid #090606'}">
        
    </div>
</template>

<script>
    export default {
    props: ['helpColor','fontColor'],

    mounted() {
        console.log('Help color component mounted.')
    },


}
</script>
