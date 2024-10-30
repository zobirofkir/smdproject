<x-app-layout>
    <div class="flex flex-col md:flex-row items-center justify-between w-full max-w-6xl mx-auto px-4 py-12">
        <div class="max-w-2xl w-full p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">Contactez-nous</h1>
            
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('contacts.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p> 
                @enderror

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p> 
                @enderror

                <!-- Subject -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Sujet</label>
                    <input type="text" id="subject" name="subject" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                @error('subject')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p> 
                @enderror

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                </div>
                @error('message')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p> 
                @enderror
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Envoyer</button>
                </div>
            </form>
        </div>

        <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d132769.91044067903!2d-6.857262799999999!3d33.969218850000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b871f50c5c1%3A0x7ac946ed7408076b!2sRabat!5e1!3m2!1sfr!2sma!4v1730308778876!5m2!1sfr!2sma"
                class="md:w-[550px] w-full h-64 md:h-[610px] rounded-lg shadow-lg" 
                style="border:0;"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</x-app-layout>
