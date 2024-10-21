<!-- Top Navigation Bar -->
<nav x-data="{open:false}" class="h-10 w-full flex items-center hidden sm:flex" id="top-nav">

    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8  flex ">

        <div class="w-1/5">
            <a href="" class="text-white hover:underline " target="_blank">
                <i class="pr-2 fa-solid fa-phone" style="color: #ffffff;" aria-hidden="true"></i>
                0203-026-9529
            </a>
        </div>

        <div class="w-2/5">
            <a href="" class="text-white hover:underline " target="_blank">
                <i class="pr-2 fa-solid fa-envelope " style="color: #ffffff;" aria-hidden="true"></i>
                info@kabayanflights.com
            </a>
        </div>

        <div class="w-1/5"></div>

        <div class="w-1/5 text-right ">
            <a href="tel:02030269529" class="text-white divide-slate-50 mr-1">Follow Us:</i></a>
            <a href="https://www.facebook.com/bluelotusvacations" class="text-white divide-slate-50"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i></a>
            <a href="https://www.instagram.com/bluelotusvacationsuk/" class="text-white divide-slate-50 ml-2"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
            <a href="https://wa.me/+447392455120" class="text-white divide-slate-50 ml-2"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i></a>
        </div>
    </div>

</nav>


<!-- Main Navigation bar  -->
<nav class="bg-white w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo  -->
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-12 sm:h-10 w-auto fill-current text-gray-800" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- Call Now Button  -->
            <button type="button" class="text-white hidden sm:block bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center ">Call Us Now</button>
            <!-- hamburger Menu  -->
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <!-- Menu Links  -->
        <div class="items-center text-lg gap-12 justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <div>
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
            </div>
            <div>
                <x-nav-link :href="'https://bluelotusvacations.uk/popular-flights'" :active="request()->routeIs('dashboard')">
                    {{ __('Flights') }}
                </x-nav-link>
            </div>
            <div>
                <x-nav-link :href="'https://bluelotusvacations.uk/featured-holidays'" :active="request()->routeIs('dashboard')">
                    {{ __('Holidays') }}
                </x-nav-link>
            </div>

        </div>
    </div>
</nav>