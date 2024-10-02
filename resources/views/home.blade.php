<x-app-layout>
    <div class="">
        <!-- Hero Section -->
        <div class="bg-cover bg-center h-[700px]" style="background-image: url('{{ asset('images/bg-hero.png') }}');">
            <div class="max-w-7xl mx-auto">
                <!-- Hero Headings  -->
                <div class="flex flex-col items-center justify-center py-12">
                    <!-- Sub Heading Componenet  -->
                    <x-italic-subheading class="text-4xl font-medium" value="Explore the Philippines" />
                    <!-- Heading  -->
                    <h1 class="text-6xl font-Abhaya font-extrabold text-center text-black pt-10 leading-tight ">
                        Your Dream
                        <span class="gradient-text">Philippines</span> <br> Holiday Starts <br>
                        Here!
                    </h1>
                </div>

                <!-- Flight Search -->
                <div class="">
                    <x-flight-search-form />
                </div>

                <!-- Hero Bottom Section  -->
                <div class="flex  justify-between mt-8 ">
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Easy & Fast - Book a Car in 120 minutes</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Best Price with Quality Service</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Choose from a Wide Variety of Packages</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->
        <div class="bg-[#fffff]" >
            <div class="max-w-6xl mx-auto">
                <div class="flex justify-between py-3">
                    <div class="flex items-center">
                        <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                        <p class="gradient-text text-2xl ">Tagalog</p>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                        <p class="gradient-text text-2xl ">Cebuano</p>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                        <p class="gradient-text text-2xl ">Ilocano</p>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                        <p class="gradient-text text-2xl ">Bikol</p>
                    </div>
                    <div class="flex items-center">
                        <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                        <p class="gradient-text text-2xl ">Bisaya</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>