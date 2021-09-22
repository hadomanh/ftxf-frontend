@extends('layouts.app')

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

                    @foreach ($allNews as $item)
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
