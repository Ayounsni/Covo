<x-layout>    
    @include('partials.navbar1')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/route.png') }}" class="w-full" alt="">
    <div class="flex flex-col items-center justify-center mb-6 ">
    <p class=" text-center text-lg my-12 w-fit text-[#334A5A]  iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Ajouter Un Convoiturage</p>
      <form method="POST" class="flex flex-col mt-2 gap-6 w-[80%] lg:w-[65%]" action="{{route('addTrajete')}}" >
        @csrf
      <div class="flex justify-center gap-4">
        <div class="relative h-11 w-[80%]">
          <select name="villeD"  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-3 pb-0 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100">
            <option value="" disabled selected hidden>Choisissez une ville</option>
            @foreach($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->nom}}</option>
            @endforeach
          </select>
          <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Ville de Départ
          </label>
          <x-erreur field="villeD" />
        </div>
        <div class="relative h-11 w-[80%]">
          <select name="villeA" class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-3 pb-0 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500  focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100">
            <option value="" disabled selected hidden>Choisissez une ville</option>
            @foreach($villes as $ville)
            <option value="{{$ville->id}}">{{$ville->nom}}</option>
            @endforeach
          </select>
          <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Ville d'arrivée
          </label>
          <x-erreur field="villeA" />
        </div>
      </div>
      <div class="flex justify-center gap-4">
        <div class="relative h-11 mb-2 w-[80%]">
          <input placeholder="Ayoub" type="date" name="date" value="{{old('date')}}"
            class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
          <label
            class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
             after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Date
          </label>
          <x-erreur field="date" />
        </div>
        <div class="relative h-11 w-[80%]">
            <input placeholder="23:00" type="time" name="heure" value="{{old('heure')}}"
              class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
            <label
              class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
               after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              Heure
            </label>
            <x-erreur field="heure" />
          </div>
        </div>
        <div class="relative h-11 w-full min-w-[50%]">
          <input placeholder="1" type="number" name="place" value="{{old('place')}}"
            class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
          <label
            class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
             after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Nombre de place
          </label>
          <x-erreur field="place" />
        </div>
        <div class="relative h-11 w-full min-w-[50%]">
          <input placeholder="150" type="number"  name="prix" value="{{old('prix')}}"
            class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
          <label
            class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
             after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Prix par personne (MAD)
          </label>
          <x-erreur field="prix" />
        </div>       
      <button type="submit" class="text-gray-50 bg-[#15BC9C] text-center w-full py-1 px-3 rounded-lg hover:bg-opacity-70">Ajouter Trajet</button>
      </form>
    </div>
    
  </div>
</div>
     
</div>
</div>
           
    @include('partials.footer')

</x-layout>

