<x-app-layout>
<br>
@section("title",$data["title"])
    <div class="container">
        <div class="rowjustify-content-center">
            <div class="col-md-8">
            @include('util.message')
                <div class="card">
                    <div class="card-header">
                        Create product
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
                            <form method="POST" action="{{route('produits.save')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="text" placeholder="Enter name" name="name" value="{{old('name')}}"/>
                                <input type="text" placeholder="Enter price" name="price" value="{{old('price')}}"/>
                                <input type="text" placeholder="Enter description" name="description" value="{{old('description')}}"/>
                                <input type="text" placeholder="Enter stock" name="stock" value="{{old('stock')}}"/>
                                <input type="text" placeholder="Enter type" name="type" value="{{old('type')}}"/>
                                @csrf
                                <div class="form-group">
                                <br>
                                       </div>
                                       <label>Image:</label>
                                <input type="file" class="block my-2" id="image" name="image"/>
                                <input type="submit" value="Send" class="btn btn-primary"/>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>      
                   