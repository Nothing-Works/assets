<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Array
        </h1>
        <input
            v-model="token"
            class="border p-2 w-full rounded mb-6"
            @keydown.enter="fetchArray"
        />
        <p v-if="message" class="text-red-600 text-sm" v-text="message"></p>
        <ul>
            <li v-for="item in array" :key="item.id" v-text="item.name"></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            array: [],
            token: null,
            message: null
        }
    },
    methods: {
        fetchArray() {
            axios
                .get(`http://127.0.0.1:8000/api/array?api_token=${this.token}`)
                .then(({ data }) => {
                    this.array = data
                    this.message = null
                })
                .catch(error => {
                    if (error.response) {
                        this.message = error.response.data.message
                        this.array = []
                    } else {
                        console.log('timeout')
                    }
                })
        }
    }
}
</script>
