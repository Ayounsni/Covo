<x-layout>    
    @include('partials.navbar1')
    <div class="flex justify-center"> 
  <div class="min-h-screen w-full  bg-white s border-x-2 position-relative lg:w-8/12 ">
    <div class="bg-[#14BC9C]">
    <div class="flex justify-center">
    <p class="text-xl lg:text-3xl items-center text-gray-50 self-center font-bold my-10">Ayoub Snini</p>
    </div>
    <div class="flex justify-between px-6 lg:justify-around lg:px-0">
        <div class="flex flex-col justify-center items-center w-[25%] mb-16 ">
            <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold rounded-full px-2  bg-[#61ccb8]"></i> Contact</p>
            <p class="text-gray-50 text-center text-sm lg:text-lg ">ayoub@gmail.com</p>
            <!-- <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold "><i class="bi bi-envelope-at-fill text-[#334A5A]"></i></p> -->
        </div>
        <div class="flex flex-col justify-center items-center w-[25%] mb-16">
            <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold rounded-full px-2  bg-[#61ccb8]"></i>Note</p>
            <p class="text-gray-50 text-center text-sm lg:text-lg "> 4.5 / 5 <i class="bi bi-star-fill text-yellow-500"></i></i></p>
            <!-- <p class="text-gray-50 text-center text-sm lg:text-lg font-semibold"><i class="bi bi-star-fill text-yellow-500"></i></p> -->
        </div>
    </div>
    <div class="flex justify-center ">
    <img  class="absolute top-32  rounded-full border-4 border-[#14BC9C] w-[150px] lg:w-[220px] " src="{{ asset('image/ayb.jpg') }}" alt="">
    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="absolute px-3 lg:top-80 font-semibold rounded-full text-2xl text-gray-50 safa hover:bg-left">+</button>
    </div>
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-[#334A5A]">
                        Photo de profile
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="mx-auto w-3/4">
                    <label for="example1" class="mb-1 block text-sm font-medium mt-2 text-gray-700">Photo</label>
                    <div class="flex justify-between">
                    <input id="example1" type="file" class="block w-full mt-2 text-sm  file:rounded-full file:border-0 file:bg-[#334A5A] file:hover:bg-[#466881] file:py-2 file:px-3 file:text-sm file:font-semibold file:text-white hover:file:bg-primary-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                    <button type="submit" class="text-gray-50 bg-[#334A5A] text-end w-fit  px-2 rounded-lg hover:bg-[#466881]">Terminer</button>
                     </div>
                  </div>
            </div>
        </div>
    </div>

    </div>
    <div class="flex justify-between px-2 m my-4 lg:justify-around lg:px-0">

            <button  data-modal-target="default-modal1" data-modal-toggle="default-modal1" class="text-center text-sm lg:text-lg  text-[#334A5A] pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Verifier mon identité</button>
            <div id="default-modal1" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-[#334A5A]">
                                Verifier mon identité
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal1">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                        <div class="flex flex-col items-center justify-center gap-6 w-[60%] ">

            
                            <div class="relative h-11 mb-2 w-full min-w-[50%]">
                              <input placeholder="xyz@exemple.com"
                                class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                              <label
                                class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                 after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                E-mail
                              </label>
                            </div>
                            <div class="relative h-11 w-full min-w-[50%]">
                                <input placeholder="•••••••••" type="password"
                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                  Mot de passe
                                </label>
                              </div>
                            
                            <button type="submit" class="text-gray-50 bg-[#334A5A] text-start w-fit py-2 px-2 rounded-lg hover:bg-[#466881]">Confirmer</button>
                          </div>
                        </div> 
                    </div>
                </div>
            </div>
            <button data-modal-target="default-modal2" data-modal-toggle="default-modal2" class=" text-center text-sm lg:text-lg text-[#334A5A] pt-1 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">Ajouter vehicule</button>
            <div id="default-modal2" tabindex="-1" aria-hidden="true" class="hidden  overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white pb-10 rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-[#334A5A]">
                                Ajouter vehicule
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal2">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                        <div class="flex flex-col items-center justify-center gap-6 w-[60%] ">
                           
                            <div class="relative h-11 mb-2 w-full min-w-[50%]">
                                <input placeholder="xyz@exemple.com"
                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                  E-mail
                                </label>
                              </div>
                            <div class="relative h-11 mb-2 w-full min-w-[50%]">
                              <input placeholder="xyz@exemple.com"
                                class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                              <label
                                class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                 after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                E-mail
                              </label>
                            </div>
                            <div class="relative h-11 w-full min-w-[50%]">
                                <input placeholder="•••••••••" type="password"
                                  class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                                <label
                                  class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                                   after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                  Mot de passe
                                </label>
                              </div>
                            
                            <button type="submit" class="text-gray-50 bg-[#334A5A] text-start w-fit py-2 px-2 rounded-lg hover:bg-[#466881]">Ajouter</button>
                          </div>
                        </div> 
                    </div>
                </div>
            </div>
    </div>
    <div class="flex flex-col items-center justify-center mt-20">
    
    <div class="flex justify-center items-center rounded-lg py-1  w-full">
        <div class="w-64 lg:w-[29%] z-2 ">
            <img width="240" src="{{ asset('image/peu.jpg') }}" class="rounded-r-full border-r-4 border-t-4 border-[#14BC9C] transition-all" alt="auto">
        </div>
        <div class="flex flex-col justify-center items-start align-middle gap-2 w-full">
            <p class="bg-[#14BC9C] pl-28 lg:pl-24 pt-2 pb-2 pr-4 relative right-8 lg:right-2 lg:right-8 rounded-r-full z-1 text-[#334A5A] text-sm lg:text-xl text-white shadow-md">Peugeot 206</p>
            <div class = "bg-[#0a5c4d] rounded-br-full px-6 relative bottom-2 right-4 pl-18 lg:right-10 lg:pl-12 pr-8 z-0 text-white">
                <p class = "text-sm">Model: <span class = "text-xs pl-2">2018</span></p>
                <p class = "text-sm">Matricule: <span class = "text-xs pl-2">54-52149</span></p>
            </div> 

        </div>

    </div>
    <p class="text-center text-[#334A5A] text-lg w-full mb-6 px-2 py-2 font-semibold mt-10 text-gray-50 border-y-2 bg-[#14BC9C]">Commentaires (3)</p>
    <div class="flex flex-col items-center justify-center gap-4 ">
        <div class="flex flex-col px-3 py-2 border-2 mb-2 w-5/6">
            <div class="flex justify-center items-center align-middle gap-2 border-2 w-fit mb-2   border-[#14BC9C] bg-gray-100 rounded-full px-2 py-1">
                <img width="34" src="{{ asset('image/ayb.jpg') }}" class="border border-[#14BC9C] rounded-full " alt="user">
                <p class="text-[#334A5A] font-semibold align-middle text-sm ">  Ayoub Snini</p>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti ad repellat a aut architecto? Iste nesciunt possimus
                 molestiae nisi, voluptatem vero aut amet laboriosam, vitae quisquam et fuga itaque. Pariatur. Lorem, ipsum dolor sit amet
                  consectetur adipisicing elit. Quos soluta voluptas blanditiis quo provident unde maxime id, error nesciunt tenetur consequatur
                   dolores repellat nemo, reprehenderit praesentium consectetur eligendi voluptatem voluptatum!</p>
        </div>
        <div class="flex flex-col px-3 py-2 border-2 mb-2 w-5/6">
            <div class="flex justify-center items-center align-middle gap-2 border-2 w-fit mb-2   border-[#14BC9C] bg-gray-100 rounded-full px-2 py-1">
                <img width="34" src="{{ asset('image/yassir.jpg') }}" class="border border-[#14BC9C] rounded-full " alt="user">
                <p class="text-[#334A5A] font-semibold align-middle text-sm ">  Yassir Aitlh</p>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti ad repellat a aut architecto? Iste nesciunt possimus
                 molestiae nisi, voluptatem vero aut amet laboriosam, vitae quisquam et fuga itaque. Pariatur. Lorem, ipsum dolor sit amet
                  consectetur adipisicing elit. Quos soluta voluptas blanditiis quo provident unde maxime id, error nesciunt tenetur consequatur
                   dolores repellat nemo, reprehenderit praesentium consectetur eligendi voluptatem voluptatum!</p>
        </div>
        <div class="flex flex-col px-3 py-2 border-2  w-5/6">
            <div class="flex justify-center items-center align-middle gap-2 border-2 w-fit mb-2   border-[#14BC9C] bg-gray-100 rounded-full px-2 py-1">
                <img width="34" src="{{ asset('image/abdo.jpg') }}" class="border border-[#14BC9C] rounded-full " alt="user">
                <p class="text-[#334A5A] font-semibold align-middle text-sm ">  Abdollah Talmesi</p>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti ad repellat a aut architecto? Iste nesciunt possimus
                 molestiae nisi, voluptatem vero aut amet laboriosam, vitae quisquam et fuga itaque. Pariatur. Lorem, ipsum dolor sit amet
                  consectetur adipisicing elit. Quos soluta voluptas blanditiis quo provident unde maxime id, error nesciunt tenetur consequatur
                   dolores repellat nemo, reprehenderit praesentium consectetur eligendi voluptatem voluptatum!</p>
        </div>
        <nav aria-label="Page navigation example mb-10">
            <ul class="inline-flex -space-x-px text-sm mb-10">
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
              </li>
              <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-[#14BC9C] border border-gray-300 bg-green-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
              </li>
              <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
              </li>
            </ul>
          </nav>

    </div>


</div>
    
    </div>
</div>
     
</div>
</div>
           
    @include('partials.footer')

</x-layout>

