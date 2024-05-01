<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/dash.png') }}" class="w-full" alt="">
    <div class="flex justify-center">
    <p class=" text-center text-lg my-6 w-fit text-[#334A5A]  iconChange lg:text-2xl 
    hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 
    after:m-auto after:h-[3px] after:w-0 after:block">Gestion des Trajets</p>
    </div>
    <div class="w-2/6 my-2">
      <x-flash status="succes" />
      <x-flash status="error" />
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
                    nombre de place
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                  Prix(MAD)
              </th>
                 <th scope="col" class="px-6 py-3 rounded-e-lg text-center">
                     Status
                 </th>
              </tr>
        </thead>
  @foreach($trajets as $trajet)
    <tbody>
         <tr class="bg-white dark:bg-gray-800">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
            <div class="flex ">
              <div>
              <img width="48"  src="{{ $trajet->user->photo ? asset('storage/'.$trajet->user->photo) : asset('image/user.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
            </div>
              <div class="flex flex-col">
                <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->user->prenom}} {{$trajet->user->nom}}</p>
                <p class="text-xs font-semibold text-[#334A5A]">{{$trajet->user->voiture->nom}},{{$trajet->user->voiture->model}}</p>
              </div>
            </div>
          </th>
  <td class="px-6 py-4 text-center">
                      <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->villeD->nom}}</p>  
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->villeA->nom}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->place}}</p> 
  </td>
  <td class="px-6 py-4 text-center">
    <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->prix}}</p> 
  </td>
  <td class="px-6 py-4 flex justify-center align-items-center gap-2 ">
    @if($trajet->status == 'en attente')
       <form method="POST"  action="{{route('confirmer.route',$trajet->id)}}">
           @method('PUT')
           @csrf
               <button type="submit" class="text-white bg-green-500 hover:bg-green-700 w-32 focus:ring-4 focus:outline-none  focus:ring-red-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="bi bi-check-circle"></i> Confirmer</button>
       </form> 
       <form method="POST"  action="{{route('rejeter.route',$trajet->id)}}">
       @method('PUT')
       @csrf
           <button type="submit" class="text-white bg-red-500 hover:bg-red-700 w-32 focus:ring-4 focus:outline-none  focus:ring-green-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <i class="bi bi-x-circle"></i> Rejeter</button>
       </form>
       @elseif($trajet->status == 'confirmer')
       <p class="text-white bg-gray-700 w-32 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-3 py-2 text-center ">Confirmé</p>
       @else
       <p class="text-white bg-gray-700 w-32 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-3 py-2 text-center ">Rejeté</p>
      @endif
</td>
</tr>
</tbody>
@endforeach
</table>
<div class="my-3 w-full px-12">
  {{ $trajets->links() }}
</div>
</div> 

    
  </div>
</div>         
    @include('partials.footer')

</x-layout>

