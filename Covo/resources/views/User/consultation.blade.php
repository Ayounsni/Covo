<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <div class="bg-[#14BC9C]">
    <div class="flex justify-center">
    <p class="text-xl lg:text-3xl items-center text-gray-50 self-center font-bold my-10">{{$user->prenom }} {{$user->nom }}</p>
    </div>
    <div class="flex justify-between px-6 lg:justify-around lg:px-0">
        <div class="flex flex-col justify-center items-center w-[25%] mb-16 ">
            <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold rounded-full px-2  bg-[#61ccb8]"></i> Contact</p>
            <p class="text-gray-50 text-center text-sm lg:text-lg ">{{$user->email }}</p>
            <!-- <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold "><i class="bi bi-envelope-at-fill text-[#334A5A]"></i></p> -->
        </div>
        <div class="flex flex-col justify-center items-center w-[25%] mb-16">
            <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold rounded-full px-2  bg-[#61ccb8]"></i>Note</p>
            <p class="text-gray-50 text-center text-sm lg:text-lg "> {{ number_format($moyenne, 1) }} / 5 <i class="bi bi-star-fill text-yellow-500"></i></p>
            <!-- <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold"><i class="bi bi-star-fill text-yellow-500"></i></p> -->
        </div>
    </div>
    <div class="flex justify-center ">
    <img  class="absolute top-32  rounded-full border-4 border-[#14BC9C] w-36 h-36 lg:w-56 lg:h-56 " src="{{ $user->photo ? asset('storage/'.$user->photo) : asset('image/user.jpg') }}" alt="img">
    </div>


    </div>
    <div class="flex justify-between px-2 m my-4 lg:justify-around lg:px-0">
             @if($user->cin)
             @if($user->cin->status == 'en attente')
             <p class="text-center text-xs lg:text-lg pr-20 font-semibold text-red-600 pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"><i class="bi bi-x-octagon"></i> Identité non vérifiée</p>
             @elseif($user->cin->status == 'confirmer')
             <p class="text-center text-xs lg:text-lg font-semibold  text-green-600 pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"><i class="bi bi-shield-check"></i> Identité vérifiée</p>
             @else
             <p class="text-center text-xs lg:text-lg pr-20 font-semibold text-red-600 pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"><i class="bi bi-x-octagon"></i> Identité non vérifiée</p>
             @endif
             @else
             <p class="text-center text-xs lg:text-lg pr-20 font-semibold text-red-600 pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"><i class="bi bi-x-octagon"></i> Identité non vérifiée</p>
            @endif


            <button  data-modal-target="default-modal2" data-modal-toggle="default-modal2" class=" text-center text-xs 
            lg:text-lg text-[#334A5A] pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 
            after:m-auto after:h-[3px] after:w-0 after:block">Donner une évaluation</button>
            <div id="default-modal2" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-[#334A5A]">
                                Ajouter une évaluation
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal2">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                          <form method="POST" class="flex flex-col items-center justify-center gap-6 w-[60%]" action="{{route('evaluation',$user->id)}}" enctype="multipart/form-data">
                            @csrf
                        
                           
                            <div class="relative h-11 w-[100%]">
                              <select name="note"  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-3 pb-0 font-sans text-sm font-normal text-[#14BC9C] outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100">
                                <option value="" disabled selected hidden>Notez</option>
                                <option value="1">★☆☆☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="4">★★★★☆</option>
                                <option value="5">★★★★★</option>

                              </select>
                              <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Note
                              </label>
                              <x-erreur field="note" />
                            </div>
                            <div class="relative w-full min-w-[50%]">
                              <textarea placeholder="Entrez votre commentaire ici" name="commentaire"
                                class="peer h-24 w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100"></textarea>
                              <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Commentaire
                              </label>
                              <x-erreur field="commentaire" />
                            </div>
                            <button type="submit" class="text-gray-50 bg-[#334A5A] text-start w-fit mt-3 py-2 px-3 rounded-lg hover:bg-[#466881]">Ajouter</button>
                        
                          </form>
                        </div> 
                    </div>
                </div>
            </div>
    </div>
    <div class="flex flex-col items-center justify-center mt-20">
      <div class="flex justify-center w-2/6 text-center">
      <x-flash status="succes" />
    </div>
    @if($user->voiture)
    <div class="flex justify-center items-center rounded-lg py-1  w-full">
        <div class="w-64 lg:w-[29%] z-2 ">
            <img width="240" src="{{ asset('storage/'.$user->voiture->image) }}" class=" rounded-r-full border-r-4 border-t-4 border-[#14BC9C] transition-all hover:blur-[1px]" alt="auto">
        </div>
        <div class="flex flex-col justify-center items-start align-middle gap-2 w-full">
            <p class="bg-[#14BC9C] pl-28 lg:pl-24 pt-2 pb-2 pr-4 relative right-8 lg:right-2 lg:right-8 rounded-r-full z-1 text-[#334A5A] text-sm lg:text-xl text-white shadow-md">{{$user->voiture->nom}}</p>
            <div class = "bg-[#0a5c4d] rounded-br-full px-6 relative bottom-2 right-4 pl-18 lg:right-10 lg:pl-12 pr-8 z-0 text-white">
                <p class = "text-sm">Model: <span class = "text-xs pl-2">{{$user->voiture->model}}</span></p>
                <p class = "text-sm">Matricule: <span class = "text-xs pl-2">{{$user->voiture->matricule}}</span></p>
            </div> 

        </div>
    </div>
    @endif
    <p class="text-center text-[#334A5A] text-lg w-full mb-6 px-2 py-2 font-semibold mt-10 text-gray-50 border-y-2 bg-[#14BC9C]">Commentaires ({{$total}})</p>
    <div class="flex flex-col items-center justify-center gap-4 px-12 ">
      @foreach ($commentaires as $commentaire)
        <div class="flex flex-col p-3 border-2 mb-2 w-full">
          <div class="flex justify-between">
            <a href="{{route('user',$commentaire->user->id)}}">
            <div class="flex justify-center items-center align-middle gap-2 border-2 w-fit mb-2   border-[#14BC9C] bg-gray-100 rounded-full pr-2 ">
                <img  src="{{ $commentaire->user->photo ? asset('storage/'.$commentaire->user->photo) : asset('image/user.jpg') }}" class=" w-10 h-10 border border-[#14BC9C] rounded-full " alt="user">
                <p class="text-[#334A5A] font-semibold align-middle text-sm "> {{$commentaire->user->nom}} {{$commentaire->user->prenom}}</p>
            </div>
          </a>
            <p class="font-semibold text-[#334A5A]">{{ $commentaire->created_at->format('Y-m-d') }}</p>
          </div>
            <div class="flex gap-1 mb-1">
             <p class="font-semibold text-[#334A5A]">Note:</p>
            @for ($i = 0; $i < $commentaire->note; $i++)
              <i class="bi bi-star-fill text-[#F4C600]"></i> 
            @endfor
            @for ($i = $commentaire->note; $i < 5; $i++)
            <i class="bi bi-star text-[#F4C600]"></i>
            @endfor
          </div>
            <p>{{$commentaire->commentaire}}</p>
        </div>
        @endforeach
    </div>
    <div class="my-3 w-full px-12">
      {{ $commentaires->links() }}
       </div> 
</div>    
</div>
</div>     
</div>
</div>
           
    @include('partials.footer')

</x-layout>

<script>
  window.onload = function() {
      @if (session('form_submission_failed'))
          var boutonAfficherPopup = document.getElementById('boutton');
          if (boutonAfficherPopup) {
              boutonAfficherPopup.click();
          }
      @endif
      @if (session('form_submission'))
          var boutonAfficherPopup = document.getElementById('submit');
          if (boutonAfficherPopup) {
              boutonAfficherPopup.click();
          }
      @endif
      @if (session('form'))
          var boutonAfficherPopup = document.getElementById('add');
          if (boutonAfficherPopup) {
              boutonAfficherPopup.click();
          }
      @endif
  };
  
</script>

