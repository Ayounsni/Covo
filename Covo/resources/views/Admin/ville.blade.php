<x-layout>
    @include('partials.navbar2')
    <div class="flex justify-center">
        <div
            class="min-h-screen w-full bg-white s border-x-2 position-relative lg:w-8/12"
        >
            <img src="{{ asset('image/dash.png') }}" class="w-full" alt="" />
            <div class="flex flex-col items-center justify-center">
                <p
                    class="text-center text-lg my-6 w-fit text-[#334A5A] iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                >
                    Gestion des villes
                </p>
                <div class="w-2/6 my-2">
                  <x-flash status="succes" /> 
                  <x-flash status="error" />
                </div>
            </div>

            <div class="flex justify-between px-3 my-4">
                <div class="flex w-[25%] border-b active:border-[#334A5A]">
                    <div class="text-xl px-2">
                        <i class="bi bi-search text-gray-400"></i>
                    </div>
                    <input
                        type="text"
                        placeholder="Chercher ville..."
                        class="px-2 outline-none bg-white"
                        id = "searchVille"
                    />
                </div>
                <button id="add" data-modal-target="default-modal" data-modal-toggle="default-modal"
                    type="submit"
                    class="py-1 px-4 text-white rounded-md transition-all text-center duration-500 safa hover:bg-left"
                >
                    <i class="bi bi-plus-lg"></i> Ajouter ville
                </button>
                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                      <!-- Modal content -->
                      <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                          <!-- Modal header -->
                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                              <h3 class="text-xl font-semibold text-[#334A5A]">
                                  Ajouter Ville
                              </h3>
                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                              </button>
                          </div>
                          <div class="flex justify-center mt-4">
                            <form method="POST" class="flex flex-col items-center justify-center gap-6 w-[60%]" action="{{route('addVille')}}" >
                              @csrf        
                              <div class="relative h-11 mb-2 w-full min-w-[50%]">
                                <input placeholder="Safi" name="nom" 
                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                  Nom du ville
                                </label>
                                <x-erreur field="nom" />
                              </div>                              
                              <button type="submit" class="text-gray-50 bg-[#334A5A] text-start mt-2 w-fit py-2 px-2 rounded-lg hover:bg-[#466881]">Ajouter</button>
                            </form>
                          </div> 
                      </div>
                  </div>
              </div>
            </div>
            <div class="relative overflow-x-auto px-2">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th
                                scope="col"
                                class="px-6 py-3 rounded-s-lg text-center"
                            >
                                Nom du ville
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Modifier
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 rounded-e-lg text-center"
                            >
                                Supprimer
                            </th>
                        </tr>
                    </thead>

                    <tbody id = "tableBody">
                        @foreach ($villes as $ville)
                        <tr class="bg-white dark:bg-gray-800">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                            >
                                <p class="text-md">{{ $ville->nom }}</p>
                            </th>
                            <td class="px-6 py-4 text-center">
                               
                                    <button data-modal-target="default-modal{{ $ville->id }}" data-modal-toggle="default-modal{{ $ville->id }}"
                                        type="submit"
                                        class="text-green-500 hover:scale-125 focus:outline-none align-middle font-medium text-md text-center"
                                    >
                                        <i class="bi bi-pencil"></i></button
                                >
                                <div id="default-modal{{ $ville->id }}" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                                      <!-- Modal content -->
                                      <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                                          <!-- Modal header -->
                                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-xl font-semibold text-[#334A5A]">
                                                  Modifier Ville
                                              </h3>
                                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal{{ $ville->id }}">
                                                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                  </svg>
                                                  <span class="sr-only">Close modal</span>
                                              </button>
                                          </div>
                                          <div class="flex justify-center mt-4">
                                            <form method="POST" class="flex flex-col items-center justify-center gap-6 w-[60%]" action="{{route('editVille',$ville->id)}}" >
                                              @method('PUT')
                                              @csrf        
                                              <div class="relative h-11 mb-2 w-full min-w-[50%]">
                                                <input placeholder="Safi" name="nom" value="{{ $ville->nom }}"
                                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-900 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                                <label
                                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                                  Nom du ville
                                                </label>
                                                <x-erreur field="nom" />
                                              </div>                              
                                              <button type="submit" class="text-gray-50 bg-[#334A5A] text-start mt-2 w-fit py-2 px-2 rounded-lg hover:bg-[#466881]">Modifier</button>
                                            </form>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                            </td>

                            <td
                                class="px-6 py-4 flex justify-center align-items-center gap-2"
                            >
                                <form method="POST" action="{{route('deleteVille',$ville->id)}}">
                                    @method('DELETE') @csrf
                                    <button
                                        type="submit"
                                        class="text-red-500 hover:scale-125 focus:outline-none align-middle font-medium text-md text-center"
                                    >
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="my-3 w-full px-12">
                  {{ $villes->links() }}
                   </div> 
            </div>
        </div>
    </div>

    @include('partials.footer')
</x-layout>

<script>
  var originalTableContent = $('#tableBody').html();
 $('#searchVille').on('input', function() {
    let query = $(this).val();

    $.ajax({
        url: '{{ route("search.villes.admin") }}',
        method: 'GET',
        data: { query: query },
        success: function(response) {
            let table = $('#tableBody');
            table.empty();

            if (query.length == 0) {
              table.html(originalTableContent);
            } else {
              table.empty();
              if (response.length > 0) {
                response.forEach(function(ville) {
                    table.append(`
                    <tr class="bg-white dark:bg-gray-800">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                            >
                                <p class="text-md">${ville.nom}</p>
                            </th>
                            <td class="px-6 py-4 text-center">
                              <button data-modal-target="default-modal-search${ville.id}" data-modal-toggle="default-modal-search${ville.id}"
                                        type="submit"
                                        class="text-green-500 hover:scale-125 focus:outline-none align-middle font-medium text-md text-center"
                                    >
                                        <i class="bi bi-pencil"></i></button
                                >
                                <div id="default-modal-search${ville.id}" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                  <div class="relative p-4 w-full max-w-2xl max-h-full">
                                      <!-- Modal content -->
                                      <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                                          <!-- Modal header -->
                                          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                              <h3 class="text-xl font-semibold text-[#334A5A]">
                                                  Modifier Ville
                                              </h3>
                                              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-search${ville.id}">
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
                                                <input placeholder="Safi" name="nom" value="${ville.nom}"
                                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-gray-900 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                                <label
                                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                                  Nom du ville
                                                </label>
                                                <x-erreur field="nom" />
                                              </div>                              
                                              <button type="submit" class="text-gray-50 bg-[#334A5A] text-start mt-2 w-fit py-2 px-2 rounded-lg hover:bg-[#466881]">Modifier</button>
                                            </form>
                                          </div> 
                                      </div>
                                  </div>
                              </div>
                            </td>

                            <td
                                class="px-6 py-4 flex justify-center align-items-center gap-2"
                            >
                                <form method="POST" action="/ville/${ville.id}">
                                    @method('DELETE') @csrf
                                    <button
                                        type="submit"
                                        class="text-red-500 hover:scale-125 focus:outline-none align-middle font-medium text-md text-center"
                                    >
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    `);
                });
              } else {
                table.append('<p class = "px-6 py-4 w-full flex justify-center items-center" >No results found.</p>');
              }
            }

        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

  window.onload = function() {
      @if (session('forme'))
          var boutonAfficherPopup = document.getElementById('add');
          if (boutonAfficherPopup) {
              boutonAfficherPopup.click();
          }
      @endif

  };
  
</script>