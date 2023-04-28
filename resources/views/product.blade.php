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
    @include("header")
    <main>
        
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
