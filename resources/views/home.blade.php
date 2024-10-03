<x-app-layout>
    <!-- Body  -->
    <div class="m-0 p-0 ">
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
                <div class="flex  justify-between mt-12 ">
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

        <!-- Language Stripe  -->
        <div class="bg-[#fffff]">
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
        <!-- Language Stripe End -->


        <!-- Amazing Featured Destinations -->
        <div class="bg-cover bg-center h-[1400px] m-0 p-0" style="background-image: url('{{ asset('images/Amazing-Featured-Destinations.png') }}');">

            <div class="p-0 m-0">
                <!-- Headings -->
                <div class="flex flex-col items-center justify-center pt-32">
                    <!-- Sub Heading Component -->
                    <x-italic-subheading class="text-4xl font-medium" value="Explore the Philippines" />
                    <!-- Heading -->
                    <h1 class="text-6xl font-Abhaya font-extrabold text-center text-black leading-tight ">
                        Amazing Featured <br>
                        <span class="gradient-text font-normal font-Yesteryear">Air Fares</span>
                    </h1>
                </div>

                <!-- Flight Cards -->
                <div class="flex mx-auto flex-wrap w-fit gap-4 max-w-7xl mt-10">
                    @foreach($flights as $flight)
                    <!-- card  -->
                    <div class="mx-auto">
                        <x-featured-flight-card :flight=$flight :options=$options />
                    </div>
                    @endforeach
                </div>

                <!-- Call Now Button (Centered) -->
                <div class="flex justify-center mt-10"> <!-- Add this div for centering -->
                    <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                        Call Us Now
                    </button>
                </div>
            </div>




        </div>
        <!-- Amazing Featured Destinations End -->



        <div class="mt-[-450px]">
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="Why Book With Us" />

            </div>

            <section class="pt-28">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-0 lg:px-6">

                    <div class="grid lg:gap-10 gap-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div class="text-center ">
                            <img class="mx-auto mb-4 w-20 h-20 rounded-lg" src="https://bluelotusvacations.uk/images/refund_policy.webp"
                                alt="Bonnie Avatar">

                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900  font-playfairDisplay">
                                Refund Policy</h5>

                            <span>As a customer-oriented travel agency we stand out in regard to the refund policy. We
                                have a hassle-free refund procedure to make life easy for you. </span>

                        </div>

                        <div class="text-center ">
                            <img class="mx-auto mb-4 w-20 h-20 rounded-lg"
                                src="https://bluelotusvacations.uk/images/refund_policy.webp" alt="Bonnie Avatar">

                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900  font-playfairDisplay">Local Lingo</h5>
                            <span>Whether you speak Tagalog, Cebuano ,Ilocano, Bikol, or Bisaya Our experienced consultants will guide you through.</span>
                        </div>

                        <div class="text-center ">
                            <img class="mx-auto mb-4 w-20 h-20 rounded-lg" src="https://bluelotusvacations.uk/images/refund_policy.webp"
                                alt="Bonnie Avatar">

                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900  font-playfairDisplay">
                                Reliability</h5>

                            <span>You’ve got a travel agency that covers all aspects of your tour. You can rely on us to
                                plan your tour for you as we provide you with a secure service. </span>

                        </div>

                        <div class="text-center ">
                            <img class="mx-auto mb-4 w-20 h-20 rounded-lg"
                                src="https://bluelotusvacations.uk/images/refund_policy.webp" alt="Bonnie Avatar">

                            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900  font-playfairDisplay">Local
                                Travel Agent</h5>

                            <span>We are your Local Travel Agent, available for you on all seven days of the week. Come
                                visit us at your convenience and share your travel dream with us. </span>

                        </div>
                    </div>
                </div>
            </section>

           
        </div>

        <div>
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32 pb-20">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="Trust the Process" />

            </div>

            <div class="elfsight-app-158d73ee-30cc-4bb6-9369-529292881a39" data-elfsight-app-lazy></div>

            <!-- Call Now Button (Centered) -->
            <div class="flex justify-center mt-20">
                <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Call Us Now
                </button>
            </div>
        </div>



    </div>
</x-app-layout>