<header class="bg-white fixed z-50 top-0 w-full shadow">
    <nav id="main-nav" class="bg-white max-w-5xl mx-auto font-poppins p-6 flex items-center justify-between">
        <a href="/" class="flex" aria-label="Page d'accueil du portfolio">
            <span
                class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-[#66EB9A] relative inline-block"><span
                    aria-hidden="true" class="text-2xl lg:text-2xl font-bold relative text-white">
                    WE FASHION
                </span></span>
        </a>
        <button aria-label="toggle button" aria-expanded="false" id="menu-btn" class="cursor-pointer w-7 md:hidden">
            <img src="{{ asset('img/menu.svg') }}" alt="">
        </button>
        <ul id="toggled-menu"
            class="w-full absolute top-full left-0 -translate-y-full -z-10 text-gray-800 border-b border-gray-200 bg-white flex flex-col items-center md:static md:z-10 md:w-min md:transform-none md:border-none md:flex-row">
            <li class="py-4 md:py-0 md:mr-6">
                <a href="{{ route('state.filter', ['state' => '1']) }}"
                    class="text-base uppercase font-semibold w-full hover:text-[#66EB9A]">SOLDES
                </a>
            </li>
            <li class="py-4 md:py-0 md:mr-6">
                <a href="#" class="text-base uppercase font-semibold w-full hover:text-[#66EB9A]">HOMME
                </a>
            </li>
            <li class="py-4 md:py-0 md:mr-6">
                <a href="#" class="text-base uppercase font-semibold w-full hover:text-[#66EB9A]">FEMME
                </a>
            </li>
        </ul>
    </nav>
</header>
