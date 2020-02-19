<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Loaders and Animations
        </h1>

        <p class="mb-8">
            These are implemented with Lottie, to make them work in your code
            you have to…
        </p>

        <div
            id="lottie"
            class="shadow rounded-lg flex items-center justify-center mb-6"
        ></div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('About Component mounted.')
    }
}
</script>
