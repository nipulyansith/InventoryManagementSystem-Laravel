

    <x-layout>
        
        @auth
        <div class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-5xl font-bold text-gray-800 mb-6">Welcome to the Inventory Management System</h1>
                <p class="text-lg text-gray-600 mb-8">
                    Manage your stock, track inventory, and streamline your business operations all in one place.
                </p>
                
                <!-- Call to Action Buttons -->
                <div class="space-x-4">
                    
                    <a href="{{ route('register') }}" class="inline-block px-8 py-3 text-white bg-slate-500 rounded-lg hover:bg-slate-700 transition duration-300">
                        Check Inventory
                    </a>
                </div>
            </div>
            
            <!-- Feature Section -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center max-w-4xl">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Real-Time Inventory Tracking</h3>
                    <p class="text-gray-600">Monitor stock levels and updates in real-time to avoid stockouts and overstocking.</p>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Automated Reports</h3>
                    <p class="text-gray-600">Generate insightful reports on your inventory performance with just a few clicks.</p>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Seamless Integration</h3>
                    <p class="text-gray-600">Easily integrate with other tools like sales and purchase systems to streamline operations.</p>
                </div>
            </div>
        </div>
        @endauth

        @guest
            <h1>Guest</h1>
        @endguest

    </x-layout>