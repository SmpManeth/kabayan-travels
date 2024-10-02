<form action="#" method="GET" class="bg-red-500 bg-opacity-60 px-5 py-6 rounded-lg">
    @csrf
    <div class="">
        <!-- trip types OW/RT/MC -->
        <div class="flex items-center space-x-4 mb-3">
            <div class="flex items-center mb-1 border border-white rounded-lg lg:py-2 lg:px-2 py-2 px-2 lg:border-[2px]">
                <x-text-input id="oneway" type="radio" name="TripType" value="OW" class="lg:w-4 lg:h-4 w-3 h-3 border-red-900 focus:red-900" />
                <x-input-label for="oneway" class="block ms-2  lg:text-sm text-[10px] font-medium text-gray-50" value="ONE WAY" />
            </div>

            <div class="flex items-center mb-1 border border-white rounded-lg xl:py-2 xl:px-2 py-2 px-2 lg:border-[2px]">
                <x-text-input id="roundtrip" checked type="radio" name="TripType" value="RT" class="lg:w-4 lg:h-4 w-3 h-3 border-red-900 focus:red-900" />
                <x-input-label for="roundtrip" class="block ms-2  lg:text-sm text-[10px] font-medium text-gray-50" value="ROUND TRIP" />
            </div>
            <div class="flex items-center mb-1 border border-white rounded-lg lg:py-2 lg:px-2 py-2 px-2 lg:border-[2px]">
                <x-text-input id="multicity" type="radio" name="TripType" value="MT" class="lg:w-4 lg:h-4 w-3 h-3 border-red-900 focus:red-900" />
                <x-input-label for="multicity" class="block ms-2  lg:text-sm text-[10px] font-medium text-gray-50" value="MULTI CITY" />
            </div>
        </div>

        <div class="flex items-center space-x-4 mb-5">
            <div class="flex items-center border border-white rounded-lg lg:py-2 lg:px-2 py-2 px-2 lg:border-[2px]">
                <x-text-input id="IsDirectFlight" type="checkbox" name="IsDirectFlight" class="lg:w-4 lg:h-4 w-3 h-3 border-red-900 focus:red-900" />
                <x-input-label for="IsDirectFlight" class="block ms-2  lg:text-sm text-[10px] font-medium text-gray-50" value=" Direct Flight" />
            </div>
        </div>
    </div>
    <div class="xl:flex gap-2 ">
        <!-- origin  -->
        <div id="autoSuggestDropdown" class="relative flex items-center bg-white rounded-2xl shadow-md xl:mb-0 mb-4">
            <i class="fas fa-plane-departure text-gray-600 ml-5"></i>
            <div class="">
                <span class="text-gray-600 text-xs font-semibold mx-3">Flying From</span>
                <x-text-input type="text" name="Origin" id="searchoriginAirport" placeholder="Select the Airport" class="bg-transparent text-xs w-full focus:outline-none focus:ring focus:ring-transparent font-semibold pl-3 text-gray-700 border-none py-0 z-10" autocomplete="off" />
                <div id="autoSuggestList" class="absolute left-0 top-full mt-1 w-full bg-white border border-gray-300 rounded-md hidden shadow-lg z-20 max-h-96 overflow-y-scroll ">

                </div>
            </div>

        </div>

        <!-- destination  -->
        <div id="autoSuggestDropdowndestination" class="relative flex items-center bg-white rounded-2xl shadow-md xl:mb-0 mb-4">
            <i class="fas fa-plane-arrival text-gray-600 ml-5"></i> <!-- Font Awesome icon -->
            <div class="">
                <span class="text-gray-600 text-xs font-semibold mx-3">Flying To</span> <!-- Label -->
                <x-text-input name="Destination" type="text" id="search_destin_Airport" placeholder="Select the Airport" class="bg-transparent text-xs w-full focus:outline-none focus:ring focus:ring-transparent font-semibold pl-3 text-gray-700 border-none py-0 z-10" autocomplete="off" />
                <div id="autoSuggestListdest" class="absolute left-0 top-full mt-1 w-full bg-white border border-gray-300 rounded-md hidden shadow-lg z-20 max-h-96 overflow-y-scroll">
                    <!-- Suggestions will be inserted here dynamically with JavaScript -->
                </div>
            </div>

        </div>

        <!-- departure date  -->
        <div class="relative flex items-center bg-white rounded-2xl shadow-md xl:w-60 xl:mb-0 mb-4">
            <i class="fa-regular fa-calendar-days text-gray-600 ml-5"></i> <!-- Font Awesome icon -->
            <div class="">
                <span class="text-gray-600 text-xs font-semibold mx-3">Depature</span> <!-- Label -->
                <x-text-input datepicker autocomplete="off" name="DepartDate" type="text" id="DepartDate" class="bg-transparent text-xs w-full focus:outline-none focus:ring focus:ring-transparent font-semibold pl-3 text-gray-700 border-none py-0" placeholder="Select a date" />
            </div>
        </div>

        <!-- Return Date  -->
        <div class="relative flex items-center bg-white rounded-2xl shadow-md xl:w-60 xl:mb-0 mb-4">
            <i class="fa-regular fa-calendar-days text-gray-600 ml-5"></i> <!-- Font Awesome icon -->
            <div class="">
                <span class="text-gray-600 text-xs font-semibold mx-3">Return</span> <!-- Label -->
                <x-text-input datepicker autocomplete="off" name="ArrivalDate" type="text" id="ReturnDate" class="bg-transparent text-xs w-full focus:outline-none focus:ring focus:ring-transparent font-semibold pl-3 text-gray-700 border-none py-0" placeholder="Select a date" />
            </div>
        </div>

        <!-- passengers  -->
        <div class="relative flex items-center bg-white rounded-2xl shadow-md xl:mb-0 mb-4">
            <i class="fa-solid fa-users text-gray-600 ml-5"></i>
            <div class="">
                <span class="text-gray-600 text-xs font-semibold mx-3">Travelers</span> <!-- Label -->
                <button type="button" id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-transperant focus:outline-none pl-2 focus:ring focus:ring-transparent font-semibold text-xs text-gray-700 border-none xl:w-auto w-full text-left">
                    <x-text-input type="text" name="totalordercost" id="totalordercost" class="border-0 w-5 text-xs bg-white placeholder-gray-900 p-0" placeholder="1" disabled />
                    Passengers
                </button>
            </div>
        </div>

        <div id="dropdown" class="absolute z-10 hidden max-w-screen-sm p-4 space-y-4 bg-white mb-6 rounded-lg shadow bottom-0" aria-labelledby="dropdownDefault">

            <!-- Adults -->
            <div class="grid grid-cols-2 gap-2 inline-flex items-center">

                <div>
                    <p id="drawer-label" class="inline-flex items-center text-gray-900 text-sm font-medium">
                        Adult
                        <svg data-tooltip-target="tooltip-default" class="w-5 h-5 ml-2 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                        </svg>

                    </p>

                    <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Age 15 Years and Over
                    </div>
                </div>

                <div class="relative flex items-center max-w-[8rem] ">
                    <button type="button" id="decrement-button-adult" class="bg-red-700 hover:bg-red-800 rounded-s-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="decrementAdult()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" name="NoOfAdultPax" id="quantity-input" aria-describedby="helper-text-explanation" class="bg-gray-200 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2 amount" onchange="findTotal()" placeholder="" value="1" />
                    <button type="button" id="increment-button-adult" class="bg-red-700 hover:bg-red-800 rounded-e-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="incrementAdult()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>

            </div>
            <!-- Youth  -->
            <div class="grid grid-cols-2 gap-2 inline-flex items-center">
                <p id="drawer-label" class="inline-flex items-center text-gray-900 text-sm font-medium">
                    Youth
                    <svg data-tooltip-target="tooltip-youth" class="w-5 h-5 ml-2 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                    </svg>
                </p>

                <div id="tooltip-youth" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Age Between 12 Years and 15 Years
                </div>

                <div class="relative flex items-center max-w-[8rem]">
                    <button type="button" id="decrement-button-infant" class="bg-red-700 hover:bg-red-800 rounded-s-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="decrementyouth()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" name="NoOfYouthPax" id="quantity-input3" aria-describedby="helper-text-explanvation" class="bg-gray-200 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2 amount" onchange="findTotal()" placeholder="" value="0" />
                    <button type="button" id="increment-button-infant" data-input-counter-increment="quantity-input3" class="bg-red-700 hover:bg-red-800 rounded-e-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="incrementyouth()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>

            </div>
            <!-- Child  -->
            <div class="grid grid-cols-2 gap-2 inline-flex items-center">
                <p id="drawer-label" class="inline-flex items-center text-gray-900 text-sm font-medium">
                    Child
                    <svg data-tooltip-target="tooltip-child" class="w-5 h-5 ml-2 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                    </svg>
                </p>

                <div id="tooltip-child" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Age Between 2 Years and 11 Years
                </div>

                <div class="relative flex items-center max-w-[8rem]">
                    <button type="button" id="decrement-button-child" class="bg-red-700 hover:bg-red-800 rounded-s-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="decrementChild()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" name="NoOfChildPax" id="quantity-input1" aria-describedby="helper-text-explanation" class="bg-gray-200 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2 amount" onchange="findTotal()" placeholder="" value="0" />
                    <button type="button" id="increment-button-child" data-input-counter-increment="quantity-input1" class="bg-red-700 hover:bg-red-800 rounded-e-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="incrementChild()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>

            </div>
            <!-- infant  -->
            <div class="grid grid-cols-2 gap-2 inline-flex items-center">
                <p id="drawer-label" class="inline-flex items-center text-gray-900 text-sm font-medium">
                    Infant
                    <svg data-tooltip-target="tooltip-infant" class="w-5 h-5 ml-2 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                    </svg>
                </p>

                <div id="tooltip-infant" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Age Bellow 2 Years
                </div>

                <div class="relative flex items-center max-w-[8rem]">
                    <button type="button" id="decrement-button-infant" class="bg-red-700 hover:bg-red-800 rounded-s-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="decrementInfant()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" name="NoOfInfantPax" id="quantity-input2" aria-describedby="helper-text-explanvation" class="bg-gray-200 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2 amount" onchange="findTotal()" placeholder="" value="0" />
                    <button type="button" id="increment-button-infant" data-input-counter-increment="quantity-input2" class="bg-red-700 hover:bg-red-800 rounded-e-lg p-3 focus:ring-gray-100  focus:outline-none" onclick="incrementInfant()" onkeyup="findTotal()" onkeydown="findTotal()" value="1">
                        <svg class="w-3 h-3 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>

            </div>

            <hr>
            <!-- Travel Classes  -->
            <div class="">

                <ul class="flex flex-col items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg ">
                    <li class="w-full border-b border-gray-200">
                        <div class="flex items-center pl-3">
                            <input id="state-all" type="radio" value="Economy" name="Class" checked class="custom-radio w-4 h-4 bg-red-700 border-gray-300 text-red-600 focus:ring-none" />
                            <label for="state-all" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">
                                Economy
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200">
                        <div class="flex items-center pl-3">
                            <input id="state-all" type="radio" value="PremiumEconomy" name="Class" class="custom-radio w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-none  " />
                            <label for="state-all" class="w-full py-3 ml-2 text-sm font-medium text-gray-900">
                                Premium Economy
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 ">
                        <div class="flex items-center pl-3">
                            <input id="state-new" type="radio" value="Business" name="Class" class="custom-radio w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-none  " />
                            <label for="state-new" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                                Business
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 ">
                        <div class="flex items-center pl-3">
                            <input id="state-new" type="radio" value="First" name="Class" class=" custom-radio w-4 h-4 bg-gray-100 border-gray-300 text-primary-600 focus:ring-none  " />
                            <label for="state-new" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                                First
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex justify-center">
            <x-primary-button>SEARCH</x-primary-button>
        </div>
    </div>
</form>