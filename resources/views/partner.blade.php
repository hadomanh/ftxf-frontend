@extends('layouts.app')

@section('content')
<div class="subPage">
    <div id="partnersPage" class="inner">
        <div id="particles-js"></div>
        <h3 class="pageHeading">partners <br>and investors</h3>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Our Partners and Investors are an important cornerstone of the business. Please refer any questions, offers and requests to our specialised departments.</p>

                <p>
                    Partner Enquiries
                    <br>
                    Email: partners@ftxfund.com
                </p>

                <p>
                    Investor Relations
                    <br>
                    Email : ir@ftxfund.com
                </p>
                    
                <img src="img/partner-bg-1.png" alt="">
            </div>
            <div class="col-md-8">
                <div class="row g-0 listPartners">
                    @foreach ($partners as $item)
                        <a href="{{ $item->url }}" target="_blank" class="col-md-4 col-6 inner">
                            <img src="{{ asset('storage/' . $item->logo )}}" alt="">
                        </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
