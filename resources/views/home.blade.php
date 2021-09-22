@extends('layouts.app')

@section('content')
<div class="homepage">
    <div class="owl-carousel">

        @foreach ($homeCarouselItems as $item)
            <div class="itemInner" style="background: #fff url({{ asset('storage/' . $item->background) }}) no-repeat bottom center / contain;">
                <img class="thumb" src="{{ asset('storage/' . $item->thumbnail) }}" alt="">
                <div class="itemContent text-center">
                    <img class="thumb-logo" src="{{ asset('storage/' . $item->logo) }}" alt="">
                    <div class="itemIntro">
                        {{ $item->description }}
                    </div>
                    <a class="more" href="{{ $item->url }}" target="_blank">view more</a>
                </div>
            </div>
        @endforeach

        
    </div>
</div>
@endsection
