<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Page produit</title>
</head>

<body id="top">
    @include('header')
    <main>
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 mt-7 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                        src="../img/femmes/wxl-_New_Coleen-006.jpg">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                        <p class="leading-relaxed">{{ $product->description }}</p>
                        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                            <div class="flex items-center">
                                <span class="mr-3">Size</span>
                                <div class="relative">
                                    <select
                                        class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                        <option>XS</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                    <span
                                        class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4"
                                            viewBox="0 0 24 24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">{{ $product->price }}€</span>
                            <button
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Acheter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
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
