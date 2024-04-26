<x-layout>
    @include('partials.navbar2')
    <div class="flex justify-center">
        <div
            class="min-h-screen w-full bg-white s border-x-2 position-relative lg:w-8/12"
        >
            <img src="{{ asset('image/dash.png') }}" class="w-full" alt="" />
            <div class="flex justify-center">
                <p
                    class="text-center text-lg my-6 w-fit text-[#334A5A] iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                >
                    Vérification C.I.N
                </p>
            </div>
            <div class="relative overflow-x-auto">
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
                                Utilisateur
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                N° C.I.N
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 rounded-e-lg text-center"
                            >
                                c.i.n 
                            </th>

                            <th
                                scope="col"
                                class="px-6 py-3 rounded-e-lg text-center"
                            >
                                Status
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-white dark:bg-gray-800">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                            >
                                <div
                                    class="flex justify-center items-center align-middle gap-2 w-fit shadow-sm bg-gray-100 rounded-full px-2 py-1"
                                >
                                    <img
                                        width="34"
                                        src="{{ asset('image/ayb.jpg') }}"
                                        class="border border-[#14BC9C] rounded-full"
                                        alt="user"
                                    />
                                    <p
                                        class="text-[#334A5A] font-semibold align-middle text-sm"
                                    >
                                        Yassir Aitlh
                                    </p>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-center">
                                <p class="text-sm font-semibold text-[#334A5A]">
                                    HH74718
                                </p>
                            </td>
                            <td
                                class="px-3 py-2 align-middle flex  justify-center items-center gap-2"
                            >
                                <div
                                    class="w-[28%] "
                                >
                                  <button  data-modal-target="default-modal" data-modal-toggle="default-modal">  <img
                                        width="190"
                                        src="{{ asset('image/cin.jpg') }}"
                                        class="rounded-md hover:scale-110 transition-all"
                                        alt=""
                                    /></button>
                                    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                      <div class="relative p-4 w-4/12 max-h-full">
                                          <!-- Modal content -->
                                          <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                                              <!-- Modal header -->
                                              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                  <h3 class="text-xl font-semibold text-[#334A5A]">
                                                      Carte d'identité (recto)
                                                  </h3>
                                                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                      </svg>
                                                      <span class="sr-only">Close modal</span>
                                                  </button>
                                              </div>
                                            
                                                <div class="w-full flex justify-center mt-4">
                                                <img
                                        width="350"
                                        src="{{ asset('image/cin.jpg') }}"
                                        class="rounded-md "
                                        alt=""
                                           />
                                          </div>
                                                 
                                              
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div
                                class="w-[28%] "
                            >
                            <button data-modal-target="default-modal1" data-modal-toggle="default-modal1">  <img
                              width="190"
                              src="{{ asset('image/cine.jpg') }}"
                              class="rounded-md hover:scale-110 transition-all"
                              alt=""
                          /></button>
                          <div id="default-modal1" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-4/12 max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-[#334A5A]">
                                            Carte d'identité (verso)
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal1">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                  
                                      <div class="w-full flex justify-center mt-4">
                                      <img
                              width="350"
                              src="{{ asset('image/cine.jpg') }}"
                              class="rounded-md "
                              alt=""
                                 />
                                </div>
                                       
                                    
                                </div>
                            </div>
                        </div>
                            </div>
                            </td>

                            <td class="px-2 py-4 ">
                                <button
                                    type="submit"
                                    class="text-white bg-green-500 hover:bg-green-700 w-32 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                >
                                    <i class="bi bi-check-circle"></i> Confirmer
                                </button>
                                      
                 <button type="submit" class="text-white bg-red-500 hover:bg-red-700 w-32 focus:ring-4 focus:outline-none  focus:ring-green-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 <i class="bi bi-x-circle"></i> Rejeter</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    @include('partials.footer')
</x-layout>
