<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="text-as-black">
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <img src="/images/logo.svg" alt="Assets">
            </header>
            <div class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-3">The Brand</h5>
                        <ul>
                            <li class="text-sm leading-10">
                                <router-link to="/">Logo</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Colors</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h5 class="uppercase font-bold mb-3">Doodles</h5>
                        <ul>
                            <li class="text-sm leading-10">
                                <router-link to="/">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Illustrations</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Loaders and Animations</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/about">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>
                <main class="flex-1">
                    <router-view></router-view>
                </main>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
