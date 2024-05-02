<x-layout>
    @include('partials.navbar')
    <div class="flex justify-center">
        <div
            class="min-h-screen w-full bg-white s border-x-2 position-relative lg:w-8/12"
        >
            <img src="{{ asset('image/vert.png') }}" class="w-full" alt="" />
            <div class="flex flex-col items-center justify-center mb-6">
                <div class="w-2/6 my-2">
                    <x-flash status="succes" />
                    <x-flash status="error" />
                </div>
                <p
                    class="text-center text-lg my-10 w-fit text-[#334A5A] iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                >
                    Mes Convoiturages
                </p>

                <div class="flex flex-col items-center lg:flex-row justify-evenly gap-3 flex-wrap w-full">
                    @foreach($trajets as $trajet)
                    <div
                        class="w-10/12 lg:w-5/12 flex rounded-md mt-3 shadow-md bg-gray-100"
                    >
                        <div
                            class="w-[100%] flex flex-col justify-between items-between p-2"
                        >
                            <div class="flex justify-between w-full">
                                <div class="flex gap-1">
                                    @if($trajet->status == 'en attente')
                                    <div>
                                        <p
                                            class="w-46 border-2 px-1 text-md border-yellow-500 text-yellow-600 bg-yellow-200 mb-1 rounded-full"
                                        >
                                            <i
                                                class="bi bi-hourglass-split"
                                            ></i>
                                        </p>
                                    </div>
                                    @elseif($trajet->status == 'confirmer')
                                    <div>
                                        <p
                                            class="w-46 border-2 px-1 text-md border-green-500 text-green-600 bg-green-200 mb-1 rounded-full"
                                        >
                                            <i class="bi bi-check-lg"></i>
                                        </p>
                                    </div>
                                    @else
                                    <div>
                                        <p
                                            class="w-46 border-2 px-1 text-md border-red-500 text-red-600 bg-red-200 mb-1 rounded-full"
                                        >
                                            <i class="bi bi-x-lg"></i>
                                        </p>
                                    </div>
                                    @endif
                                    <div
                                        class="flex flex-col justify-center items-center"
                                    >
                                        <p
                                            class="text-sm font-semibold align-middle text-[#334A5A]"
                                        ></p>
                                    </div>
                                </div>
                                <div>
                                    <button
                                        id="dropdownDefaultButton{{ $trajet->id }}"
                                        data-dropdown-toggle="dropdown{{ $trajet->id }}"
                                        class="text-[#334A5A] text-2xl px-2"
                                    >
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                    <div
                                        id="dropdown{{ $trajet->id }}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                                    >
                                        <ul
                                            class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownDefaultButton{{ $trajet->id }}"
                                        >
                                            <li>
                                                <a
                                                    href="{{route('editTrajet', $trajet->id)}}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    >Modifier</a
                                                >
                                            </li>
                                            <li>
                                                <form
                                                    class="w-full"
                                                    method="POST"
                                                    action="{{route('deleteTrajet',$trajet->id)}}"
                                                >
                                                    @method('DELETE') @csrf
                                                    <button
                                                        type="submit"
                                                        class="block px-4 py-2 w-full text-start hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    >
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p
                                class="text-sm font-semibold text-[#334A5A] mb-1 mt-2"
                            >
                                {{$trajet->place}} place(s)
                            </p>
                            <div class="flex justify-between w-full mt-2">
                                <div
                                    class="flex flex-col items-between justify-between gap-2"
                                >
                                    <p class="text-lg font-bold text-[#334A5A]">
                                        {{ \Carbon\Carbon::parse($trajet->date)->format('d F')
                                        }},
                                        {{ \Carbon\Carbon::parse($trajet->heure)->format('H:i') }}
                                    </p>
                                    <p class="text-lg font-bold text-[#334A5A]">
                                        {{$trajet->prix}} MAD
                                        <span class="text-xs"
                                            >pour 1 passager</span
                                        >
                                    </p>
                                </div>
                                <div class="flex gap-1 px-2">
                                    <div>
                                        <img
                                            width="60"
                                            src="{{
                                                asset('image/trajet.png')
                                            }}"
                                            alt="logo"
                                        />
                                    </div>
                                    <div class="flex flex-column gap-3 mt-1">
                                        <p class="font-semibold text-[#334A5A]">
                                            {{$trajet->villeD->nom}}
                                        </p>
                                        <p class="font-semibold text-[#334A5A]">
                                            {{$trajet->villeA->nom}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex justify-center mt-12">
                    <div class="my-3 w-full px-12">
                        {{ $trajets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</x-layout>
