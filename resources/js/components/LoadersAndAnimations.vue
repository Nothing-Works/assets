<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Loaders and Animations
        </h1>

        <p class="mb-10 text-grey-900 leading-normal">
            This spinner uses AirBnb's
            <a
                href="http://airbnb.io/lottie/#/web"
                class="text-as-blue font-bold"
                >Lottie</a
            >
            library to render its animation. You may download the necessary
            assets below.
        </p>
        <div
            class="border border-grey-200 rounded-lg flex items-center justify-center mb-8"
        >
            <div ref="lottie" class="w-64" style="height: 457px"></div>
        </div>
        <a
            href="/laracasts-spinner.zip"
            class="border px-10 py-2 rounded-full text-black font-bold text-xs"
            >spinner.zip
        </a>
    </div>
</template>

<script>
import lottie from 'lottie-web'
export default {
    mounted() {
        lottie.loadAnimation({
            container: this.$refs.lottie,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '/animations/spinner.json'
        })
    }
}
</script>
