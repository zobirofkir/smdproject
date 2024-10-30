<x-app-layout>
    <div class="container mx-auto px-4 py-10">
        {{-- Blog Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800">Notre Blog</h1>
        </div>

        @include('components.categories')

        <div class="flex justify-center items-center mb-10 px-4">
            <div class="w-full max-w-md">
                <form action="" class="flex items-center border border-gray-300 rounded-full overflow-hidden shadow-sm focus-within:ring-2 focus-within:ring-blue-500">
                    <button type="submit" class="pl-4 pr-4 text-gray-500 hover:text-blue-500 focus:outline-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="text" name="search" placeholder="Search" class="flex-grow px-4 py-2 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-0">
                </form>
            </div>
        </div>
        
        <section class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $blog)
                <article class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition ease-in-out duration-300 px-6 py-4">
                    <img src="https://t3.ftcdn.net/jpg/02/60/04/08/360_F_260040863_fYxB1SnrzgJ9AOkcT0hoe7IEFtsPiHAD.jpg" alt="Blog {{ $blog }}" class="w-full h-52 object-cover rounded-t-lg">
                    <div class="p-5">
                        <h2 class="text-xl font-semibold text-gray-800">Blog {{ $blog }}</h2>
                        <p class="text-gray-600 mt-3">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate accusantium illo molestias ex vitae cum, earum reprehenderit quasi tempore vero sint quae fuga est repellat nobis? Quos minima corporis quod.
                        </p>
                        <a href="#"
                           class="block mt-4 text-blue-500 hover:text-blue-600 font-medium">
                            Read More
                        </a>
                    </div>
                </article>
            @endforeach
        </section>
    </div>
</x-app-layout>
