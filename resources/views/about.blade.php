@extends('layouts.app')

@section('content')
<div class="subPage">
    <div id="aboutUsPage" class="inner">
        <!-- <div id="particles-js"></div> -->
        <div class="js-globe"></div>
        <h3 class="pageHeading">about <span class="fw-light">ftx fund</span></h3>
        <div class="row">
            <div class="col-lg-8">
                <div class="about">
                    <p><img src="{{ asset('img/about-img.png') }}" alt=""></p>
                    {!! $description->detail !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
