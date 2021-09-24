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
                    <p>FTX Fund (FTXF) is a token issued by FTX Finance Ltd registered in the UK and backed by <a href="https://cmcholdings.com/" target="_blank">CMC Holdings Inc</a> in the USA.</p>
                    <p>The FTX Fund project was conceived to serve as bridge between symbiotic ecosystems. The FTXF token is the backbone of this environment that transfers traditional into digital transactions on the blockchain.</p>
                    <p>The smart contract platform of the FTXF token was created by our experienced blockchain team and is based on the next generation <a href="https://www.binance.org/en/smartChain" target="_blank">Binance Smart Chain (BSC)</a>. All FTXF tokens are issued with multi- purpose utility in mind, focusing on activities in support of related financial services in fields such as e-commerce, investments and cross-border payments including via global payment gateways.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
