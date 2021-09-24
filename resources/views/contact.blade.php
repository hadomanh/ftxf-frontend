@extends('layouts.app')

@section('content')
<div class="subPage">
    <div id="contactPage" class="inner">
        <div id="particles-js"></div>
        <h3 class="pageHeading">contact <span class="fw-light">ftx fund</span></h3>
        <div class="row align-items-start">
            <div class="col-lg-4 col-md-6">
                <ul class="list-unstyled companyInfo">
                    <li>FTX FINANCE LTD (UK)</li>
                    <li>Address 1: No. 40 Gracechurch Street, London, EC3V 0BT, United Kingdom</li>
                    <li>Address 2: 116 Albert (City of Ottawa, Ontario), Canada</li>
                    <li>Email: support@ftxfund.com</li>
                    <li>Website: www.ftxfund.com</li>
                    <br>
                    <li>Partner Enquiries</li>
                    <li>Email: partners@ftxfund.com</li>
                    <br>
                    <li>Investor Relations</li>
                    <li>Email : ir@ftxfund.com</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contactForm">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger small">*</span></label>
                        <input id="name" type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger small">*</span></label>
                        <input id="email" type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message <span class="text-danger small">*</span></label>
                        <textarea id="message" class="form-control"
                                  placeholder="Please leave your message here"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Captcha <span class="text-danger small">*</span></label>
                        <div class="captcha">
                            <img src="img/captcha.jpg" alt="">
                        </div>
                    </div>
                    <button class="btn" id="submitContract">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
