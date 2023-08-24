<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {

    data: function () {
        return {
            persons: [
                {
                    id:1,
                    name: 'Вася',
                    age: 20,
                    job: 'coach'
                },
                {
                    id:2,
                    name: 'Юлия',
                    age: 29,
                    job: 'teacher'
                },
                {
                    id:3,
                    name: 'Сергей',
                    age: 26,
                    job: 'doc'
                }
            ]

        }
    },

    components: {
        SinglePostComponent
    },

    methods: {
        sayHello() {
            console.log('Hello')
        },
        sayHi() {
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
        <tr v-for="person in persons">
            <th scope="row">{{ person.id }}</th>
            <td>{{ person.name }}</td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }}</td>
        </tr>

        </tbody>
    </table>
</template>

<style scoped>

</style>
