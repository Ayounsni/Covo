<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/ride.png') }}" class="w-full contrast-75 mb-20" alt="">
    <div class="flex justify-center ">
      <form method="POST" action="{{route('search')}}" class="flex w-[83%]  shadow-md rounded-3xl bg-white absolute top-80">
        @csrf
      <div class="py-3 pl-3 text-2xl"><i class="bi bi-geo-alt text-[#334A5A] "></i></div>
      <div>
        <input required  name="villeD" id = "villeDepartInput" type="text" placeholder="ville de depart" class="py-3 px-2 w-full outline-none  bg-white z-[20]">
        <div id = "villesDiv" class = "rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1] hidden">
          <ul id = "villesDepartDropdown">
            <!-- Dropdown items will be appended here -->
          </ul>
        </div>
      </div>
      <div  class="py-3 text-2xl"><i class="bi bi-geo-alt text-[#334A5A] "></i></div>
      <div>
        <input required name="villeA" id = "villesFinInput" type="text" placeholder="ville de depart" class="py-3 px-2 w-full outline-none bg-white">
        <div id = "villesDiv2" class = "rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1] hidden">
          <ul id = "villesFinDropdown">
            <!-- Dropdown items will be appended here -->
          </ul>
        </div>
      </div>
      <div class="py-3 text-2xl "><i class="bi bi-calendar4-week text-[#334A5A]"></i></i></div>
      <input name="date" type="date" placeholder="" class="py-3 px-2 w-[18%] outline-none bg-white ">
      <div class="py-3 text-2xl"><i class="bi bi-person text-[#334A5A]"></i></div>
      <input name="place" type="number" min="1" placeholder="1 passager" class="py-3 px-2 w-[18%] outline-none bg-white">
      <a href="{{route('convoiturage')}}" class="mt-3 px-2 text-2xl hover:text-red-500"><i class="bi bi-arrow-repeat"></i></a>
      <button type="submit" class="bg-[#334A5A] text-white text-center px-4 rounded-r-3xl shadow-md transition-all duration-500 safa hover:bg-left">Rechercher</button>
    </form>
  </div>
    <div class="flex flex-col justify-center items-center mb-10 ">
     @foreach($trajets as $trajet) 
    <div class="w-5/6  flex rounded-md mt-6 shadow-md bg-gray-100 ">
      <div class="w-[25%] align-middle flex justify-center items-center ">
        <img width="190" src="{{ asset('storage/'.$trajet->user->voiture->image) }}" class="rounded-md hover:scale-110 transition-all" alt="img">
      </div>
      <div class="w-[75%] flex flex-col justify-between items-between p-2">
        <div class="flex justify-between w-full">
          <a href="{{route('user',$trajet->user->id)}}">
          <div class="flex gap-1">
            <div>
            <img width="53"  src="{{ $trajet->user->photo ? asset('storage/'.$trajet->user->photo) : asset('image/user.jpg') }}" class="border-2 border-[#14BC9C] rounded-full " alt="user">
          </div>
            <div class="flex flex-col">
              <p class="text-sm font-semibold text-[#334A5A]">{{$trajet->user->prenom}} {{$trajet->user->nom}}</p>
              <p class="text-xs font-semibold text-[#334A5A]">{{$trajet->user->voiture->nom}},{{$trajet->user->voiture->model}}</p>
              {{-- <p class="text-xs font-semibold text-[#334A5A]"><i class="bi bi-star-fill text-xs text-yellow-500"></i> 5</p> --}}
            </div>
          </div>
          </a>
          <div class="flex gap-1 px-3 ">
            <div>
              <img width="60" src="{{ asset('image/trajet.png') }}" alt="logo">
            </div>
          <div class="flex flex-column gap-3 mt-1">
            <p class="font-semibold text-[#334A5A]">{{$trajet->villeD->nom}}</p>
            <p class="font-semibold text-[#334A5A]">{{$trajet->villeA->nom}}</p>
          </div>
        </div>
        </div>
        <p class="text-sm font-semibold text-[#334A5A] mb-1">{{$trajet->place}} place(s)</p>
        <div class="flex justify-between w-full mt-2 pr-2">
          <p class="text-lg font-bold text-[#334A5A]">{{ \Carbon\Carbon::parse($trajet->date)->format('d F') }}, {{ \Carbon\Carbon::parse($trajet->heure)->format('H:i') }} <span class="ml-4">{{$trajet->prix}} MAD</span></p>
          @if($trajet->user->id == auth()->user()->id )
          <p  class="py-1 px-4 text-white rounded-md transition-all  text-center duration-500 safa hover:bg-left ">  Mon trajet</p>
          @else
          <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="py-1 px-4 text-white rounded-md transition-all  text-center duration-500 safa hover:bg-left "> <i class="bi bi-ticket-perforated"></i> Réserver</button>
          <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-[#334A5A]">
                            Nombre de place
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="flex justify-center mt-4">
                      <form method="POST" class="flex flex-col items-center justify-center gap-6 w-[60%]" action="" >
                        @csrf        
                        <div class="relative h-11 mb-2 w-full min-w-[50%]">
                          <input placeholder="1" name="place" value="" type="number" min="1"
                            class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-900 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                          <label
                            class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                             after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Nom de place
                          </label>
                          <x-erreur field="place" />
                        </div>                              
                        <button type="submit" class="text-gray-50 bg-[#334A5A] text-start mt-2 w-fit py-2 px-3 rounded-lg hover:bg-[#466881]">Réserver</button>
                      </form>
                    </div> 
                </div>
            </div>
        </div>
          @endif
        </div>
        
      </div>

    </div>
    @endforeach
  </div>
  <div class="flex justify-center mt-12">
    <div class="my-3 w-full px-12">
        {{ $trajets->links() }}
    </div>
</div>
  </div>
</div>
     
</div>
</div>
           
    @include('partials.footer')

</x-layout>

<script>

function fillInput(name, input, div2) {
  let inputName = document.getElementById(input);
  input.value = String(name);

  div2.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1] hidden';
}

  $('#villeDepartInput').on('input', function() {
    let query = $(this).val();
    let villesDiv = document.getElementById('villesDiv');

    console.log(villesDiv);

    $.ajax({
        url: '{{ route("search.villes") }}',
        method: 'GET',
        data: { query: query },
        success: function(response) {
            let dropdown = $('#villesDepartDropdown');
            dropdown.empty();

            if (query.length == 0) {
              dropdown.empty();
              villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1] hidden';
            } else {
              if (response.length > 0) {
                villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1]';
                response.forEach(function(ville) {
                    dropdown.append(`<li onclick="fillInput('${ville.nom}', villeDepartInput, villesDiv)" class="cursor-pointer dropdown-item">${ville.nom}</li>`);
                });
              } else {
                villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1]';
                dropdown.append('<li class = "dropdown-item">No results found.</li>');
              }
            }

        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

$('#villesFinInput').on('input', function() {
    let query = $(this).val();
    let villesDiv = document.getElementById('villesDiv2');

    console.log(villesDiv);

    $.ajax({
        url: '{{ route("search.villes") }}',
        method: 'GET',
        data: { query: query },
        success: function(response) {
            let dropdown = $('#villesFinDropdown');
            dropdown.empty();

            if (query.length == 0) {
              dropdown.empty();
              villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1] hidden';
            } else {
              if (response.length > 0) {
                villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1]';
                response.forEach(function(ville) {
                    dropdown.append(`<li onclick = "fillInput('${ville.nom}', villesFinInput, villesDiv2)" class="cursor-pointer dropdown-item">${ville.nom}</li>`);
                });
              } else {
                villesDiv.className = 'rounded-lg bg-white absolute w-1/3 p-2 shadow-md z-[1]';
                dropdown.append('<li class = "dropdown-item">No results found.</li>');
              }
            }

        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});
</script>