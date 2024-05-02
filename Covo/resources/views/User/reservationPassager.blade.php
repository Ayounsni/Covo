<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/reserve.png') }}" class="w-full mb-8" alt="">
    <div class="flex justify-end px-4">
    <div class="flex justify-start gap-4 mb-3 ">
      <a href="{{route('passager')}}" class=" font-semibold text-[#334A5A] border-b border-[#14BC9C]">Passager</a>
      <a href="{{route('conducteur')}}" class="text-md text-gray-500 hover:text-gray-700 pb-1">Conducteur</a>
    </div>
  </div>
  <div class="flex justify-center">
  <p class=" text-center text-lg my-4 w-fit text-[#334A5A]  iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Réservation</p>
  </div>
  <div class="w-2/6 my-2">
    <x-flash status="succes" />
</div>
    <div class="relative overflow-x-auto">
      <table class="mb-6 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
      @foreach($reservations as $reservation)
         <tr class="bg-white dark:bg-gray-800">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
            <div class="flex ">
              <div>
              <img width="48"  src="{{ $reservation->trajet->user->photo ? asset('storage/'.$reservation->trajet->user->photo) : asset('image/user.jpg') }}" class="border-2 hidden lg:block border-[#14BC9C] rounded-full " alt="user">
            </div>
              <div class="flex flex-col">
                <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->user->prenom}} {{$reservation->trajet->user->nom}}</p>
                <p class="text-xs font-semibold text-[#334A5A]">{{$reservation->trajet->user->voiture->nom}},{{$reservation->trajet->user->voiture->model}}</p>
              </div>
            </div>
          </th>
  <td class="px-6 py-4 text-center">
                      <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->villeD->nom}}</p>  
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->villeA->nom}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->user->telephone}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->prix}}</p> 
  </td>
  <td class="flex justify-center gap-2 px-6 py-4 align-items-center ">
    @if($reservation->status == 'confirmer')
         <p class="w-32 px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-red-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <i class="bi bi-check-circle"></i> Confirmé</p>
    @elseif($reservation->status == 'en attente')
    <p class="w-32 px-3 py-2 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-red-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="bi bi-hourglass-split"></i> En attente</p>
    @else
    <p class="w-32 px-3 py-2  text-sm   font-medium text-center text-white bg-red-500 rounded-lg te focus:ring-4 focus:outline-none focus:ring-red-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="bi bi-x-circle"></i> Rejeter</p>   
    @endif                 
</td>
</tr>
@endforeach
</tbody>
</table>
<div class="my-3 w-full px-12">
  {{ $reservations->links() }}
</div>
</div> 

  </div>
</div>

           
    @include('partials.footer')

</x-layout>

