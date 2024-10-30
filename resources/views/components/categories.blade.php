<div class="mt-20 md:px-0 px-3">
    <div id="scroll-container" class="flex justify-start items-center gap-4 overflow-x-auto whitespace-nowrap">
        @foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $item)
            <div class="inline-block">
                <a href="/">
                    <h2 class="text-black text-2xl font-bold bg-gray-300 py-3 px-10 rounded-md">CATEGORIES {{ $item }}</h2>
                </a>
            </div>
        @endforeach
        

        @foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $item)
            <div class="inline-block">
                <a href="/">
                    <h2 class="text-black text-2xl font-bold bg-gray-300 py-3 px-10 rounded-md">CATEGORIES {{ $item }}</h2>
                </a>
            </div>
        @endforeach
    </div>
</div>

