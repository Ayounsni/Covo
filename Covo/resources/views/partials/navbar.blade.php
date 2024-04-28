<nav class="bg-gray-100 shadow-md">
    <div class="flex items-center justify-between py-2 px-3 border-b ">
        <div class="flex items-center gap-2">
            <div class=""><img src="{{ asset('image/carr.png') }}" class="h-12 py-1" alt="logo"></div>
        </div>
        <div class="flex items-center">
            <div class="hidden lg:block">
                <ul class="flex items-center justify-center text-sm text-blue-900">

                     @guest
                     <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/">    
                         <div>Acceuil</div>
                     </a>
                 </li>
                 <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/contact">

                         <div>Contact</div>
                     </a>
                 </li>
                     @endguest
                     @admin
                     <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/">    
                         <div>Tableau de bord</div>
                     </a>
                 </li>
                 <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/contact">

                         <div>Utilisateur</div>
                     </a>
                 </li>
                 <li
                 class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                 <a href="/">    
                     <div>Villes</div>
                 </a>
             </li>
             <li
                 class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                 <a href="/contact">

                     <div>Trajets</div>
                 </a>
             </li>
             <li
             class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
             <a href="/">    
                 <div>Vérification</div>
             </a>
         </li>

                     @endadmin
                     @user
                     <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/">    
                         <div>Convoiturage</div>
                     </a>
                 </li>
                 <li
                     class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                     <a href="/contact">

                         <div>Ajouter Trajet</div>
                     </a>
                 </li>
                 <li
                 class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                 <a href="/">    
                     <div>Mes trajets</div>
                 </a>
             </li>
             <li
                 class="mr-6 text-center text-[#334A5A] pt-2 iconChange hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block">
                 <a href="/contact">

                     <div>Réservation</div>
                 </a>
             </li>

                     @enduser

                </ul>
            </div>

            <div class="xl:hidden">
                <div class="flex items-center justify-center w-8 h-8 mr-4 rounded-full bg-slate-100">
                </div>
            </div>
            <div class="flex items-center gap-2">
                @guest
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
                @endguest
                @user
                <a href="/profile">
                    <div class="hidden lg:flex justify-center items-center align-middle gap-2 border-2 w-fit   border-[#14BC9C] bg-green-50 rounded-full px-2 py-1">
                        <p class="text-[#334A5A] font-semibold align-middle text-sm ">{{$user->prenom }} {{$user->nom }}</p>
                        <img  src="{{ $user->photo ? asset('storage/'.$user->photo) : asset('image/user.jpg') }}" class="w-10 h-9 border border-[#14BC9C] rounded-full"  alt="user">
                    </div>
                     </a>
                    <div class="hidden lg:inline-block">
                     <a href="{{route('logout')}}">  <button type="button "
                        class=" flex items-center g gap-2 px-3 py-2 mr-2 text-white transition-all duration-500 safa hover:bg-left rounded-3xl">
                        <i class="bi bi-box-arrow-right"></i>
                    </button></a> 
                    </div>
                @enduser
                @admin
                                <a href="/profile">
                <div class="hidden lg:flex justify-center items-center align-middle gap-2 border-2 w-fit   border-[#334A5A] bg-[#F6F6F6] rounded-full px-2 py-1">
                    <p class="text-[#334A5A] font-semibold align-middle text-sm ">  Admin</p>
                    <img width="34" src="{{ asset('image/icone.png') }}" class="border border-[#14BC9C] rounded-full"  alt="user">
                </div>
                 </a>
                <div class="hidden lg:inline-block">
                    <a href="{{route('logout')}}">  <button type="button "
                        class=" flex items-center g gap-2 px-3 py-2 mr-2 text-white transition-all duration-500 safa hover:bg-left rounded-3xl">
                        <i class="bi bi-box-arrow-right"></i>
                    </button></a> 
                </div>
                @endadmin
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
                @guest
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Acceuil</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Contact</a>
                </li> 
                @endguest
                @user
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Convoiturage</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Ajouter Trajet</a>
                </li> 
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Mes trajets</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Réservation</a>
                </li>  
                @enduser
                @admin
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Tableau de bord</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Utilisateur</a>
                </li> 
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Villes</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Trajets</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-[#334A5A] hover:bg-[#b1e6dc] hover:text-[#334A5A] rounded" href="#">Vérification</a>
                </li>
                @endadmin


            </ul>
        </div>
        <div class="mt-auto">
            @guest
            <div class="pt-6">
                <a class="block px-3 py-2 mb-2 leading-loose text-md  text-center text-white font-semibold ayoub hover:bg-left  rounded-xl" href="#">Connexion <i class="bi bi-box-arrow-right"></i></a>
                <a class="block px-3 py-2 mb-2 leading-loose text-md  text-center text-white font-semibold safa hover:bg-left  rounded-xl" href="#">Inscription <i class="bi bi-person-lines-fill"></i></a>
            </div>
            @endguest
            @auth
            <a class="block px-3 py-2 mb-2 leading-loose text-md  text-center text-white font-semibold safa hover:bg-left  rounded-xl" href="#">Déconnexion<i class="bi bi-person-lines-fill"></i></a>
            @endauth

        </div>
    </nav>
</div>

<script>
            // Burger menus
            document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');
        
            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        
            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');
        
            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        
            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
</script>