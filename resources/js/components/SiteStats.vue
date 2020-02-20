<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Stats
        </h1>
        <ul>
            <li>Name is {{ name }}</li>
            <li>Age is {{ age }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            age: 0
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/stats').then(({ data }) => {
            this.name = data.name
            this.age = data.age
        })
    }
}
</script>
