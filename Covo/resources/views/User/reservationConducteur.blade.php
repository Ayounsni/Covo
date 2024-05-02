<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/reserve.png') }}" class="w-full mb-8" alt="">
    <div class="flex justify-end px-4">
    <div class="flex justify-start gap-4 mb-3 ">
      <a href="{{route('passager')}}" class="text-md text-gray-500 hover:text-gray-700">Passager</a>
      <a href="{{route('conducteur')}}" class="font-semibold text-[#334A5A] border-b border-[#14BC9C] pb-1">Conducteur</a>
    </div>
  </div>

  <div class="flex justify-center">
  <p class=" text-center text-lg my-4 w-fit text-[#334A5A]  iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Réservation</p>
  </div>
  <div class="w-2/6 text-center my-2 ">
    <x-flash status="succes" />
    <x-flash status="error" />
  </div>
    <div class="relative overflow-x-auto">
      <table class="mb-4 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3 rounded-s-lg text-center" rowspan="2">Passager</th>
              <th scope="col" class="px-6 py-3 rounded-s-lg text-center" rowspan="2">Besoin de places</th>
              <th scope="col" class="px-6 py-3 rounded-s-lg text-center" colspan="4">Trajet</th>
              <th scope="col" class="px-6 py-3 rounded-e-lg text-center" rowspan="2">Validation</th>
          </tr>
          <tr>
              <th scope="col" class="px-6 py-3 text-center">Ville de départ</th>
              <th scope="col" class="px-6 py-3 text-center">Ville d'arrivée</th>
              <th scope="col" class="px-6 py-3 text-center">Nombre de places</th>
              <th scope="col" class="px-6 py-3 rounded-e-lg text-center">Prix (MAD)</th>
          </tr>
      </thead>
  
    <tbody>
      @foreach($reservations as $reservation)
         <tr class="bg-white dark:bg-gray-800">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                <div class="flex justify-center items-center align-middle gap-2  w-fit   shadow-sm bg-gray-100 rounded-full px-4 py-1">
                  <img  src="{{ $reservation->foto ? asset('storage/'.$reservation->foto) : asset('image/user.jpg') }}" class=" h-9 w-9 border border-[#14BC9C] rounded-full " alt="user">
                  <p class="text-[#334A5A] font-semibold align-middle text-sm ">  {{$reservation->first}} {{$reservation->last}}</p>
              </div>
              </th>
  <td class="px-6 py-4 text-center">
                      <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->places}}</p>  
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->villeD->nom}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->villeA->nom}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->nombre}}</p> 
  </td>  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$reservation->trajet->prix}}</p> 
  </td>
  <td class="px-6 py-4 flex justify-center align-items-center gap-2 ">
    @if($reservation->statuss == 'en attente')
    <form method="POST"  action="{{route('confirm',$reservation->ide)}}">
      @method('PUT')
      @csrf
          <button type="submit" class="text-white bg-green-500 hover:bg-green-700 w-32 focus:ring-4 focus:outline-none  focus:ring-red-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
           <i class="bi bi-check-circle"></i> Confirmer</button>
  </form> 
  <form method="POST"  action="{{route('rejet',$reservation->ide)}}">
  @method('PUT')
  @csrf
      <button type="submit" class="text-white bg-red-500 hover:bg-red-700 w-32 focus:ring-4 focus:outline-none  focus:ring-green-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
       <i class="bi bi-x-circle"></i> Rejeter</button>
  </form>
  @elseif($reservation->statuss == 'confirmer')
  <p class="text-white bg-gray-700 w-32 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-3 py-2 text-center ">Confirmé</p>
  @else
  <p class="text-white bg-gray-700 w-32 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-3 py-2 text-center ">Rejeté</p>
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

