
<x-app-layout>
<x-slot name="title">
        Welcome page
</x-slot>

  
            
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        
            <div class="img">
                <img src="{{URL::asset('Images/apero_2.jpg')}}" class="img-fluid" alt="En-tete" width= "100%">
            </div>

            <div class="container marketing">

                <hr class="featurette-divider">

                <div class="row featurette">                       
                    <div class="col-md-7">
                        <a href="{{route('trombi.trombi')}}">
                        <h2 class="featurette-heading">Team
                        <p class="lead">See the list of your beloved Foy'zmen</p>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a href="{{route('trombi.trombi')}}">
                        <img src="{{URL::asset('Images/foyz.jpg')}}" alt="Foyzmen" width= "100%">
                        </a>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <a href="{{route('produits.produits')}}">
                        <h2 class="featurette-heading">Our products <!-- <span class="text-muted">See for yourself.</span></h2> -->
                        <p class="lead">Simply order with a click !</p>
                        </a>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <a href="{{route('produits.produits')}}">
                        <img src="{{URL::asset('Images/carte_du_jour.jpg')}}" alt="Products" width= "100%">
                        </a>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">     
                    <div class="col-md-7">
                        <a href="{{route('posts.posts')}}">
                        <h2 class="featurette-heading">News <!-- <span class="text-muted">Checkmate.</span></h2> -->
                        <p class="lead">Read the school news</p>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a href="{{route('posts.posts')}}">
                        <img src="{{URL::asset('Images/actu.jpg')}}" alt="News" width= "100%">
                        </a>
                   </div>
                </div>

                <hr class="featurette-divider">

            </div>

            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                    <a href="#">View top</a>
                    </p>
                </div>
            </footer>

        </x-app-layout>

