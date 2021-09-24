@extends('layouts.app')

@section('content')
<div class="homepage">
    <div class="owl-carousel">

        @foreach ($homeCarouselItems as $item)
        @if (empty($item->logo) && empty($item->background) && empty($item->description))
            <div class="itemInner grandOpening text-center">
                <img class="thumb" src="{{ asset('storage/' . $item->thumbnail) }}" alt="">
                <a class="more" href="{{ $item->url }}" target="_blank">view more</a>
            </div>
        @elseif (empty($item->thumbnail))
            <div class="itemInner onstora">
                <img class="thumb" src="{{ asset('img/onstora.jpg') }}" alt="">
                <img class="bg-onstora" src="{{ asset('storage/' . $item->background) }}" alt="">
                <div class="itemContent text-center">
                    <img class="thumb-logo" src="{{ asset('storage/' . $item->logo) }}" alt="">
                    <div class="itemIntro">
                        {{{ $item->description }}}
                    </div>
                    <a class="more" href="{{ $item->url }}" target="_blank">view more</a>
                </div>
            </div>
        @else
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
        @endif
            
        @endforeach

        
    </div>
</div>
@endsection
