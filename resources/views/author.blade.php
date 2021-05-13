@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-row">
        <div class="author" class="col-3">
            <div class="author-content border rounded p-2 mb-2">
                <img src="..." alt="...">
                <h5>Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="author-nav">
                <ul>
                    <ol>Profile</ol>
                    <ol>Series</ol>
                    <ol>Novel</ol>
                    <ol>Picture</ol>
                </ul>
            </div>
            <div class="follow-content">
                <button class="btn btn-sm btn-outline-secondary">Follow</button>
            </div>
        </div>
        <div id="art-piece" class="col-9">
            <div class="d-flex flex-row border mb-2">
                <div class="col-md-2">
                    <img src="..." alt="...">   
                </div>
                <div class="col-md-10">
                    <h6>Series</h6>
                    <h5>Title</h5>    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Like</a>
                </div>
            </div>           
            <div class="d-flex flex-row border mb-2">
                <div class="col-md-2">
                    <img src="..." alt="...">   
                </div>
                <div class="col-md-10">
                    <h6>Series</h6>
                    <h5>Title</h5>                    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Like</a>
                </div>
            </div>     
            <div class="d-flex flex-row border mb-2">
                <div class="col-md-2">
                    <img src="..." alt="...">   
                </div>
                <div class="col-md-10">
                    <h6>Series</h6>
                    <h5>Title</h5>    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Like</a>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection