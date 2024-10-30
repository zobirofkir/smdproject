<x-app-layout>
    <section class="container mx-auto">
        @include('components.last-events')

        <div class="mt-20 mb-10 px-4 md:px-8 lg:px-0 py-10">
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