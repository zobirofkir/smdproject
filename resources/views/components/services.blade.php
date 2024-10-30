<div class="mt-20 mb-10 px-4 md:px-0 py-10 rounded-lg">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 bg-gray-100 rounded-lg shadow-lg px-6 py-4 transform transition duration-300 hover:bg-gray-200">
        SERVICES
    </h1>

    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
        <!-- Services -->
        @foreach (['1', '2', '3', '4', '5', '6'] as $item)
            <div class="flex flex-col justify-center items-center bg-white rounded-lg shadow-lg p-6 transition-transform duration-300 hover:scale-105">
                <div class="w-full h-auto overflow-hidden rounded-lg shadow-md">
                    <img src="https://t3.ftcdn.net/jpg/02/60/04/08/360_F_260040863_fYxB1SnrzgJ9AOkcT0hoe7IEFtsPiHAD.jpg" alt="Service 1 Image" class="w-full h-full object-cover transition duration-300 transform hover:scale-110">
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mt-4">Service {{ $item }}</h2>
                <p class="text-gray-600 text-center mt-2">
                    Lorem ipsum dolor sit amet .
                </p>
            </div>
        @endforeach
    </div>
</div>
