<x-layout>    
  
        @include('partials.navbar')
        <div class="flex justify-center w-full mb-14">
            <div class="w-[50%] hidden lg:block">
                <img   width="740" src="{{ asset('image/contact.png') }}" alt="">
            </div>
            <div class="w-[100%] flex flex-col mt-14 items-center lg:w-[50%]">


            <div class="flex flex-col gap-6 w-[80%] lg:w-[85%] ">

                <p class="text-[#334A5A] text-center text-2xl font-semibold ">À propos</p>
               
                  <p class="mb-1">Bienvenue sur Covo, votre plateforme de covoiturage préférée ! </p>

                   <p  class="mb-1"> Chez Covo, nous croyons en la puissance du partage pour rendre les déplacements
                     plus économiques, écologiques et conviviaux. Notre mission est de connecter les conducteurs
                      et les passagers qui partagent un même itinéraire, leur permettant ainsi de partager les
                       frais et de réduire l'empreinte carbone de leurs trajets.</p>
                    
          
                    
                   <p  class="mb-1"> Rejoignez-nous dès aujourd'hui pour contribuer à rendre les déplacements plus durables
                     et plus agréables. Ensemble, nous pouvons créer un avenir où voyager rime avec solidarité,
                      confort et respect de l'environnement.</p>
                    
                  <p >  Faites partie de la communauté Covo dès maintenant et découvrez une nouvelle façon de voyager !</p>
                  
              </div> 
            </div>
        </div>
        @include('partials.footer')
     
     
 
    </x-layout>

