<x-layout>    
    @include('partials.navbar')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <img src="{{ asset('image/dash.png') }}" class="w-full" alt="">
    <div class="flex  justify-center">
    <p class=" text-center text-lg my-6 w-fit text-[#334A5A]  iconChange lg:text-2xl 
    hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 
    after:m-auto after:h-[3px] after:w-0 after:block">Statistique</p>
    </div>
    <div class="flex flex-col items-center lg:flex-row justify-center flex-wrap gap-12">
      <div class=" bg-[#F3F4F6] p-7 w-7/12 lg:w-4/12  shadow-md flex flex-col gap-2">
        <p class="text-2xl bg-[#334A5A] rounded-full text-white py-2 px-3 w-fit"><i class="bi bi-people"></i></p>
        <p class="text-3xl font-bold">{{$user}}</p>
        <div class="flex justify-between">
          <p class="text-gray-600 text-sm font-semibold">Total utilisateurs</p>
          <p class="text-[#1AB799] text-sm font-semibold">0.95% ↑</p>
        </div>
      </div>
      <div class=" bg-[#F3F4F6] p-7 w-7/12 lg:w-4/12  shadow-md flex flex-col gap-2">
        <p class="text-2xl bg-[#334A5A] rounded-full text-white py-2 px-3 w-fit"><i class="bi bi-sign-turn-left"></i></p>
        <p class="text-3xl font-bold">{{$trajet}}</p>
        <div class="flex justify-between">
          <p class="text-gray-600 text-sm font-semibold">Total convoiturages</p>
          <p class="text-[#1AB799] text-sm font-semibold">8.95% ↓</p>
        </div>
      </div>
      <div class=" bg-[#F3F4F6] p-7 w-7/12 lg:w-4/12   shadow-md flex flex-col gap-2">
        <p class="text-2xl bg-[#334A5A] rounded-full text-white py-2 px-3 w-fit"><i class="bi bi-ticket-perforated"></i></p>
        <p class="text-3xl font-bold">{{$reservation}}</p>
        <div class="flex justify-between">
          <p class="text-gray-600 text-sm font-semibold">Total réservations</p>
          <p class="text-[#1AB799] text-sm font-semibold">5.25% ↑</p>
        </div>
      </div>
      <div class=" bg-[#F3F4F6] p-7 w-7/12 lg:w-4/12   shadow-md flex flex-col gap-2">
        <p class="text-2xl bg-[#334A5A] rounded-full text-white py-2 px-3 w-fit"><i class="bi bi-star"></i></p>
        <p class="text-3xl font-bold">{{$evaluation}}</p>
        <div class="flex justify-between">
          <p class="text-gray-600 text-sm font-semibold">Total evaluations</p>
          <p class="text-[#1AB799] text-sm font-semibold">2.85% ↓ </p>
        </div>
      </div>

    </div>
    <div class="flex justify-center w-full my-8">
    <div class="relative overflow-x-auto w-8/12 shadow-md">
      <table
          class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-3"
      >
          <thead
              class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400"
          >
              <tr>
                  <th
                      scope="col"
                      class="px-6 py-3 rounded-s-lg text-center"
                  >
                  Les trois premiers utilisateurs qui ont publié le plus de trajets
                  </th>

              </tr>
          </thead>
        
          <tbody>
            @foreach($utilisateurs as $utilisateur)
              <tr class="bg-white dark:bg-gray-800">
                  <th
                      scope="row"
                      class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                  >
                      <div
                          class="flex justify-between gap-1 items-center w-auto"
                      >
                      <div class="d-flex justify-content-center gap-1 align-items-center w-auto">
                          <img
                              src="{{ $utilisateur->photo ? asset('storage/'.$utilisateur->photo) : asset('image/user.jpg') }}"
                              alt="logo"
                              class="w-11 h-11 rounded-full"
                          />
                          <p
                              class="text-sm font-semibold text-[#334A5A]"
                          >
                              {{$utilisateur->prenom}} {{$utilisateur->nom}}
                          </p>
                        </div>
                        <p class=" bg-[#334A5A] rounded-full text-white py-1 px-2 w-fit">{{$utilisateur->nombre_trajets}} Trajets</p>
                      </div>
                  </th>
              </tr>
          </tbody>  
          @endforeach
      </table>
  </div>
</div>   
</div>
</div>
   @include('partials.footer')
</x-layout>

