<x-app-layout>
    <section class="container mx-auto">
        @include('components.last-events')

        {{-- Search Events --}}
        <div class="flex justify-center items-center mt-10">
            <div class="w-full max-w-md">
                <form action="" class="flex items-center border border-gray-300 rounded-full overflow-hidden shadow-sm focus-within:ring-2 focus-within:ring-blue-500">
                    <button type="submit" class="pl-4 pr-4 text-gray-500 hover:text-blue-500 focus:outline-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="text" name="search" placeholder="Search" class="flex-grow px-4 py-2 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-0">
                </form>
            </div>
        </div>

        <div class="mt-10 mb-10 px-4 md:px-8 lg:px-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 ">
                <!-- Card -->
                @foreach ([1, 2, 3, 4, 5, 6] as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img src="https://t3.ftcdn.net/jpg/02/60/04/08/360_F_260040863_fYxB1SnrzgJ9AOkcT0hoe7IEFtsPiHAD.jpg" alt="Event Image {{$item}}" class="w-full h-48 object-cover">
                        
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800">Event {{$item}}</h2>
                            <p class="text-gray-600 mt-2">A brief description for Event {{$item}} to give an overview of the content.</p>
                            
                            <div class="mt-6">
                                <a href="#" class="inline-block text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </section>
</x-app-layout>