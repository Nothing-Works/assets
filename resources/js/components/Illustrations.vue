<template>
    <div>
        <h1 class="text-4xl font-normal text-gray-900 leading-none mb-10">
            Illustrations
        </h1>
        <div class="flex mb-12">
            <picture
                class="px-10 py-6 bg-as-blue rounded-lg flex-1 flex justify-center items-center mr-10"
            >
                <img
                    src="/images/illustrations/clarity.svg"
                    alt="Clarity"
                    class="w-32"
                />
            </picture>
            <div class="flex-1">
                <h2 class="text-2xl mb-4 mt-4">Clarity</h2>
                <p class="mb-8 leading-relaxed">
                    Anyone can fumble around until a program works. But to write
                    truly clear code...is far more difficult.
                </p>
                <a
                    href="/images/illustrations/clarity.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >clarity.svg</a
                >
            </div>
        </div>

        <div class="flex mb-12">
            <picture
                class="px-10 py-6 bg-as-blue rounded-lg flex-1 flex justify-center items-center mr-10"
            >
                <img
                    src="/images/illustrations/fun.svg"
                    alt="Fun"
                    class="w-32"
                />
            </picture>
            <div class="flex-1">
                <h2 class="text-2xl mb-4 mt-4">Fun</h2>
                <p class="mb-8 leading-relaxed">
                    If you’re not having fun, what's the point? As exhausting as
                    programming can sometimes be, don't forget the simple joy of
                    writing in a code editor, and seeing it reflected in the
                    browser.
                </p>
                <a
                    href="/images/illustrations/fun.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >fun.svg</a
                >
            </div>
        </div>

        <div class="flex mb-12">
            <picture
                class="px-10 py-6 bg-as-blue rounded-lg flex-1 flex justify-center items-center mr-10"
            >
                <img
                    src="/images/illustrations/experiment.svg"
                    alt="experiment"
                    class="w-32"
                />
            </picture>
            <div class="flex-1">
                <h2 class="text-2xl mb-4 mt-4">Experiment</h2>
                <p class="mb-8 leading-relaxed">
                    Each step of a new project often requires hours of research
                    and experimentation.
                </p>
                <a
                    href="/images/illustrations/experiment.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >experiment.svg</a
                >
            </div>
        </div>

        <div class="flex mb-12">
            <picture
                class="px-10 py-6 bg-as-blue rounded-lg flex-1 flex justify-center items-center mr-10"
            >
                <img
                    src="/images/illustrations/strength.svg"
                    alt="Strength"
                    class="w-32"
                />
            </picture>
            <div class="flex-1">
                <h2 class="text-2xl mb-4 mt-4">Strength</h2>
                <p class="mb-8 leading-relaxed">
                    You've spent hours staring at your computer screen. "Why
                    isn't it working?" And then, finally, in a perfect "aha"
                    moment, you level up and solve the problem.
                </p>
                <a
                    href="/images/illustrations/strength.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >strength.svg</a
                >
            </div>
        </div>

        <div class="flex mb-12">
            <picture
                class="px-10 py-6 bg-as-blue rounded-lg flex-1 flex justify-center items-center mr-10"
            >
                <img
                    src="/images/illustrations/information.svg"
                    alt="Information"
                    class="w-32"
                />
            </picture>
            <div class="flex-1">
                <h2 class="text-2xl mb-4 mt-4">Information</h2>
                <p class="mb-8 leading-relaxed">
                    Too often, we lack the mental "tools" to solve a particular
                    problem. Thankfully, that's what the forum is for!
                </p>
                <a
                    href="/images/illustrations/information.svg"
                    class="border border-gray-600 px-8 py-2 rounded-full text-black font-bold text-xs"
                    >Information.svg</a
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
