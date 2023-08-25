<script>


export default {



    components: {

    },

    props: [
        'obj'
    ],

    mounted() {
this.$parent.$parent.parentLog();
    },

    methods: {

    },

    computed: {

    }
}
</script>

<template>
<div>Color: {{ obj.color }}</div>
<div>Number:{{ obj.number > 5 ? 'more' : 'less' }}</div>
<div>Is Published: {{ obj.isPublished ? 'published' : 'not published'}}</div>
</template>

<style scoped>

</style>
