<x-layout>    
    @include('partials.navbar1')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/vert.png') }}" class="w-full" alt="">
    <div class="flex flex-col items-center justify-center mb-6 ">
    <p class=" text-center text-lg my-12 w-fit text-[#334A5A]  iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Mes Convoiturages</p>
     <div class="flex justify-around flex-wrap">
    <div class="w-5/12  flex rounded-md mt-3 shadow-md bg-gray-100  ">
      <div class="w-[100%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="46"  src="{{ asset('image/ayb.jpg') }}" class="border-2 border-[#14BC9C] mb-1 rounded-full " alt="user">
          </div>
            <div class="flex flex-col justify-center items-center">
              <p class="text-sm font-semibold align-middle text-[#334A5A]"></p>
            </div>
          </div>
          <div>
           <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-500 align-top text-3xl px-2 ">...</button>
           <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg  shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="/editTrajet" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
              </li>
            </ul>
        </div>
          </div>

        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1 mt-2">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 ">
          <div class="flex flex-col items-between justify-between gap-2 ">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 </p>
          <p class="text-lg font-bold text-[#334A5A]">500 MAD <span class="text-xs">pour 1 passager</span></p>
        </div>
          <div class="flex gap-1 px-2 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        
      </div>
    </div>
    <div class="w-5/12  flex rounded-md mt-3 shadow-md bg-gray-100  ">
      <div class="w-[100%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="46"  src="{{ asset('image/ayb.jpg') }}" class="border-2 border-[#14BC9C] mb-1 rounded-full " alt="user">
          </div>
            <div class="flex flex-col justify-center items-center">
              <p class="text-sm font-semibold align-middle text-[#334A5A]"></p>
            </div>
          </div>
          <div>
           <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-[#334A5A] text-lg px-2 hover:rotate-180"><i class="bi bi-caret-down-fill"></i></button>
           <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg  shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="/editTrajet" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
              </li>
            </ul>
        </div>
          </div>

        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1 mt-2">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 ">
          <div class="flex flex-col items-between justify-between gap-2 ">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 </p>
          <p class="text-lg font-bold text-[#334A5A]">500 MAD <span class="text-xs">pour 1 passager</span></p>
        </div>
          <div class="flex gap-1 px-2 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        
      </div>
    </div>
    <div class="w-5/12  flex rounded-md mt-3 shadow-md bg-gray-100  ">
      <div class="w-[100%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="46"  src="{{ asset('image/ayb.jpg') }}" class="border-2 border-[#14BC9C] mb-1 rounded-full " alt="user">
          </div>
            <div class="flex flex-col justify-center items-center">
              <p class="text-sm font-semibold align-middle text-[#334A5A]"></p>
            </div>
          </div>
          <div>
           <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-[#334A5A] text-lg px-2 hover:rotate-180"><i class="bi bi-caret-down-fill"></i></button>
           <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg  shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="/editTrajet" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
              </li>
            </ul>
        </div>
          </div>

        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1 mt-2">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 ">
          <div class="flex flex-col items-between justify-between gap-2 ">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 </p>
          <p class="text-lg font-bold text-[#334A5A]">500 MAD <span class="text-xs">pour 1 passager</span></p>
        </div>
          <div class="flex gap-1 px-2 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        
      </div>
    </div>
    <div class="w-5/12  flex rounded-md mt-3 shadow-md bg-gray-100  ">
      <div class="w-[100%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <div class="flex gap-1">
            <div>
            <img width="46"  src="{{ asset('image/ayb.jpg') }}" class="border-2 border-[#14BC9C] mb-1 rounded-full " alt="user">
          </div>
            <div class="flex flex-col justify-center items-center">
              <p class="text-sm font-semibold align-middle text-[#334A5A]"></p>
            </div>
          </div>
          <div>
           <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-[#334A5A] text-lg px-2 hover:rotate-180"><i class="bi bi-caret-down-fill"></i></button>
           <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg  shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="/editTrajet" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</a>
              </li>
            </ul>
        </div>
          </div>

        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1 mt-2">3 place(s)</p>
        <div class="flex justify-between w-full mt-2 ">
          <div class="flex flex-col items-between justify-between gap-2 ">
          <p class="text-lg font-bold text-[#334A5A]">20 avril, 21:30 </p>
          <p class="text-lg font-bold text-[#334A5A]">500 MAD <span class="text-xs">pour 1 passager</span></p>
        </div>
          <div class="flex gap-1 px-2 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">Marrakesh</p>
            <p class="font-semibold text-[#334A5A]">Safi</p>
          </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="flex justify-center mt-12">
    <nav aria-label="Page navigation example ">
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
     
           
    @include('partials.footer')

</x-layout>

