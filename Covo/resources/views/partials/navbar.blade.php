<nav class="bg-gray-100 shadow-md">
    <div class="flex items-center justify-between py-2 px-3 border-b ">
        <div class="flex items-center gap-2">
            <div class=""><img src="{{ asset('image/carr.png') }}" class="h-12 py-1" alt="logo"></div>
        </div>
        <div class="flex items-center">
            <div class="hidden lg:block">
                <ul class="flex items-center justify-center text-sm text-blue-900">
                    <li
                        class=" text-center text-[#334A5A] pt-2 mr-6 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                        <a href="#">

                            <div class="">Book</div>
                        </a>
                    </li>
                    <li
                        class=" mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                        <a href="#">

                            <div class="">Navigate</div>
                        </a>
                    </li>
                    <li
                        class=" mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                        <a href="#">

                            <div>Stats</div>
                        </a>
                    </li>
                    <li
                        class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                        <a href="#">    
                            <div>Idea</div>
                        </a>
                    </li>
                    <li
                        class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                        <a href="#">

                            <div>Career</div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="xl:hidden">
                <div class="flex items-center justify-center w-8 h-8 mr-4 rounded-full bg-slate-100">
                </div>
            </div>
            <div class="flex items-center">
                <div class="hidden lg:inline-block">
                    <button type="button "
                    class=" flex items-center g gap-2 px-4 py-1 mr-2 text-white transition-all duration-500 safa hover:bg-left rounded-3xl">
                    Inscription <i class="bi bi-person-lines-fill"></i>
                </button>
                </div>
                <div class="hidden lg:inline-block">
                    <button type="button "
                    class=" flex items-center g gap-2 px-4 py-1 mr-2 text-white transition-all duration-500 ayoub hover:bg-left rounded-3xl">
                    Connexion <i class="bi bi-box-arrow-right"></i>
                </button>
                </div>
                <div class="hidden lg:inline-block">
            </div>
            <div class="lg:hidden">
                <button class="navbar-burger text-[#14BC9C] focus:outline-none">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                </div>
        </div>
    </div>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <div class=""><img src="{{ asset('image/carr.png') }}" class="h-12" alt="logo"></div>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-[#14BC9C]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="mt-3">
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Services</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-3 py-2 mb-2 leading-loose text-md  text-center text-white font-semibold ayoub hover:bg-left  rounded-xl" href="#">Connexion <i class="bi bi-box-arrow-right"></i></a>
                <a class="block px-3 py-2 mb-2 leading-loose text-md  text-center text-white font-semibold safa hover:bg-left  rounded-xl" href="#">Inscription <i class="bi bi-person-lines-fill"></i></a>
            </div>
        </div>
    </nav>
</div>