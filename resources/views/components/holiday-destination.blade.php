 @props (
 [
 'image' => null,
 'description' => null,
 'title' => null,
 ]
 )

 <!-- Greece Card -->
 <div class="h-auto w-auto shadow-lg rounded-lg relative">
     <img class="rounded-lg overflow-hidden w-full h-auto object-cover" src="{{$image}}" alt="{{$title}}">
     <div class="absolute inset-0 bg-black opacity-25 rounded-md"></div>
     <div class="p-6 absolute bottom-0 text-center">
         <h3 class="text-2xl font-semibold mb-3 text-white font-popins ">{{$title}}</h3>
         <p class="text-white font-popins">{{$description}}</p>
     </div>
 </div>