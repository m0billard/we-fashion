<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Admin</title>
</head>

<body id="top">
    <header class="bg-white fixed z-50 top-0 w-full shadow">
        <nav id="main-nav" class="bg-white max-w-5xl mx-auto font-poppins p-6 flex items-center justify-between">
            <span
                class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-[#66EB9A] relative inline-block"><span
                    aria-hidden="true" class="text-2xl lg:text-2xl font-bold relative text-white">
                    WE FASHION
                </span></span>
            <button aria-label="toggle button" aria-expanded="false" id="menu-btn"
                class="cursor-pointer w-7 md:hidden">
                <img src="{{ asset('img/menu.svg') }}" alt="">
            </button>
            <ul id="toggled-menu"
                class="w-full absolute top-full left-0 -translate-y-full -z-10 text-gray-800 border-b border-gray-200 bg-white flex flex-col items-center md:static md:z-10 md:w-min md:transform-none md:border-none md:flex-row">
                <li class="py-4 md:py-0 md:mr-6">
                    <a href="#" class="text-base uppercase font-semibold w-full hover:text-[#66EB9A]">Produits
                    </a>
                </li>
                <li class="py-4 md:py-0 md:mr-6">
                    <a href="#"
                        class="text-base uppercase font-semibold w-full hover:text-[#66EB9A]">Catégories
                    </a>
                </li>
                <li class="py-4 md:py-0 md:mr-6">
                    <a href="/" class="text-base uppercase font-semibold w-full text-[#66EB9A] hover:text-gray-900">Accueil
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mt-28">
        <button
            class="flex mx-auto text-white bg-[#66EB9A] border-0 py-2 px-6 focus:outline-none hover:scale-95 rounded"
            onClick="window.location.href='{{ route('products.create') }}'">Nouveau</button>
        <div class="relative overflow-x-auto shadow sm:rounded-lg flex justify-center max-w-5xl mx-auto mb-6 mt-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nom du produit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Catégorie
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>
                        <th scope="col" class="px-6 py-3">
                            État
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $product->name }}
                            </th>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">
                                {{ $product->price }}€
                            </td class="px-6 py-4">
                            @if ($product->state == 0)
                                <td class="px-6 py-4">Non soldé</td>
                            @else
                                <td class="px-6 py-4">Soldé</td>
                            @endif
                            <td onClick="window.location.href='{{ route('products.edit', $product->id) }}'"
                                class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Éditer</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-blue-500 hover:underline">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
