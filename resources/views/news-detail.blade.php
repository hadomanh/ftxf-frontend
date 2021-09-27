@extends('layouts.app')

@section('seoTag')
    <!-- Main Tag -->
    <title>{{ $news->title }}</title>
    <meta id="PagKeywords" name="keywords" content="{{ $news->seo_keyword}}"/>
    <meta id="PagDescription" name="description" content="{{ $news->seo_description }}"/>

    <!-- Facebook Tag -->
    <meta property="og:url" content="https://ftxf-frontend.pages.dev"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $news->seo_title }}"/>
    <meta property="og:description" content="{{ $news->seo_description }}"/>
    <meta property="og:image" content="https://ftxf-frontend.pages.dev/img/logo.png"/>
    <meta property="og:site_name" content="Ftxfund"/>
@endsection

@section('content')
<div class="subPage">
    <div id="newsPage" class="inner">
        <div id="particles-js"></div>
        <h3 class="pageHeading">news</h3>
        <div class="row">
            <div class="col-lg-8 offset-lg-4">
                <div class="newsDetail">
                    <h1 class="newsTitle">{{ $news->title }}</h1>
                    <div class="newsContent">
                        <div class="desc">
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>

                <div class="row otherNews">
                    @foreach ($relatedNews as $item)
                        @if ($item->id !== $news->id)
                        <div class="col-md-6">
                            <h3 class="newsTitle">
                                <a href="take-real-estate-tokenization-to-the-next-level.html">
                                    {{ $item->title }}
                                </a>
                            </h3>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
