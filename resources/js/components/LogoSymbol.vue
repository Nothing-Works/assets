<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-8">
            Logo Symbol
        </h1>
        <div class="mb-10">
            <picture
                class="h-64 block rounded-lg shadow flex items-center justify-center mb-6"
            >
                <img src="/images/symbol-original.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>Original symbol on <strong>white</strong> background</p>
                <a
                    href="/images/symbol-original.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >symbol-original</a
                >
            </div>
        </div>

        <div class="mb-10">
            <picture
                class="h-64 block rounded-lg shadow flex items-center justify-center mb-6 bg-as-blue"
            >
                <img src="/images/symbol-negative.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>
                    Original symbol with accent on
                    <strong>dark</strong> background
                </p>
                <a
                    href="/images/symbol-negative.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >symbol-negative</a
                >
            </div>
        </div>

        <div class="mb-10">
            <picture
                class="h-64 block rounded-lg shadow flex items-center justify-center mb-6 bg-black"
            >
                <img src="/images/symbol-pure-negative.svg" alt="logo" />
            </picture>
            <div class="flex justify-between  items-center">
                <p>
                    Pure negative symbol on
                    <strong>dark</strong> background
                </p>
                <a
                    href="/images/symbol-pure-negative.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >symbol-pure-negative</a
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('About Component mounted.')
    }
}
</script>
