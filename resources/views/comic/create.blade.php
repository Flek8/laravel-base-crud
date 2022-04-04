@extends('layouts.base')

@section('PageTitle', 'Create New Comic')
    

@section('content')

    <div class="container">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Title</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Type</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Series</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <label for="basic-url" class="form-label">Cover Image URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Description</label>
        </div>

    </div>
    
@endsection