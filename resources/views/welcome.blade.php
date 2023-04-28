<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Accueil</title>
</head>

<body id="top">
    @include("header")
    <main>
        <div class="flex justify-end max-w-5xl mx-auto my-7">
            <p class="font-normal text-xl">4 résultats</p>
        </div>
        <section class="max-w-5xl mx-auto flex items-center justify-between flex-wrap gap-8">
            @foreach ($products as $product)
                <div class="max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="img/femmes/wxl-_New_Coleen-006.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $product->price }}€
                            </p>
                        </div>
                        <p class="text-gray-600 text-base">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                <div class="max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="img/femmes/wxl-_New_Coleen-006.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $product->price }}€
                            </p>
                        </div>
                        <p class="text-gray-600 text-base">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                <div class="max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="img/femmes/wxl-_New_Coleen-006.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $product->price }}€
                            </p>
                        </div>
                        <p class="text-gray-600 text-base">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                <div class="max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="img/femmes/wxl-_New_Coleen-006.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $product->price }}€
                            </p>
                        </div>
                        <p class="text-gray-600 text-base">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
    @include("footer")
    <script>
        const toggleMenuBtn = document.querySelector("#menu-btn");
        const toggleMenuImg = document.querySelector("#menu-btn img");
        const toggledMenu = document.querySelector("#toggled-menu");
        const menuLinks = document.querySelector("#main-nav ul a");

        toggleMenuBtn.addEventListener("click", toggleNav);

        function toggleNav() {
            toggledMenu.classList.toggle("-translate-y-full")

            if (toggledMenu.classList.contains("-translate-y-full")) {
                toggleMenuImg.setAttribute("src", "img/menu.svg")
                toggleMenuBtn.setAttribute("aria-expanded", "false")
            } else {
                toggleMenuImg.setAttribute("src", "img/cross.svg")
                toggleMenuBtn.setAttribute("aria-expanded", "true")
            }
        }
    </script>
</body>

</html>
