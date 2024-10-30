<div class="relative w-full h-screen md:h-auto top-[25px]">
    <div class="overflow-hidden h-full">
        <div class="flex transition-transform duration-500" id="slider">
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="https://t3.ftcdn.net/jpg/02/60/04/08/360_F_260040863_fYxB1SnrzgJ9AOkcT0hoe7IEFtsPiHAD.jpg" alt="Doctor Profile 1" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 1</h2>
                    <p>Description for Doctor Profile 1</p>
                </div>
            </div>
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="https://t3.ftcdn.net/jpg/02/95/51/80/360_F_295518052_aO5d9CqRhPnjlNDTRDjKLZHNftqfsxzI.jpg" alt="Doctor Profile 2" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 2</h2>
                    <p>Description for Doctor Profile 2</p>
                </div>
            </div>
            <div class="min-w-full h-screen md:h-auto relative">
                <img src="https://img.freepik.com/free-photo/woman-doctor-wearing-lab-coat-with-stethoscope-isolated_1303-29791.jpg" alt="Doctor Profile 3" class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-4">
                    <h2 class="text-2xl font-bold">Doctor Profile 3</h2>
                    <p>Description for Doctor Profile 3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button onclick="prevSlide()" aria-label="Previous Slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full shadow p-2 hover:bg-gray-200 transition">
        &#10094;
    </button>
    <button onclick="nextSlide()" aria-label="Next Slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full shadow p-2 hover:bg-gray-200 transition">
        &#10095;
    </button>
</div>

<!-- JavaScript for Slider Functionality -->
<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('#slider > div');
        const totalSlides = slides.length;
        currentSlide = (index + totalSlides) % totalSlides; // Loop back to start
        const offset = -currentSlide * 100; // Calculate offset
        document.querySelector('#slider').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }
</script>
