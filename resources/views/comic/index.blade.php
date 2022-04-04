@extends('layouts.base')

@section('PageTitle', 'Raccolta Fumetti')
    

@section('content')

    <div class="container-fluid d-flex flex-wrap justify-content-center bg-dark bg-gradient p-5">

        @foreach ($comics as $comic )

            <div class="col col-4 px-1">

                <div class="card mb-3 bg-dark" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-5">
                        <img src="{{$comic->url}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title text-white">{{$comic->title}}</h5>
                          <p class="card-text text-white">Price: <small class="text-muted">{{$comic->price}} $</small></p>
                          <a href="{{ route('comics.show', $comic->id ) }}" class="btn btn-outline-primary btn-sm" href="#" role="button">Show More</a>
                          <a href="{{ route('comics.edit', $comic->id ) }}" class="btn btn-outline-warning btn-sm" href="#" role="button">Edit</a>
                          <form method="POST" action="{{route('comics.destroy', ['comic' => $comic->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger btn-sm">Delete</button>
                          </form>
                          
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            
        @endforeach
        
        <a href="{{route('comics.create')}}" class="btn btn-info text-white" role="button" aria-disabled="true">Create a new Comic</a>


    </div>
    
    

@endsection