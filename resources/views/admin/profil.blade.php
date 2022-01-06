<x-app-layout>
        @if ((@is_null(Auth::user()->current_team_id)) or (Auth::user()->current_team_id != 1))
        <br>
        <center>
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
          <br>
            Bien essayé mais seuls les Foyzmen/women peuvent accéder à cette page !
        </center>
        @else
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil de {{$user->name}}
        </h2>
    </x-slot>

    
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-white">
    Solde: {{$user->credit}}€ <br>
    Email: {{$user->email}} <br>
    @if ($user->current_team_id == 1)
        Statut: Admin <br>
    @else
        Statut: Membre <br>
    @endif 
    Membre depuis: {{$user->created_at}}
    <h4>Consommations</h4>
        <div class="bd-example">
            @if ($user->ventes -> count() == 0)
                <div>Aucune consommation</div>
            @else
                <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col">Prix</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
                @foreach($user->ventes as $vente)
                <tbody>
                    <tr>
                    <th scope="row" class="bg-white"><img src="{{$vente->product->image}}" alt="product image" width="40" heigth="40"></th>
                    <td class="bg-white">{{$vente->product->name}}</td>
                    <td class="bg-white">{{$vente->product->price}}€</td>
                    <td class="bg-white">{{$vente->created_at}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
            
            @endif
            @endif
<!-- Pied de page -->
<footer class="container">
    <p class="float-end"><a href="#">Retourner en haut</a></p>
</footer>

</x-app-layout>