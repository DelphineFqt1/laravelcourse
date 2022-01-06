<x-app-layout>
<x-slot name="title">
        News page
</x-slot>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  
<!-- Image d'en-tête -->

<div class="img">
    <img src="{{URL::asset('Images/news.jpg')}}" class="img-fluid" alt="En-tete" width= "100%">
</div>

<!-- Toutes les actualités -->

<section class="text-gray-600 body-font overflow-hidden">
  @foreach($posts as $post)
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">créé le</span>
          <span class="mt-1 text-gray-500 text-sm">{{$post->created_at}}</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{$post->title}}</h2>
          <p class="leading-relaxed">{{$post->content}}</p>
        </div>        
      </div>
    </div>
  </div>
  @endforeach
</section>


<!-- Pied de page -->

<footer class="container">
    <p class="float-end"><a href="#">View top</a></p>
</footer>

</x-app-layout>