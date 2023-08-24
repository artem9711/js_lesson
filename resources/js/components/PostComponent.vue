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
                },
                {
                    id:4,
                    name: 'Александр',
                    age: 39,
                    job: 'seller'
                },
                {
                    id:5,
                    name: 'Катя',
                    age: 23,
                    job: 'traveler'
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
        personAgeMoreTwentyFive() {
            return this.persons.filter(function (person){
                return person.age > 25
            })
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
        <template v-for="person in personAgeMoreTwentyFive">
        <tr v-if="person.age > 25">
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
