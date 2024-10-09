@props([
'flight'
])

<div class="grid grid-cols-1 lg:h-[472px] rounded-xl lg:w-[300px] w-[300px] border border-[#D81324] border-2 lg:ml-0">
    <div class="border-b-[#D81324] border-b-[1px] rounded-t-xl relative overflow-hidden h-[160px] w-full">
        <img src="{{ asset($flight['assets']['file_path']) }}" alt="" class="absolute pb-[35px] inset-0 w-[220px] h-[200px] lg:ml-10 ml-10 object-contain p-3">
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
                    <div class="text-xs font-bold">{{$flight['from_date']}}</div>
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
                    <div class="text-xs font-bold">{{$flight['to_date']}}</div>
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

</div>