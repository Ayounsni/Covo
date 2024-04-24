<x-layout>    
    @include('partials.navbar1')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/ride.png') }}" class="w-full contrast-75 mb-20" alt="">
    <div class="flex justify-center">
    <div class="flex w-[83%]  shadow-md rounded-3xl bg-white absolute top-80">
      <div class="py-3 pl-3 text-2xl"><i class="bi bi-geo-alt text-[#334A5A] "></i></div>
      <input type="text" placeholder="ville de depart" class="py-3 px-2 w-[18%] outline-none  bg-white">
      <div class="py-3 text-2xl"><i class="bi bi-geo-alt text-[#334A5A] "></i></div>
      <input type="text" placeholder="ville de depart" class="py-3 px-2 w-[18%] outline-none bg-white">
      <div class="py-3 text-2xl "><i class="bi bi-calendar4-week text-[#334A5A]"></i></i></div>
      <input type="date" placeholder="" class="py-3 px-2 w-[18%] outline-none bg-white ">
      <div class="py-3 text-2xl"><i class="bi bi-person text-[#334A5A]"></i></div>
      <input type="number" min="1" placeholder="1 passager" class="py-3 px-2 w-[18%] outline-none bg-white">
      <button class="bg-[#334A5A] text-white text-center px-4 rounded-r-3xl shadow-md transition-all duration-500 safa hover:bg-left">Rechercher</button>
    </div>
  </div>
    <div class="flex flex-col justify-center items-center mb-10 ">
    <div class="w-5/6  flex rounded-md mt-6 shadow-md bg-gray-100 ">
      <div class="w-[25%] align-middle flex justify-center items-center ">
        <img width="190" src="{{ asset('image/peu.jpg') }}" class="rounded-md hover:scale-110 transition-all" alt="">
      </div>
      <div class="w-[75%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="53"  src="{{ asset('image/ayb.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
          </div>
            <div class="flex flex-col">
              <p class="text-sm font-semibold text-[#334A5A]">Oussama Snini</p>
              <p class="text-xs font-semibold text-[#334A5A]">Honda,2012</p>
              <p class="text-xs font-semibold text-[#334A5A]"><i class="bi bi-star-fill text-xs text-yellow-500"></i> 5</p>
            </div>
          </div>
          <div class="flex gap-1 px-3 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 pr-2">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 <span class="ml-4">500 MAD</span></p>
          <a href="" class="py-1 px-4 text-white rounded-md transition-all  text-center duration-500 safa hover:bg-left "> <i class="bi bi-ticket-perforated"></i> Réserver</a>
        </div>
        
      </div>

    </div>
    <div class="w-5/6  flex rounded-md mt-6 shadow-md bg-gray-100 ">
      <div class="w-[25%] align-middle flex justify-center items-center ">
        <img width="190" src="{{ asset('image/wols.jpeg') }}" class="rounded-md hover:scale-110 transition-all" alt="">
      </div>
      <div class="w-[75%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="53"  src="{{ asset('image/abdo.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
          </div>
            <div class="flex flex-col">
              <p class="text-sm font-semibold text-[#334A5A]">Oussama Snini</p>
              <p class="text-xs font-semibold text-[#334A5A]">Honda,2012</p>
              <p class="text-xs font-semibold text-[#334A5A]"><i class="bi bi-star-fill text-xs text-yellow-500"></i> 5</p>
            </div>
          </div>
          <div class="flex gap-1 px-3 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 pr-2">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 <span class="ml-4">500 MAD</span></p>
          <a href="" class="py-1 px-4 text-white rounded-md transition-all  text-center duration-500 safa hover:bg-left "> <i class="bi bi-ticket-perforated"></i> Réserver</a>
        </div>
        
      </div>

    </div>
    <div class="w-5/6  flex rounded-md mt-6 shadow-md bg-gray-100 ">
      <div class="w-[25%] align-middle flex justify-center items-center ">
        <img width="190" src="{{ asset('image/cit.jpg') }}" class="rounded-md hover:scale-110 transition-all" alt="">
      </div>
      <div class="w-[75%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="53"  src="{{ asset('image/yassir.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
          </div>
            <div class="flex flex-col">
              <p class="text-sm font-semibold text-[#334A5A]">Oussama Snini</p>
              <p class="text-xs font-semibold text-[#334A5A]">Honda,2012</p>
              <p class="text-xs font-semibold text-[#334A5A]"><i class="bi bi-star-fill text-xs text-yellow-500"></i> 5</p>
            </div>
          </div>
          <div class="flex gap-1 px-3 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 pr-2">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 <span class="ml-4">500 MAD <span class="text-xs">pour 1 passager</span> </p>
          <a href="" class="py-1 px-4 text-white rounded-md transition-all  text-center duration-500 safa hover:bg-left "> <i class="bi bi-ticket-perforated"></i> Réserver</a>
        </div>
        
      </div>

    </div>
  </div>
  <div class="flex justify-center">
    <nav aria-label="Page navigation example mt-20">
      <ul class="inline-flex -space-x-px text-sm mb-10">
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-[#334A5A] border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  </div>
</div>
     
</div>
</div>
           
    @include('partials.footer')

</x-layout>
