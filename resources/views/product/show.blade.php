@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="cardheader">{{ $data["product"]["name"] }}</div>
                <div class="card-body">

                <b>Product name:</b> {{ $data["product"]["name"] }}<br/>
              
                <?php if ($data["product"]["price"] > 200): ?> 
                    <span style="color:red; font-weight: bold;" ><b>Product price:</b> {{ $data["product"]["price"] }}<br /></span>
    
                <?php else: ?> 
                    <b>Product price:</b> {{ $data["product"]["price"] }}<br />
    
                <?php endif; ?>
                
                <b>This product is available in the next sizes:</b><br />
                <ul>
                @foreach($data["sizes"] as $s)
                    <li>{{$s}}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
