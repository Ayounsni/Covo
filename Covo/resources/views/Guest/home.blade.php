<x-layout>    
    <div class=" height image shadow-sm">
        @include('partials.navbar')
       <h1 class="display-4 fw-semibold  px-3 lg:w-6/12 mt-20 text-[#308284] titre2"> Covoiturez Pour <br>
        <span id="text-container" class="text-[#334A5A] display-4 fw-medium titre2  ">  </span></h1>
        <div class="d-flex justify-content-start px-3">
            <a href="" class=" px-7 border-2 border-[#334A5A] py-3 text-white transition-all duration-500 ayoub hover:bg-left lg:text-lg rounded-md text-gray-50 mt-6">Commencez Maintenant</a>
        </div>     
    </div>
    <div class="d-flex justify-content-center px-4 ">
    <h1 class="text-center fw-medium display-6 mt-8 border-b-4  border-[#14BC9C] w-fit titre1 text-gray-900 mb-6 ">Toutes les raisons pour covoiturer avec nous</h1>
    </div>
    <div class=" mt-4 flex flex-col lg:flex-row justify-center items-center gap-12 mb-48">
        <div class="position-relative d-flex flex-column justify-content-center align-items-center lg:mb-0 mb-40 "> <img height="350" width="370" src="{{ asset('image/partage.png') }}" alt="logo">
            <div class=" w-5/6 d-flex flex-column justify-content-center align-items-center bg-gray-200 shadow-md absolute top-48 py-3 px-2 transition-all duration-700 mery hover:bg-left hover:text-gray-50 "> 
                <p class="fs-5 titre1 fw-medium text-center "> Partagez le moment </p>
                 <p class="text-center titre1 mt-3"> Sauver une histoire d’amour, élargir votre culture musicale
                    , ou qui sait, voyager dans le temps… tellement de choses peuvent se produire en covoiturant avec
                     d’autres personnes.</p></div>
        </div>
        <div class="position-relative d-flex flex-column justify-content-center align-items-center lg:mb-0 mb-40 "> <img height="350" width="363" src="{{ asset('image/ec.png') }}" alt="logo">
            <div class=" w-5/6 d-flex flex-column justify-content-center align-items-center bg-gray-200 shadow-md absolute top-48 py-3 px-2 transition-all duration-700 mery hover:bg-left hover:text-gray-50 "> 
                <p class="fs-5 titre1 fw-medium text-center "> Économisez sur vos trajets </p>
                 <p class="text-center titre1 mt-3">Partager votre trajet avec
                     d’autres passagers, c’est réaliser des économies à chaque fois que vous prenez la route.
                 Inscrivez-vous en tant que conducteur et voyagez à moindres frais.</p></div>
        </div> 
        <div class="position-relative d-flex flex-column justify-content-center align-items-center "> <img height="350" width="370" src="{{ asset('image/ok.jpg') }}" alt="logo">
            <div class=" w-5/6 d-flex flex-column justify-content-center align-items-center bg-gray-200 shadow-md absolute top-48 py-3 px-2 transition-all duration-700 mery hover:bg-left hover:text-gray-50 "> 
                <p class="fs-5 titre1 fw-medium text-center "> Réduisez le CO2 </p>
                 <p class="text-center titre1 mt-3"> Remplir les places libres dans votre voiture c’est moins de véhicules en circulation
                     sur les routes. Et donc, moins d’émission de CO2 sur la planète.</p></div>
        </div>  
 
     </div>
    <div class=" heightt imagee mt-10 d-flex justify-content-evenly align-items-center  ">
       
            <div class="d-flex flex-column justify-content-center">
                 <p class="rounded-full p-9 bg-gray-100 transition-all duration-700 hover:bg-[#9be0d4]"><img width="85" height="85" src="{{ asset('image/user.png') }}"
                     alt="external-route-map-and-location-justicon-lineal-color-justicon"/></p>
                 <p class="text-center text-gray-50 fw-medium titre2 fs-2 mt-2">MEMBRES</p>
                 <p id="counter1" class="text-center display-4 fw-medium titre2 text-gray-50">0</p>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <p class="rounded-full p-8 bg-gray-100 transition-all duration-700 hover:bg-[#9be0d4]"><img width="93" height="93" src="https://img.icons8.com/external-justicon-lineal-color-justicon/64/external-route-map-and-location-justicon-lineal-color-justicon.png"
                    alt="external-route-map-and-location-justicon-lineal-color-justicon"/></p>
                <p class="text-center text-gray-50 fw-medium titre2 fs-2 mt-2"> TRAJETS</p>
                <p id="counter2" class="text-center display-4 fw-medium titre2 text-gray-50">0</p>
           </div>
           <div class="d-flex flex-column justify-content-center">
            <p class="rounded-full p-9 bg-gray-100 transition-all duration-700 hover:bg-[#9be0d4]"><img width="85" height="85" src="https://img.icons8.com/external-photo3ideastudio-flat-photo3ideastudio/64/external-city-hostel-photo3ideastudio-flat-photo3ideastudio.png"
                 alt="external-city-hostel-photo3ideastudio-flat-photo3ideastudio"/></p>
            <p class="text-center text-gray-50 fw-medium titre2 fs-2 mt-2"> VILLES</p>
            <p id="counter3" class="text-center display-4 fw-medium titre2 text-gray-50">0</p>
            </div>
    
    </div>
    @include('partials.footer1')
 
    </x-layout>

    <script>


            // Phrases à afficher
const phrases = [
    "Un Trajet plus agréable et créez des souvenirs mémorables !",  
    "Une Route plus sûre et arrivez à destination en toute sécurité !",
    "Un Voyage sans stress et gardez plus d'argent dans votre portefeuille !",
    // Ajoutez autant de phrases que vous le souhaitez
];

// Index de la phrase actuellement affichée
let currentIndex = 0;

// Fonction pour mettre à jour le texte affiché
function updateText() {
    // Récupère l'élément conteneur
    const textContainer = document.getElementById("text-container");

    // Affiche la phrase actuelle
    textContainer.textContent = phrases[currentIndex];

    // Passe à la phrase suivante
    currentIndex = (currentIndex + 1) % phrases.length;
}

// Met à jour le texte initial
updateText();

// Démarre l'intervalle pour changer de phrase toutes les 10 secondes
setInterval(updateText, 2400);

let intervalId1, intervalId2, intervalId3;
let count1 = 0, count2 = 0, count3 = 0;

function startCounters() {
    intervalId1 = setInterval(() => {
        count1++;
        document.getElementById("counter1").textContent = count1;
        if (count1 === 1180) {
            stopCounter(intervalId1);
        }
    }, 3);

    intervalId2 = setInterval(() => {
        count2++;
        document.getElementById("counter2").textContent = count2;
        if (count2 === 485) {
            stopCounter(intervalId2);
        }
    }, 9);

    intervalId3 = setInterval(() => {
        count3++;
        document.getElementById("counter3").textContent = count3;
        if (count3 === 56) {
            stopCounter(intervalId3);
        }
    }, 80);
}

function stopCounter(intervalId) {
    clearInterval(intervalId);
}

// Démarre automatiquement les compteurs lorsque la page est chargée
document.addEventListener("DOMContentLoaded", startCounters);


        </script>
        

    
 