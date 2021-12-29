<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil de {{$user->name}}
        </h2>
    </x-slot>

    
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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
                    <th scope="row"><img src="{{$vente->product->image}}" alt="Image du produit" width="40" heigth="40"></th>
                    <td>{{$vente->product->name}}</td>
                    <td>{{$vente->product->price}}€</td>
                    <td>{{$vente->created_at}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
            
            @endif
<!-- Pied de page -->
<footer class="container">
    <p class="float-end"><a href="#">Retourner en haut</a></p>
</footer>

</x-app-layout>