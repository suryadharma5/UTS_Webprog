@extends('template.main')

@section('content')
    <div class="container">
        <div class="span fw-bold">IT REALLY COUNTS</div>
    <div class="border-top my-0 border border-black" style="width: 150px; height: 3px; background-color: black" ></div>
   <div class="col">
        <div class="col-lg-8 mt-3">
            <h2 class="fw-bold">{{ $book->title }}</h2>
            <small>{{ $book->description }}</small>
            <br>
            <small>By <span class="fw-bold">{{ $book->author }}</span> | {{ $date }} <button type="button" class="btn btn-primary py-0 mx-2 text-center" style="height: 25px;">{{ $book->category }}</button></small>
            {{-- <div class="bg-primary" style="width: 120px">Long Read</div> --}}
        </div>
   </div>
   <div class="col-lg-12">
       <img src="https://source.unsplash.com/1200x400/?{{ $book->category }}" alt="" class="img-fluid mt-3" height="300px">
        <div class="ro d-flex mt-1">
            <div class="linkedin">
                <img src="/img/linkedin.png" alt="" height="20px" style="border-radius: 50%; margin-right:5px">
            </div>
            <div class="twitter">
                <img src="/img/twitter.png" alt="" height="20px" style="border-radius: 50%;margin-right:5px">
            </div>
            <div class="facebook">
                <img src="/img/facebook.png" alt="" height="20px" style="border-radius: 50%;margin-right:5px">
            </div>
            <div class="instagram">
                <img src="/img/instagram.png" alt="" height="20px" style="border-radius: 50%;margin-right:5px">
            </div>
        </div>
        <p class="mt-4">
            {{ $book->body }}
        </p>
        <div class="span fw-bold">Video Section</div>
        <div class="border-top my-0 border border-black" style="width: 150px; height: 3px; background-color: black" ></div>
        <div class="mt-2 mb-4">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/9HqoP25UNlU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    </div>
@endsection