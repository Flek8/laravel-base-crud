@extends('layouts.base')

@section('PageTitle', 'Create New Comic')
    

@section('content')

    <div class="container pt-3">

        <form method="POST" action="{{route('comics.store')}}">
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
    
            <label for="url" class="form-label">Cover Image URL</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/</span>
                <input type="text" class="form-control" id="url" aria-describedby="basic-addon3" name="url" required>
            </div>
    
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                <label for="description">Description</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create</button>
        
        </form>

        

    </div>
    
@endsection