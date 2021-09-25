@extends('layouts.app')

@section('content')

<div class="subPage">
    <div id="newsPage" class="inner">
        <h3 class="pageHeading">news</h3>
        <video autoplay muted loop playsinline>
            <source src="{{ asset('video-news.mp4') }}" type="video/mp4">
            <source src="{{ asset('video-news.webm') }}" type="video/webm">
            <source src="{{ asset('video-news.mov') }}" type="video/mov">
            Sorry, your browser doesn't support embedded videos.
        </video>
        <div class="row">
            <div class="col-xl-8 offset-xl-4">
                <div class="row listNews">
                    @foreach ($news as $item)
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-md-3">
                                        <a href="{{ route('home.news.detail', [$item->slug]) }}"
                                        class="newsThumb">
                                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-9">
                                        <div class="newsInfo">
                                            <h3 class="newsTitle">
                                                <a href="{{ route('home.news.detail', [$item->slug]) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h3>
                                            <div class="newsDesc">
                                                {{ $item->subtitle }}
                                            </div>
                                            <a href="{{ route('home.news.detail', [$item->slug]) }}"
                                            class="more">View More &rarr;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
