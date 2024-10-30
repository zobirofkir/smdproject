<div id="navbar" class="bg-transparent text-white fixed w-full z-50 transition-all duration-300">
    <nav>
        <div class="flex items-center justify-between items-center md:px-10 px-3 py-4">
            <div>
                <h1 class="text-xl font-bold">{{ config('app.name') }}</h1>
            </div>

            <div class="hidden md:flex flex-1 justify-center">
                <ul class="flex gap-6">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-400 font-bold">Accueil</a></li>
                    <li><a href="{{ url('/abouts') }}" class="hover:text-gray-400 font-bold">A propos</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-gray-400 font-bold">Services</a></li>
                    <li><a href="{{ url('/blogs') }}" class="hover:text-gray-400 font-bold">Blog</a></li>
                    <li><a href="{{ url('/contacts') }}" class="hover:text-gray-400 font-bold">Contact</a></li>
                </ul>
            </div>

            <div class="hidden md:block">
                <a href="{{ url('/login') }}" class="px-4 py-2 bg-blue-100 rounded hover:bg-blue-200 text-black font-bold">Login</a>
            </div>

            <div class="md:hidden">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden transition-max-height duration-300 ease-in-out">
            <ul class="flex flex-col items-center gap-4 py-4">
                <li><a href="{{ url('/') }}" class="hover:text-gray-400">Accueil</a></li>
                <li><a href="{{ url('/contacts') }}" class="hover:text-gray-400">Contact</a></li>
                <li><a href="{{ url('/abouts') }}" class="hover:text-gray-400">A propos</a></li>
                <li><a href="{{ url('/services') }}" class="hover:text-gray-400">Services</a></li>
                <li><a href="{{ url('/blogs') }}" class="hover:text-gray-400">Blog</a></li>
                <li><a href="{{ url('/login') }}" class="px-4 py-2 bg-blue-100 rounded hover:bg-blue-200 text-black font-bold">Login</a></li>
            </ul>
        </div>
    </nav>
</div>
