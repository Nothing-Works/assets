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
        <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') no-repeat;">
            <h1>
                <router-link to="/">
                    <img src="/images/logo.svg" alt="Assets">
                </router-link>
            </h1>
        </header>
        <div class="container px-8 pb-10">
            <div class="flex">
                <aside class="w-1/5 pt-8 flex-shrink-0">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5">The Brand</h5>
                        <ul>
                            <li class="text-sm leading-10">
                                <router-link to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/logo-symbol">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/colors">Colors</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/typography">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5">Doodles</h5>
                        <ul>
                            <li class="text-sm leading-10">
                                <router-link to="/mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/illustrations">Illustrations</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/loaders-and-animations">Loaders and
                                    Animations</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link to="/wallpapers">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>

                    <section>
                        <h5 class="uppercase font-bold mb-5">Stats</h5>
                        <ul>
                            <li class="text-sm leading-10">
                                <router-link to="/site-stats">Site Stats</router-link>
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
