<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon"/>
    <link rel="icon" href="{{ asset('img/ftxf-icon.png') }}" type="image/ico"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @hasSection ('seoTag')
        @yield('seoTag')
    @else
        <!-- Main Tag -->
        <title>FTXFUND - The most comprehensive financial ecosystem on BSC</title>
        <meta id="PagKeywords" name="keywords" content="FTXF"/>
        <meta id="PagDescription" name="description" content="FTXFUND - The most comprehensive financial ecosystem on BSC"/>

        <!-- Facebook Tag -->
        <meta property="og:url" content="https://ftxf-frontend.pages.dev"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="FTXFUND - The most comprehensive financial ecosystem on BSC"/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content="https://ftxf-frontend.pages.dev/img/logo.png"/>
        <meta property="og:site_name" content="Ftxfund"/>
    @endif

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/style.css?v=') . time() }}" rel="stylesheet">

</head>

<body>
<header>
    <div class="d-flex align-items-center">
        <div class="col-auto me-auto" id="logo">
            <a href="{{ route('home.index') }}"><img src="{{ asset('img/logo.png')}}"  alt=""></a>
        </div>
        <div class="col-auto d-none d-md-block headerLink">
            <a href="{{ asset('lightpaper.pdf') }}" target="_blank">Lightpaper</a>
            <a href="https://app.ftxfund.com/" target="_blank">Launch App</a>
            <span class="separated"></span>
        </div>
        <div class="headerShare d-lg-none">
            <div class="headerShareBtn">Connect Us</div>
            <div class="shareWrap">
                <div class="row g-0">
                    <div class="col-4">
                        <a href="https://ftxfund.medium.com/" target="_blank" class="shareIcon">
			                <i class="fab fa-medium"></i>
			            </a>
                    </div>
                    <div class="col-4">
                        <a href="https://linkedin.com/company/ftx-fund/" target="_blank" class="shareIcon">
			                <i class="fab fa-linkedin"></i>
			            </a>
                    </div>
                    <div class="col-4">
                        <a href="https://t.me/FTXFundGlobal" target="_blank" class="shareIcon">
			                <i class="fab fa-telegram-plane"></i>
			            </a>
                    </div>
                    <div class="col-4">
			            <a href="https://www.facebook.com/FTXFund" target="_blank" class="shareIcon">
			                <i class="fab fa-facebook"></i>
			            </a>
			        </div>
			        <div class="col-4">
			            <a href="https://t.me/ftxfundchannel" target="_blank" class="shareIcon">
			                <i class="fab fa-telegram-plane"></i>
			            </a>
			        </div>
			        <div class="col-4">
			            <a href="https://twitter.com/FTXfundofficial" target="_blank" class="shareIcon">
			                <i class="fab fa-twitter"></i>
			            </a>
			        </div>
			        <div class="col-4">
			            <a href="https://www.youtube.com/channel/UCfI7bFtIrFfE-NeS7y57OJw" target="_blank" class="shareIcon">
			                <i class="fab fa-youtube"></i>
			            </a>
			        </div>
			        <div class="col-4">
			            <a href="https://open.kakao.com/o/gIgd7nFc" target="_blank" class="shareIcon">
			                <i class="fas fa-comments"></i>
			            </a>
			        </div>
			        <div class="col-4">
			            <a href="https://github.com/FTXFUND" target="_blank" class="shareIcon">
			                <i class="fab fa-github"></i>
			            </a>
			        </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="mainMenu">
                <div id="menuIcon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.about') }}">About FTX Fund</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.ecosystem') }}">Ecosystem</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.roadmap') }}">Roadmap</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.partner') }}">Our Partners</a></li>
                    <li><a class="dropdown-item"
                           href="https://bscscan.com/address/0xd90F0846b9D0F371b35a9Fe89102C306458AA56F"
                           target="_blank">Smart Contract</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.news') }}">News</a></li>
                    <li><a class="dropdown-item" href="{{ route('home.contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<aside id="leftSide" class="d-none d-lg-block">
    <span class="separated"></span>
    <ul class="social list-unstyled">
        <li>
            <a href="https://ftxfund.medium.com/" target="_blank">
                <i class="fab fa-medium"></i>
            </a>
        </li>
        <li>
            <a href="https://linkedin.com/company/ftx-fund/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li>
            <a href="https://t.me/FTXFundGlobal" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/FTXFund" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li>
            <a href="https://t.me/ftxfundchannel" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/FTXfundofficial" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/channel/UCfI7bFtIrFfE-NeS7y57OJw" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li>
            <a href="https://open.kakao.com/o/gIgd7nFc" target="_blank">
                <i class="fas fa-comments"></i>
            </a>
        </li>
        <li>
            <a href="https://github.com/FTXFUND" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </li>
    </ul>
    <div class="shareBtn">
        <i class="fas fa-plus"></i>
        <div class="text">Share</div>
    </div>
</aside>
<div class="shareWrap d-none d-lg-block">
    <div class="row g-0">
        <div class="col-md-4">
            <a href="https://twitter.com/intent/tweet?text=https://ftxfund.com/" target="_blank"
               class="shareIcon twShare">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
        <div class="col-md-4">
            <a target="_blank"
               href="http://www.linkedin.com/shareArticle?mini=true&url=https://ftxfund.com/"
               class="shareIcon lkShare">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="col-md-4">
            <a target="_blank" href="https://xn--r1a.link/share/url?url=https://ftxfund.com/"
               class="shareIcon clShare">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </div>
    </div>
</div>
<aside id="rightSide" class="d-none d-lg-block">
    <div class="scrollWrap">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
        <ion-icon name="chevron-down-outline"></ion-icon>
    </div>
</aside>
<div id="content">
    @yield('content')
</div>

<!-- Js File -->
<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/particles.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
            loop: true,
            responsiveClass: true,
            smartSpeed: 2000,
            center: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                }
            }
        });
        $(".shareBtn").click(function () {
            $(this).toggleClass("active");
            $(".shareWrap").toggleClass("active");
        });
        $(".shareIcon.closeShareBtn").click(function () {
            $(".shareWrap, .shareBtn").toggleClass("active");
        });
        $(".headerShareBtn").click(function () {
            $(this).toggleClass("active");
            $(".headerShare .shareWrap").toggleClass("active");
        });
        $(".mainMenu #menuIcon").click(function () {
            $(".mainMenu .dropdown-menu").toggleClass("active");
        });
        $("#menuIcon").click(function () {
            $(this).toggleClass("on");
        });
    });
</script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '368008405062991',
            xfbml: true,
            version: 'v11.0'
        });
        FB.AppEvents.logPageView();
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $(document).ready(function () {
        $(".fbShare").click(function () {
            FB.ui({
                method: 'share',
                href: 'https://ftxfund.com/'
            }, function (response) {
                console.log(response)
            });
        })
    })

    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 70,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#4c6eff" //dot
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#ff0000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#92a7ff", //line
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": true,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
        
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="{{ asset("js/globe.js") }}" type="module"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-211657580-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-211657580-1');
</script>

<script>
    /* Start Alexa Certify Javascript */
    atrk_opts = { atrk_acct:"WUD1x1WyR620WR", domain:"ftxfund.com",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>

</body>
</html>
