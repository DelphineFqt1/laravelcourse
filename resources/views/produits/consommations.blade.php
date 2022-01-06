<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <a href="{{route('profile.show')}}" class="navbar-brand">{{ __('Profile') }}</a>
        <a href="{{route('produits.consommations')}}" class="navbar-brand">Mes consommations</a>
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 bg-white">
    <div class="bd-example">
      
      @if ($user->ventes -> count() == 0)
        <span>C'est vide ici...n'hésites pas à regarder notre carte !</span>
      @else
        <table class="table table-striped bg-white">
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
                  <th scope="row" class="bg-white"><img src="{{$vente->product->image}}" alt="Image du produit" width="40" heigth="40"></th>
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
</x-app-layout>





