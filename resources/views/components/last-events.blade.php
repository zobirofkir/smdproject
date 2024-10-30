<div class="mt-20 mb-10">
    <div>
        <h1 class="text-4xl font-extrabold text-center text-gray-800 bg-gray-100 rounded-lg shadow-lg px-6 py-4 transform transition duration-300 hover:bg-gray-200">            
            Derniers Evenements
        </h1>
    </div>

    <div class="flex flex-col md:flex-row justify-between items-start mt-10 gap-10 items-center">
        <!-- Events -->
        @foreach ([1, 2, 3, 4] as $item)
            <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="flex items-center gap-4 mb-4">
                    <img class="w-24 h-24 rounded-full shadow" src="https://t3.ftcdn.net/jpg/02/60/04/08/360_F_260040863_fYxB1SnrzgJ9AOkcT0hoe7IEFtsPiHAD.jpg" alt="Event 1">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Événement {{ $item }}</h2>
                        <p class="text-gray-600">Description de l'événement {{ $item }}</p>    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
