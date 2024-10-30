<footer class="bg-white text-black py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start">
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <h1 class="text-2xl font-bold">{{ config('app.name') }}</h1>
                <p class="text-gray-400 mt-2">Fournir des services de qualité depuis 2023. Connectez-vous avec nous pour plus d'informations.</p>
            </div>

            <div class="mb-6 md:mb-0">
                <h2 class="font-semibold text-lg mb-2">Liens Rapides</h2>
                <ul class="text-gray-400">
                    <li><a href="{{ url('/home') }}" class="hover:text-gray-200">Accueil</a></li>
                    <li><a href="{{ url('/abouts') }}" class="hover:text-gray-200">À Propos</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-gray-200">Services</a></li>
                    <li><a href="{{ url('/blogs') }}" class="hover:text-gray-200">Blog</a></li>
                    <li><a href="{{ url('/contacts') }}" class="hover:text-gray-200">Contact</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
                <h2 class="font-semibold text-lg mb-2">Nous Contacter</h2>
                <p class="text-gray-400">1234 Nom de Rue, Ville, Pays</p>
                <p class="text-gray-400">Téléphone : +123 456 7890</p>
                <p class="text-gray-400">Email : info@example.com</p>
            </div>
        </div>

        <div class="mt-6 flex justify-center md:justify-start space-x-4">
            <a href="#" class="text-gray-400 hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 4.56v14.88c0 .47-.38.86-.85.86H.86A.87.87 0 010 19.44V4.56c0-.47.38-.86.86-.86h22.3c.47 0 .84.39.84.86zM9.54 19.5h3.96v-6h2.68l.36-3h-3.04V7.83c0-.87.2-1.45 1.48-1.45h1.54V4.09A19.69 19.69 0 0012.49 4c-2.7 0-4.56 1.65-4.56 4.68v2.82H6v3h1.93v6z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M22.23 5.72a8.67 8.67 0 01-2.46.67A4.31 4.31 0 0021.62 4a8.67 8.67 0 01-2.73 1 4.33 4.33 0 00-7.4 3v1A12.3 12.3 0 012 4.4a4.33 4.33 0 001.34 5.78 4.2 4.2 0 01-1.96-.55v.05a4.32 4.32 0 003.46 4.24 4.35 4.35 0 01-1.96.07A4.33 4.33 0 008.7 17.4a8.7 8.7 0 01-5.37 1.86 12.29 12.29 0 006.66 1.95c8 0 12.38-6.64 12.38-12.39l-.01-.56A8.82 8.82 0 0024 5.74l-1.77-.02z"/>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zm1.83 15.75h-3.66v-6H9.75V9.75h1.42v-.82c0-2.13 1.28-3.43 3.26-3.43.93 0 1.73.07 1.96.1v2.28h-1.35c-1.06 0-1.26.5-1.26 1.23v1.64h2.5l-.32 2.25h-2.18v6z"/>
                </svg>
            </a>
        </div>

        <div class="text-center mt-8 text-gray-500 text-sm">
            &copy; 2024 {{ config('app.name') }}. Tous droits réservés.
        </div>
    </div>
</footer>
