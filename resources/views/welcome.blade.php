
<x-app-layout>
<x-slot name="title">
        Welcome page
</x-slot>

  
            
           
        
            <div class="img">
                <img src="{{URL::asset('Images/apero_1.jpg')}}" class="img-fluid" alt="En-tete" width= "100%">
            </div>

            <div class="container marketing">

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <a href="{{route('produits.produits')}}">
                        <h2 class="featurette-heading">Nos produits 
                        <p class="lead">Commandez simplement en un clic !</p></a>
                    </div>
                    <div class="col-md-5">
                        <img class="mb-4" src="Images/clic.jpg" alt="" width="1" height="">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Horaires <!-- <span class="text-muted">See for yourself.</span></h2> -->
                        <p class="lead">Consultez le planning d'ouverture et de fermeture du foy'z</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="mb-4" src="Images/planning.jpg" alt="" width="1" height="">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Mon historique <!-- <span class="text-muted">Checkmate.</span></h2> -->
                        <p class="lead">Voir toutes mes consommations passées</p>
                    </div>
                    <div class="col-md-5">
                        <img class="mb-4" src="Images/historique.jpg" alt="" width="1" height="">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                    </div>
                </div>

                <hr class="featurette-divider">

            </div>


     

        </x-app-layout>

