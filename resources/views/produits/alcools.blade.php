<x-app-layout>
<x-slot name="title">
        Products page
</x-slot>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  
<!-- Image d'en-tête -->

<div class="img">
    <img src="{{URL::asset('Images/nos-produits.jpg')}}" class="img-fluid" alt="En-tete" width= "100%">
</div>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
    @if ($alcools->count() > 0)
        <x-slot name="header">
          <a href="{{route('produits.produits')}}" class="navbar-brand"> Toute la carte </a>
          <a href="{{route('produits.sodas')}}" class="navbar-brand"> Sodas </a>
          <a href="{{route('produits.nourriture')}}" class="navbar-brand"> Nourriture </a>
        </x-slot>
        @foreach($alcools as $alcool)
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center block" src= {{ $alcool->image }}>
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $alcool->name }}</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">{{ $alcool->description }}</h2>
              <p class="mt-1">{{ $alcool->price }}€</p>
            </div>
          </div>
        @endforeach
      @else
      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown centered" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
        <span>Aucun alcool pour le moment...</span>
      @endif
    </div>
  </div>
</section>


<!-- Pied de page -->

<footer class="container">
    <p class="float-end"><a href="#">View top</a></p>
</footer>

</x-app-layout>