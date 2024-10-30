<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{config('app.name')}}</title>
</head>
<body class="bg-gray-100 scroll-smooth">
    <div>
        @include('components.header')
    </div>

    <div>
        @include('components.slider')

        {{-- @include('components.categories')         --}}
    </div>

    <main>
        {{ $slot }}
    </main>
    
    @include('components.footer')

    <script src="{{asset('assets/js/dropdown.js')}}"></script>
    <script src="{{asset('assets/js/autoscrollcategories.js')}}"></script>
    <script src="{{asset('assets/js/slider.js')}}"></script>
</body>
</html>