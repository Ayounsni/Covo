<x-layout>    
    @include('partials.navbar2')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/dash.png') }}" class="w-full" alt="">
    <div class="flex justify-center">
    <p class=" text-center text-lg my-6 w-fit text-[#334A5A]  iconChange lg:text-2xl 
    hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 
    after:m-auto after:h-[3px] after:w-0 after:block">Gestion des villes</p>
    </div>
    <a href="" class="self-end px-3">
      <button type="submit" class="text-white mb-3 bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none mt-5 focus:ring-orange-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <i class="bi bi-plus-lg"></i> Ajouter ville</button></a>
  <div class="relative overflow-x-auto px-2">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3 rounded-s-lg text-center">
                      Nom du ville
                   </th>
                  <th scope="col" class="px-6 py-3 text-center">
                       Modifier
                  </th>
                 <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                     Supprimer
                 </th>
              </tr>
        </thead>
        
    <tbody>
         <tr class="bg-white dark:bg-gray-800">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">             
                      <p class="text-md">Marrakesh</p>
              </th>
  <td class="px-6 py-4 text-center">
      <a href="">      
           <button type="submit" class="text-green-500 hover:scale-125  focus:outline-none align-middle  font-medium  text-md text-center">
              <i class="bi bi-pencil"></i></button></a>
  </td>

  <td class="px-6 py-4 flex justify-center align-items-center gap-2 ">
     
         <form method="POST"  action="">
             @method('DELETE')
             @csrf
                 <button type="submit" class="text-red-500  focus:outline-none align-middle  font-medium  text-md text-center ">
                  <i class="bi bi-trash3"></i></button>
         </form>                 
  </td>
</tr>
</tbody>

</table>
</div>

    
  </div>
</div>
     
           
    @include('partials.footer')

</x-layout>

