<x-layout>    
    @include('partials.navbar1')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/reserve.png') }}" class="w-full mb-8" alt="">
    <div class="flex justify-end px-4">
    <div class="flex justify-start gap-4 mb-3 ">
      <a href="/reservationPassager" class=" font-semibold text-[#334A5A] border-b border-[#14BC9C]">Passager</a>
      <a href="/reservationConducteur" class="text-md text-gray-500 hover:text-gray-700 pb-1">Conducteur</a>
    </div>
  </div>
  <div class="flex justify-center">
  <p class=" text-center text-lg my-4 w-fit text-[#334A5A]  iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Réservation</p>
  </div>

    <div class="relative overflow-x-auto">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg text-center">
                  Conducteur
                </th>
                  <th scope="col" class="px-6 py-3 text-center">
                      Ville de départ
                  </th>
                  <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                      Ville d'arriver
                  </th>
                  <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                    Contact
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                  Prix(MAD)
              </th>
                 <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                     Status
                 </th>
              </tr>
        </thead>
  
    <tbody>
         <tr class="bg-white dark:bg-gray-800">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
            <div class="flex ">
              <div>
              <img width="48"  src="{{ asset('image/yassir.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
            </div>
              <div class="flex flex-col">
                <p class="text-sm font-semibold text-[#334A5A]">Oussama Snini</p>
                <p class="text-xs font-semibold text-[#334A5A]">Honda,2012</p>
                <p class="text-xs font-semibold text-[#334A5A]"><i class="bi bi-star-fill text-xs text-yellow-500"></i> 5</p>
              </div>
            </div>
          </th>

  <td class="px-6 py-4 text-center">
                      <p class="text-sm font-semibold text-[#334A5A]">Safi</p>  
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">Marrakech</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">0663311599</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">150</p> 
  </td>
  <td class="px-6 py-4 flex justify-center align-items-center gap-2 ">
  

      

             <button type="submit" class="text-white bg-yellow-500 hover:bg-yellow-700 w-32 focus:ring-4 focus:outline-none  focus:ring-yellow-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <i class="bi bi-x-circle"></i> En attente</button>

      
  </td>
</tr>
</tbody>
</table>
</div> 

  </div>
</div>

           
    @include('partials.footer')

</x-layout>

