<x-layout>
    @include('partials.navbar')
    <div class="flex justify-center">
        <div
            class="min-h-screen w-full bg-white s border-x-2 position-relative lg:w-8/12"
        >
            <img src="{{ asset('image/dash.png') }}" class="w-full" alt="" />
            <div class="flex justify-center">
                <p
                    class="text-center text-lg my-6 w-fit text-[#334A5A] iconChange lg:text-2xl hover:after:bg-[#14BC9C] hover:after:w-[100%] after:transition-all after:duration-300 after:m-auto after:h-[3px] after:w-0 after:block"
                >
                    Gestion des utilisateurs
                </p>
            </div>
            <div class="w-2/6 my-2">
                <x-flash status="succes" />
                <x-flash status="error" />
            </div>
            <div class="relative overflow-x-auto">
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
                                Utilisateur
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Telephone
                            </th>
                            <th
                                scope="col"
                                class="px-6 py-3 rounded-e-lg text-center"
                            >
                                Accées
                            </th>
                        </tr>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr class="bg-white dark:bg-gray-800">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center"
                            >
                                <div
                                    class="d-flex justify-content-center gap-1 align-items-center w-auto"
                                >
                                    <img
                                        src="{{ $user->photo ? asset('storage/'.$user->photo) : asset('image/user.jpg') }}"
                                        alt="logo"
                                        class="w-11 h-11 rounded-full"
                                    />
                                    <p
                                        class="text-sm font-semibold text-[#334A5A]"
                                    >
                                        {{$user->prenom }} {{$user->nom }}
                                    </p>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-center">
                                <p class="text-sm font-semibold text-[#334A5A]">
                                    {{$user->email }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <p class="text-sm font-semibold text-[#334A5A]">
                                    {{$user->telephone }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                @if($user->bannir == 0)
                                <form
                                    method="POST"
                                    action="{{route('ban',$user->id)}}"
                                >
                                    @method('PUT') @csrf
                                    <button
                                        type="submit"
                                        class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        <i class="bi bi-ban"></i> Interdire
                                        l'accès
                                    </button>
                                </form>
                                @else
                                <form
                                    method="POST"
                                    action="{{route('aut',$user->id)}}"
                                >
                                    @method('PUT') @csrf
                                    <button
                                        type="submit"
                                        class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    >
                                        <i class="bi bi-arrow-repeat"></i>
                                        Autoriser l'accès
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="my-3 w-full px-12">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</x-layout>
