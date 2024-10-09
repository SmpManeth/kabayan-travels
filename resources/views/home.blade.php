<x-app-layout>
    <!-- Body  -->
    <div class="m-0 p-0 ">
        <!-- Hero Section -->
        <div class="relative sm:h-[700px] h-auto p-2">
            <!-- Video Background -->
            <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover">
                <source src="{{ asset('videos/Kabayan-Website-Cover-Video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- Overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-white opacity-75 z-5"></div>
            <div class="relative z-10 max-w-7xl mx-auto">
                <!-- Hero Headings  -->
                <div class="flex flex-col items-center justify-center py-12">
                    <!-- Sub Heading Component -->
                    <x-italic-subheading class="text-3xl sm:text-4xl font-medium" value="Explore the Philippines" />
                    <!-- Heading  -->
                    <h1 class="sm:text-6xl text-4xl font-Abhaya font-extrabold text-center text-black sm:pt-10 pt-4 leading-tight">
                        Your Dream
                        <span class="gradient-text">Philippines</span> <br> Holiday Starts <br>
                        Here!
                    </h1>
                </div>

                <!-- Flight Search -->
                <div class="">
                    <x-flight-search-form />
                </div>

                <!-- Hero Bottom Section -->
                <div class="flex text-center justify-between mt-16">
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Easy & Secure Booking</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Best Price with Quality Service</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-certificate" style="color: #ff0d02;"></i>
                        <span>Enjoy Instalment plans on Payments</span>
                    </div>
                </div>
            </div>
        </div>



        <!-- Language Stripe  -->
        <div class="bg-[#fffff]">
            <div class="max-w-6xl mx-auto">
                <div
                    x-data="{}"
                    x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })"
                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li class="flex items-center">
                            <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                            <p class="gradient-text text-2xl ">Tagalog</p>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                            <p class="gradient-text text-2xl ">Cebuano</p>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                            <p class="gradient-text text-2xl ">Ilocano</p>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                            <p class="gradient-text text-2xl ">Bikol</p>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('images/phillipine-flag.png') }}" alt="phillipine-flag.png">
                            <p class="gradient-text text-2xl ">Bisaya</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




        <!-- Explore the Philippines -->
        <div class="bg-cover  bg-center h-[2300px] sm:h-[1400px] m-0 p-0 " style="background-image: url('{{ asset('images/Amazing-Featured-Destinations.png') }}');">

            <div class="p-0 m-0">
                <!-- Headings -->
                <div class="flex flex-col items-center justify-center pt-12 sm:pt-32">
                    <!-- Sub Heading Component -->
                    <x-italic-subheading class="text-3xl sm:text-4xl font-medium" value="Explore the Philippines" />
                    <!-- Heading -->
                    <h1 class="sm:text-6xl text-4xl font-Abhaya font-extrabold text-center text-black leading-tight ">
                        Amazing Featured <br>
                        <span class="gradient-text font-normal font-Yesteryear">Air Fares</span>
                    </h1>
                </div>

                <!-- Flight Cards -->
                <div class="flex mx-auto flex-wrap w-fit gap-4 max-w-7xl mt-10">
                    @foreach($flights as $flight)
                    <!-- card  -->
                    <div class="mx-auto">
                        <x-featured-flight-card :flight=$flight />
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



        <!-- Why Book With Us -->
        <div class="sm:mt-[-250px] mt-[-180px] bg-white">
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="Why Book With Us" />

            </div>

            <section class="sm:pt-28 pt-8">
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

        <!-- Reviews and trust  -->
        <div>
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center sm:pt-32 pt-16 sm:pb-20 pb-16">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="Trust the Process" />

            </div>

            <div class="elfsight-app-158d73ee-30cc-4bb6-9369-529292881a39 p-4" data-elfsight-app-lazy></div>

            <!-- Call Now Button (Centered) -->
            <div class="flex justify-center sm:mt-20 mt-10">
                <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Call Us Now
                </button>
            </div>
        </div>


        <!-- Next Adventure -->
        <div class="">
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium " value="Next Adventure" />
                <!-- Heading -->
                <h1 class="sm:text-6xl text-4xl font-Abhaya font-extrabold text-center text-black leading-tight mt-5">
                    Holiday Destinations <br>
                    available Worldwide
                </h1>
                <p class="p-4 sm:w-6/12 text-center font-normal text-sm">Our holidays promise a haven of relaxation and adventure, where the worries of planning and budgeting melt away. Picture yourself unwinding on sun-drenched beaches, savoring exquisite cuisine, and indulging in a wealth of activities all included in the package. At Kabayan Flights, we believe that your only job on vacation should be to enjoy every moment to the fullest. Embark on a journey where luxury meets convenience, and every experience is a celebration of indulgence. Join us on a holiday where all you need to do is bask in the joy of the moment, surrounded by the beauty and comfort that define our Holiday getaways. </p>
            </div>

            <!-- Cards  -->
            <div>
                <div class="flex mx-auto flex-wrap w-fit gap-4 max-w-7xl mt-10 sm:mt-0">
                    <section class="py-12">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 p-4">

                                <x-holiday-destination description="This is a Sample Description" title="This is teh Title hutto" image="https://img.freepik.com/free-photo/vertical-high-angle-shot-white-buildings-santorini-greece_181624-31643.jpg?t=st=1728375392~exp=1728378992~hmac=c9d9fe99d66d6adab49624fe7dd90b8a8b8834661e5bc424d1a3637a6b8aa8d9&w=740" />
                                <x-holiday-destination description="This is a Sample Description" title="This is teh Title hutto" image="https://img.freepik.com/free-photo/vertical-high-angle-shot-white-buildings-santorini-greece_181624-31643.jpg?t=st=1728375392~exp=1728378992~hmac=c9d9fe99d66d6adab49624fe7dd90b8a8b8834661e5bc424d1a3637a6b8aa8d9&w=740" />
                                <x-holiday-destination description="This is a Sample Description" title="This is teh Title hutto" image="https://img.freepik.com/free-photo/vertical-high-angle-shot-white-buildings-santorini-greece_181624-31643.jpg?t=st=1728375392~exp=1728378992~hmac=c9d9fe99d66d6adab49624fe7dd90b8a8b8834661e5bc424d1a3637a6b8aa8d9&w=740" />
                                <x-holiday-destination description="This is a Sample Description" title="This is teh Title hutto" image="https://img.freepik.com/free-photo/vertical-high-angle-shot-white-buildings-santorini-greece_181624-31643.jpg?t=st=1728375392~exp=1728378992~hmac=c9d9fe99d66d6adab49624fe7dd90b8a8b8834661e5bc424d1a3637a6b8aa8d9&w=740" />

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Call Now Button (Centered) -->
            <div class="flex justify-center mt-5">
                <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Call Us Now
                </button>
            </div>

        </div>

        <!-- We Care for you -->
        <div class="p-4">
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="We Care for you" />
                <!-- Heading -->
                <h1 class="text-6xl font-Abhaya font-extrabold text-center text-black leading-tight ">Save on your Flights Now</h1>
            </div>

            <!-- Cards  -->
            <div class="flex mx-auto flex-wrap w-fit gap-4 max-w-7xl mt-10">
                <div class=""><img src="{{asset('images/image45.png')}}" alt=""></div>
                <div><img class="sm:mt-20" src="{{asset('images/image35.png')}}" alt=""></div>
            </div>
            <!-- Call Now Button (Centered) -->
            <div class="flex justify-center mt-10">
                <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Call Us Now
                </button>
            </div>

        </div>

        <!-- Next Adventure -->
        <div class="">
            <!-- Headings -->
            <div class="flex flex-col items-center justify-center pt-32">
                <!-- Sub Heading Component -->
                <x-italic-subheading class="text-4xl font-medium" value="Next Adventure" />
                <!-- Heading -->
                <h1 class="sm:text-6xl text-4xl font-Abhaya font-extrabold text-center text-black leading-tight ">Great Opportunity For <br>
                    <span class="gradient-text">Adventure</span> & Travels
                </h1>
            </div>

            <!-- Cards  -->
            <div class="flex mx-auto flex-wrap w-fit gap-4 max-w-7xl mt-10 just p-4">
                <div class="mx-auto">
                    <iframe class="sm:w-[250px] sm:h-[450px] w-[160px] h-[290px] rounded-lg pointer-events-none"
                        src="https://www.youtube.com/embed/n-8rCcaAg1M?autoplay=1&controls=0&loop=1&playlist=n-8rCcaAg1M&mute=1&modestbranding=1&rel=0"
                        title="YouTube video"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="mx-auto">
                    <iframe class="sm:w-[250px] sm:h-[450px] w-[160px] h-[290px] rounded-lg pointer-events-none"
                        src="https://www.youtube.com/embed/n-8rCcaAg1M?autoplay=1&controls=0&loop=1&playlist=n-8rCcaAg1M&mute=1&modestbranding=1&rel=0"
                        title="YouTube video"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="mx-auto">
                    <iframe class="sm:w-[250px] sm:h-[450px] w-[160px] h-[290px] rounded-lg pointer-events-none"
                        src="https://www.youtube.com/embed/13VKoWxeB6o?autoplay=1&controls=0&loop=1&playlist=13VKoWxeB6o&mute=1&modestbranding=1&rel=0"
                        title="YouTube video"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="mx-auto">
                    <iframe class="sm:w-[250px] sm:h-[450px] w-[160px] h-[290px] rounded-lg pointer-events-none"
                        src="https://www.youtube.com/embed/lzzcvKvpUhs?autoplay=1&controls=0&loop=1&playlist=lzzcvKvpUhs&mute=1&modestbranding=1&rel=0"
                        title="YouTube video"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
            <!-- Call Now Button (Centered) -->
            <div class="flex justify-center mt-10">
                <button type="button" class="text-white bg-button-gradient focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Call Us Now
                </button>
            </div>

        </div>



    </div>

</x-app-layout>