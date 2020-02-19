<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Full Logo
        </h1>
        <div class="mb-10">
            <picture
                class="h-64 block rounded-lg shadow flex items-center justify-center mb-6"
            >
                <img src="/images/logo.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>Original logo on <strong>white</strong> background</p>
                <a
                    href="/images/logo.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >logo.svg</a
                >
            </div>
        </div>
        <div class="mb-10">
            <picture
                class="h-64 block shadow rounded-lg flex items-center justify-center mb-6 bg-as-blue"
            >
                <img src="/images/negative-logo.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>
                    Negative logo with accent on
                    <strong>dark</strong> background
                </p>
                <a
                    href="/images/negative-logo.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >negative-logo.svg</a
                >
            </div>
        </div>

        <div>
            <picture
                class="h-64 block shadow rounded-lg flex items-center justify-center mb-6 bg-black"
            >
                <img src="/images/pure-negative-logo.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>
                    Pure negative logo on
                    <strong>dark</strong> background
                </p>
                <a
                    href="/images/pure-negative-logo.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >pure-negative-logo.svg</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Home Component mounted.')
    }
}
</script>
