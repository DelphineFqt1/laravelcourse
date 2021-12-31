<x-app-layout>
<x-slot name="title">
        Products page
</x-slot>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  
<!-- Image d'en-tête -->

<div class="img">
    <img src="{{URL::asset('Images/nos-produits.jpg')}}" class="img-fluid" alt="En-tete" width= "100%">
</div>


<!-- Produits à la carte -->

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      @if ($produits->count() > 0)
        <x-slot name="header">
          <a href="{{route('produits.sodas')}}" class="navbar-brand"> Sodas </a>
          <a href="{{route('produits.alcools')}}" class="navbar-brand"> Alcools </a>
          <a href="{{route('produits.nourriture')}}" class="navbar-brand"> Nourriture </a>
        </x-slot>
        @foreach($produits as $produit)
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center block" src= {{$produit->image}}>
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $produit->name }}</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">{{ $produit->description }}</h2>
              <p class="mt-1">{{ $produit->price }}€</p>
            </div>
          </div>
        @endforeach
      @else
        <span>Aucun produits pour le moment...</span>
      @endif
    </div>
  </div>
</section>


<!-- Pied de page -->

<footer class="container">
    <p class="float-end"><a href="#">View top</a></p>
</footer>

</x-app-layout>

