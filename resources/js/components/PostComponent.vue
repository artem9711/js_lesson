<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {

    data: function () {
        return {
            persons: null
        }
    },

    components: {
        SinglePostComponent
    },

    mounted() {
        this.getPersons();
    },

    methods: {
     getPersons(){
         axios.get('/persons')
             .then( res => {
                 this.persons = res.data;
             })
     }
    },

    computed: {

    }
}
</script>

<template>
    <single-post-component></single-post-component>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
        </tr>
        </thead>
        <tbody>
        <template v-for="person in persons">
        <tr>
            <th scope="row">{{ person.id }}</th>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }}</td>
        </tr>
        </template>
        </tbody>
    </table>
</template>

<style scoped>

</style>
