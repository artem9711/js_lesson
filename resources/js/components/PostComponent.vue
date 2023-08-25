<script>
import CreateComponent from "@/components/CreateComponent.vue";
import IndexComponent from "@/components/IndexComponent.vue";

export default {

    data: function () {
        return {
            persons: null
        }
    },

    components: {
        CreateComponent,
        IndexComponent
    },

    mounted() {

    },

    methods: {

    },

    computed: {}
}
</script>

<template>
    <create-component></create-component>
    <IndexComponent></IndexComponent>

<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">#</th>-->
<!--                <th scope="col">Name</th>-->
<!--                <th scope="col">Age</th>-->
<!--                <th scope="col">Job</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <template v-for="person in persons">-->
<!--            <tr>-->
<!--                <th scope="row">{{ person.id }}</th>-->
<!--                <td>{{ person.name }}</td>-->
<!--                <td>{{ person.age }}</td>-->
<!--                <td>{{ person.job }}</td>-->
<!--            </tr>-->
<!--            </template>-->
<!--            </tbody>-->
<!--        </table>-->
</template>

<style scoped>

</style>
