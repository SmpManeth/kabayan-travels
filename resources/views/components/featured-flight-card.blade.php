@props([
'flight',
'options',
])

<div class="grid grid-cols-1 lg:h-[472px] rounded-xl lg:w-[300px] w-[300px] border border-[#D81324] border-2 lg:ml-0">
    <div class="border-b-[#D81324] border-b-[1px] rounded-t-xl relative overflow-hidden h-[160px] w-full">
        <img src="{{ asset($flight['assets']['file_path']) }}" alt="" class="absolute pb-[35px] inset-0 w-[220px] h-[200px] lg:ml-10 ml-10 object-cover p-3">
    </div>

    <div class="grid grid-cols-2 p-2 max-h-[60px] min-h-[60px]">
        <div class="ml-4">
            <div class="text-lg text-[#D81324] font-bold">{{ $flight['destination_city'] }}</div>
            <div class="text-xs text-gray-500">RETURN FLIGHT</div>
        </div>

        <div class="ml-10">
            <div class="text-xs">AVG/PERSON</div>
            <div class="text-gray-500 text-[12px]"><span class="">FR</span> <span class="text-lg font-bold text-[#D81324]">£ {{ $flight['price'] }}</span></div>
        </div>
    </div>

    <div class="grid grid-cols-2 border-t-[#D81324] border-t-[1px] max-h-[148px] min-h-[148px]">
        <div class="border-r-[#D81324] border-r-[1px]">
            <div class="flex ml-4 mt-5">
                <i class="fa-sharp-duotone fa-solid fa-plane-departure text-xl mr-2" style="color: #D81324;"></i>
                <div>
                    <div class="text-xs text-gray-500">DEPARTING</div>
                    <div class="text-xs font-bold">{{$options['from_date']}}</div>
                </div>
            </div>

            <div class="flex ml-4 mt-8">
                <i class="fa-solid fa-seat-airline text-xl mr-2" style="color: #D81324;"></i>
                <div>
                    <div class="text-xs text-gray-500">CABIN TYPE</div>
                    @if($flight['cabin_class'] == 'economy')
                    <div class="text-xs font-bold">ECONOMY</div>
                    @elseif($flight['cabin_class'] == 'premium')
                    <div class="text-xs font-bold">PREMIUM ECONOMY CLASS</div>
                    @elseif($flight['cabin_class'] == 'business')
                    <div class="text-xs font-bold">BUSINESS CLASS</div>
                    @elseif($flight['cabin_class'] == 'first')
                    <div class="text-xs font-bold">FIRST CLASS</div>
                    @else
                    <div class="text-xs font-bold">ECONOMY</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="">
            <div class="flex ml-4 mt-4">
                <i class="fa-solid fa-plane-arrival text-xl mr-2" style="color: #D81324;"></i>
                <div>
                    <div class="text-xs text-gray-500">RETURNING</div>
                    <div class="text-xs font-bold">{{$options['to_date']}}</div>
                </div>
            </div>

            <div class="flex ml-4 mt-8">
            <i class="fa-solid fa-location-dot text-xl mr-2" style="color: #D81324;"></i>
                <div>
                    <div class="text-xs text-gray-500">DEPARTURE</div>
                    <div class="text-xs font-bold">{{ $flight['origin_city'] }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-3 flex justify-center items-center pb-3">
        <form action="#" method="GET" class="whitespace-nowrap inline-flex items-center lg:px-[110px] px-[110px] py-3 text-lg font-medium text-white rounded-2xl bg-[#D81324] hover:bg-[#830600] focus:ring-4 focus:ring-primary-300">
            <div class="hidden">
                <input type="hidden" name="presetSearch" value="presetSearch">
                <input name="TripType" type="text" id="TripType" value="RT" class="">
                <input name="Origin" type="text" id="Origin" value="{{ $flight['origin_airport'] }}" class="">
                <input name="Destination" type="text" id="Destination" value="{{ $flight['destination_airport'] }}" class="">
                <input name="DepartDate" type="text" id="DepartDate" value="{{ $options['from_date'] }}" class="">
                <input name="ArrivalDate" type="text" id="ArrivalDate" value="{{ $options['to_date'] }}" class="">
                <input name="NoOfAdultPax" type="text" id="NoOfAdultPax" value="1" class="">
                <input name="NoOfChildPax" type="text" id="NoOfChildPax" value="0" class="">
                <input name="NoOfInfantPax" type="text" id="NoOfInfantPax" value="0" class="">
                <input name="Class" type="text" id="class" value="{{ $flight['cabin_class'] }}" class="">
            </div>
            <button type="submit">BOOK</button>
        </form>
    </div>
</div>