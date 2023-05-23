@extends('layout.app')

@section('content') 
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <div class="card_thumb">
                <img src='{{$comic["thumb"]}}' alt="" class="card-img-top ">
            </div>
            <span class="text-white">{{ $comic["series"] }}</span>
        </div>
          @endforeach
    </div>
</div>
@endsection