<div class="relative w-full h-screen md:h-auto">
    <div class="overflow-hidden h-full">
        <div class="flex transition-transform duration-500" id="slider">
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="{{ asset('assets/images/slider-1.jpeg') }}" alt="Doctor Profile 1" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 1</h2>
                    <p>Description for Doctor Profile 1</p>
                </div>
            </div>
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="{{ asset('assets/images/slider-2.jpeg') }}" alt="Doctor Profile 2" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 2</h2>
                    <p>Description for Doctor Profile 2</p>
                </div>
            </div>
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="{{ asset('assets/images/slider-3.jpeg') }}" alt="Doctor Profile 3" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 3</h2>
                    <p>Description for Doctor Profile 3</p>
                </div>
            </div>
        </div>
    </div>


    <button onclick="prevSlide()" aria-label="Previous Slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full shadow p-2 hover:bg-gray-200 transition">
        &#10094;
    </button>
    <button onclick="nextSlide()" aria-label="Next Slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full shadow p-2 hover:bg-gray-200 transition">
        &#10095;
    </button>
</div>
