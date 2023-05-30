@extends('template.main')

@section('content')


@if ($posts->count())
    <div class="container">
        {{-- Highlighk book --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="col-lg">
                    <a href="/detail/{{ $posts[0]->id }}">
                        <img src="https://source.unsplash.com/1200x700/?{{ $posts[0]->category}}" alt="" class="img-fluid mt-3">  
                    </a>
                </div>
            </div>
            <div class="col-lg-8 mt-3">
                <div class="span fw-bold">IT REALLY COUNTS</div>
                <div class="border-top my-0 border border-black mb-3" style="width: 150px; height: 3px; background-color: black" ></div>
                <a href="/detail/{{ $posts[0]->id }}" class="text-decoration-none"><h2 class="fw-bold text-black">{{ $posts[0]->title }}</h2></a>
                <small>{{ $posts[0]->description }}</small>
            </div>
        </div>
    
        {{-- Book Review --}}
        <div class="span fw-bold mt-4">LATEST BOOK REVIEWS</div>
        <div class="border-top my-0 border border-black" style="width: 170px; height: 3px; background-color: black"></div>
        <div class="row mt-3">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-3">
                    <div class="card border-0 my-2" style="width: 18rem;">
                        <a href="/detail/{{ $post->id }}">
                            <img src="https://source.unsplash.com/1200x1000/?{{ $post->category}}" class="card-img-top rounded-0" alt="..." style="margin-left: 15px">
                        </a>
                        <div class="card-body m-0">
                          <h5 class="card-title">
                            <a href="/detail/{{ $post->id }}" class="text-decoration-none"><p class="text-black">{{ $post->title }}</p></a>
                          </h5>
                          <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Book Series Review --}}
    <div class="container-fluid bg-dark">
        <div class="container py-2">
            <div class="span fw-bold mt-4 text-white">Book Series Review</div>
            <div class="border-top my-0 border border-black" style="width: 170px;height: 3px; background-color: white"></div>
            <div class="row mt-3">
                @foreach ($books as $book)
                    <div class="col-md-4">
                        <div class="card border-0 my-2 bg-dark" style="width: 25rem;">
                            <a href="/detail/{{ $book->id }}">
                                <img src="https://source.unsplash.com/700x300/?{{ $book->category }}" class="card-img-top rounded-0" alt="..." style="margin-left: 15px">
                            </a>
                            <div class="card-body m-0">
                              <h5 class="card-title text-white">{{ $book->title }}</h5>
                              <a href="/detail/{{ $book->id }}" class="btn btn-primary radius-0">Read Post</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end bg-dark" style="height: 50px; margin-right: 60px">
            {{ $books->links() }}
        </div>
    </div>
@endif

@endsection