@extends('layouts.base')

@section('PageTitle')
{{$comic->title}}
@endsection

@section('content')

    <div class="container-fluid bg-dark bg-gradient p-5">

        <div class="card bg-dark mb-3" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$comic->url}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title text-white">{{$comic->title}}</h5>
                    <p class="card-text text-white">{{$comic->description}}</p>
                    <span class="card-text text-white">Type: <small class="text-muted">{{$comic->type}}</small></span>
                    <span class="card-text text-white ms-3">Series: <small class="text-muted">{{$comic->series}}</small></span>
                    <span class="card-text text-white ms-3">Price: <small class="text-muted">{{$comic->price}} $</small></span>    
                </div>
            </div>
        </div>

    </div>
    
@endsection