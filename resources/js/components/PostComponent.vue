<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {

    data: function() {
        return {
            name: 'Вася',
            age: 20,
        }
    },

    components: {
        SinglePostComponent
    },

    methods:{
        sayHello(){
            console.log('Hello')
        },
        sayHi(){
            console.log('Hi')
        }
    },

    computed: {
        vasyajob() {
           return this.name + ' работает в булочной'
        }
    }
}
</script>

<template>
<single-post-component></single-post-component>
    <div>{{ name }}</div>
    <div>{{ vasyajob }}</div>
    <button @click="sayHello">Hello</button>
    <button @click="sayHi">Hi</button>
</template>

<style scoped>

</style>
