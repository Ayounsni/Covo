<x-layout>    
  
        @include('partials.navbar')
        <div class="flex justify-center w-full mb-14">
            <div class="w-[50%] hidden lg:block">
                <img   width="740" src="{{ asset('image/contact.png') }}" alt="">
            </div>
            <div class="w-[100%] flex flex-col mt-14 items-center lg:w-[50%]">


            <div class="flex flex-col gap-6 w-[60%] lg:w-[48%] ">

                <p class="text-[#334A5A] text-center text-2xl font-semibold ">Contactez-nous</p>
                <p class="text-[#14BC9C] text-center mb-1">Laisser un message</p>

                <div class="relative h-11 mb-2 w-full min-w-[50%]">
                  <input placeholder="Entrez votre nom" 
                    class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                  <label
                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                     after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Nom
                  </label>
                </div>

                <div class="relative h-11 mb-2 w-full min-w-[50%]">
                  <input placeholder="Entrez votre E-mail"
                    class="peer h-full w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                  <label
                    class="after:content[''] pointer-events-none absolute left-0  -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform
                     after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    E-mail
                  </label>
                </div>

                <div class="relative w-full min-w-[50%]">
                  <textarea placeholder="Entrez votre message ici" 
                    class="peer h-24 w-full border-b border-blue-gray-300 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-red-500 focus:border-[#14BC9C] focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100"></textarea>
                  <label class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-[#14BC9C] peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Message
                  </label>
                </div>


                <button type="submit" class="text-gray-50 bg-[#334A5A] self-center w-fit py-2 px-3 rounded-lg hover:bg-[#466881]">Envoyer</button>

    
              </div> 
            </div>
        </div>
        @include('partials.footer')
     
     
 
    </x-layout>

