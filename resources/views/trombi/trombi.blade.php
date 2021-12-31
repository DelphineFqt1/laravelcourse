<x-app-layout>
<x-slot name="title">
        Team page
</x-slot>

<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">L'équipe Foy'z 2021-2022</h1>
        <p class="lead text-muted">Voici une présentation de l'équipe Foy'z qui vous accueille cette année !</p>
      </div>
    </div>
</section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($foyzmen as $foyzman)
        <div class="col">
          <div class="card shadow-sm">
            <div class="img">
                <img src="{{$foyzman->profile_photo_path}}" class="img-fluid" alt="Profile photo" width= "100%">
            </div>
            <div class="card-body">
              <h2 class="card-text">{{ $foyzman->name }}</h2>
              <div class="d-flex justify-content-between align-items-center">
                <p class="card-text">{{ $foyzman->email }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">View top</a>
    </p>
  </div>
</footer>
</x-app-layout>

