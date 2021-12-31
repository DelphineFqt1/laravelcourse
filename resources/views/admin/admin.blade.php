<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bd-example">
        @if (Auth::user()->current_team_id != 1)
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
            Seuls les Foyzmen/women peuvent accéder à cette page !
        @else
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Liste des utilisateurs: {{Auth::user()->count()}}
                </h2>
            </x-slot>
    <div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nom
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Solde
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Statut
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date de création du compte
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Profil</span>
              </th>
          <!--     <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Supprimer</span>
              </th> -->
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Rendre Administrateur</span>
              </th>
            </tr>
            @foreach($users as $user)
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_path}}" alt="Photo de profil">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{$user->name}}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{$user->email}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$user->credit}}€</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    @if ($user->current_team_id == 1)
                        Admin
                    @else
                        Membre
                    @endif
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{$user->created_at}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="{{route('admin.profil', $user->id)}}" class="text-indigo-600 hover:text-indigo-900">Profil</a>
              </td>
             <!--  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-red-600 hover:text-indigo-900" >Supprimer</a>
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              
            <x-jet-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                Admin
            </x-jet-button>
        
                <a href="#" class="text-green-600 hover:text-indigo-900">Rendre administrateur</a>
              </td>
              
            </tr>
        @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Pied de page -->
<footer class="container">
    <p class="float-end"><a href="#">Retourner en haut</a></p>
</footer>
@endif
</x-app-layout>