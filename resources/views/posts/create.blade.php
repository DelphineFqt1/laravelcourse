<x-app-layout>
<br>
@if ((@is_null(Auth::user()->current_team_id)) or (Auth::user()->current_team_id != 1))
            <center>
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
          </svg>
          <br>
          Bien essayé mais seuls les Foyzmen/women peuvent accéder à cette page !
            </center>
        @else
@section("title",$data["title"])
    <div class="container">
        <div class="rowjustify-content-center">
            <div class="col-md-8">
            @include('util.message')
                <div class="card">
                    <div class="card-header">
                        Create post
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors">
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                            <form method="POST" action="{{route('posts.save')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="text" placeholder="Enter title" name="title" value="{{old('title')}}"/>
                                <br>
                                <textarea placeholder="Enter content" name="content" cols="50" rows="10"></textarea>
                
                                <div class="form-group">
                                <br>
                                       </div>
                                    
                                <input type="submit" value="Create" class="btn btn-primary"/>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>

    <div class="container">
        <div class="rowjustify-content-center">
            <div class="col-md-8">
            @include('util.message')
                <div class="card">
                    <div class="card-header">
                        Delete post
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors">
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                            <form method="POST" action="{{route('posts.delete')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="text" placeholder="Enter title" name="title" value="{{old('title')}}"/>
                            
                                <div class="form-group">
                                <br>
                                       </div>
                                    
                                <input type="submit" value="Delete" class="btn btn-danger"/>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif
   
</x-app-layout>      
                   