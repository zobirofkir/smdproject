{{-- resources/views/blogs.blade.php --}}
<x-app-layout>
    <div class="container mx-auto px-4 py-10">
        {{-- Blog Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800">Notre Blog</h1>
        </div>

        @include('components.categories')

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
