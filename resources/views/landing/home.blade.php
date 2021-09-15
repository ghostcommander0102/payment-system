@extends('landing.master',['menu'=>'dashboard'])
@section('title', isset($title) ? $title : '')

@section('content')
    <div class="hero-section">
        <div class="navigation-menu" id="is_sticky">
            <div class="container">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="{{route('home')}}" class="navbar-brand d-lg-none">
                            <img src="{{show_image(1,'logo')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a class="nav-link active" href="#top">{{__('Home')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">{{__('About')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="#feature">{{__('Feature')}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="#how-to-trade">{{__('How to Trade')}}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#testimonial">{{__('Testimonial')}}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#faq">{{__('FAQ')}}</a></li>
                            </ul>
                        </div>
                        <div class="header-actions ml-auto d-none">
                            <a href="{{route('login')}}" class="btn cbtn1">{{__('Sign in')}}</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h5>{!! isset($settings['landing_banner_sub_title']) ? clean($settings['landing_banner_sub_title']) : 'Peer to Peer Trading'!!}</h5>
                        <h2>{{isset($settings['landing_banner_title']) ? $settings['landing_banner_title'] : 'Most Popular Peer To Peer Crypto Trading Marketplace.'}}</h2>
                        <p>
                            {!! isset($settings['landing_banner_description']) ? clean($settings['landing_banner_description']) :
                                'There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which slightly
                            believable.' !!}
                        </p>
                        <a href="{{route('marketPlace')}}" class="btn theme-btn">
                            {{__('Go the Marketplace ')}}
                            <img src="{{asset('assets/landing/images/arrow-right.svg')}}" alt=""
                                 class="img-fluid btn-arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/landing/images/cerve-line.svg')}}" alt="" class="cerve-line">
        <div class="right-image">
            <div class="hero-img-dot-1">
                <img src="{{asset('assets/landing/images/hero-dots/e1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="hero-img-dot-2">
                <img src="{{asset('assets/landing/images/hero-dots/e2.png')}}" class="img-fluid" alt="">
            </div>
            <div class="hero-img-dot-3">
                <img src="{{asset('assets/landing/images/hero-dots/e3.png')}}" class="img-fluid" alt="">
            </div>
            <div class="hero-img-dot-4">
                <img src="{{asset('assets/landing/images/hero-dots/e4.png')}}" class="img-fluid" alt="">
            </div>
            <img class="img-fluid"
                 @if(isset($settings['landing_banner_img'])) src="{{asset(path_image().$settings['landing_banner_img'])}}"
                 @else
                 src="{{asset('assets/landing/images/content-right-img.png')}}" @endif alt="">
        </div>
    </div>

    {{-- about section --}}
    <section class="about" id="about">
        <div class="left-img wow animate__fadeIn" data-wow-duration="500ms">
            <img @if(isset($settings['about_section_img'])) src="{{asset(path_image().$settings['about_section_img'])}}"
                 @else
                 src="{{asset('assets/landing/images/about-img.png')}}" @endif class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="right-content">
                        <h2 class="wow animate__fadeInUp"
                            data-wow-duration="500ms">{!! isset($settings['about_section_title']) ? clean($settings['about_section_title']) : 'Why You Will Choose Pexeer For Your Trading?' !!} </h2>
                        @if(isset($settings['about_section_des']))
                            <p class="wow animate__fadeInUp"
                               data-wow-duration="500ms">{!! clean($settings['about_section_des']) !!} </p>
                        @else
                            <p class="wow animate__fadeInUp" data-wow-duration="500ms">Aenean condimentum nibh vel enim
                                sodales scelerisque. Mauris quisn pellentesque odio, in
                                vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum
                                accumsan
                                nisl vulputate.</p>
                            <p class="wow animate__fadeInUp" data-wow-duration="500ms">Cenenatis. Suspendisse est nulla,
                                sollicitudin eget viverra quis, mo quis tortor. Fusce
                                ac
                                lacus ut nisl hendrerit mximus. Intege scsque molestie molestie. Suspendse eleifend urna
                                at
                                euismod ornare. Mauris dolosem, scelerisque eleifend dolor nec, ornare laoreet
                                velit.</p>
                            <p class="wow animate__fadeInUp" data-wow-duration="500ms">Aenean condimentum nibh vel enim
                                sodales scelerisque. Mauris quis pellentesque odio, in
                                vulputate turpis. Integer condimentum enim quis lorem pellentesque euismod. Nam rutrum
                                acc
                                venenatis. Suspendisse est nulla, sollicitudin eget viverra quis, mollis quis
                                tortor.</p>
                        @endif
                        <a href="{{route('marketPlace')}}" class="btn theme-btn wow animate__fadeInUp"
                           data-wow-duration="500ms">
                            {{__('Go the Marketplace ')}}
                            <img src="{{asset('assets/landing/images/arrow-right.svg')}}" class="img-fluid btn-arrow"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about section --}}

    {{-- features --}}
    <section class="features" id="feature">
        <div class="featrue-img">
            <div class="wow animate__fadeIn" data-wow-duration="500ms">
                <img
                    @if(isset($settings['feature_section_img'])) src="{{asset(path_image().$settings['feature_section_img'])}}"
                    @else
                    src="{{asset('assets/landing/images/feature-img.png')}}" @endif class="img-fluid" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="wow animate__fadeInUp"
                            data-wow-duration="500ms">{{ isset($settings['feature_section_title']) ? $settings['feature_section_title'] : "Know About Pexeer’s Feature" }}</h2>
                        <p class="wow animate__fadeInUp" data-wow-duration="700ms">{!! isset($settings['feature_section_des']) ? clean($settings['feature_section_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat scelerisque
                            mauris sit amet dignissim.' !!} </p>
                    </div>
                    <div class="feature-list" style="overflow: hidden">
                        <div class="row">
                            @if(isset($pexer_features[0]))
                                @foreach($pexer_features as $feature)
                                    <div class="col-lg-6 col-md-6 col-12 mb-5">
                                        <h3>{{explode('|',$feature->slug)[1]}}</h3>
                                        <p> {!! clean($feature->value) !!} </p>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-6 col-md-6 col-12 mb-5 wow animate__fadeInLeft"
                                     data-wow-duration="500ms">
                                    <h3>Various Ways To Pay</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-5 wow animate__fadeInRight"
                                     data-wow-duration="500ms">
                                    <h3>No Middleman</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-5 wow animate__fadeInLeft"
                                     data-wow-duration="700ms">
                                    <h3>Worldwide Service</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-5  wow animate__fadeInRight"
                                     data-wow-duration="700ms">
                                    <h3>Encrypted Message</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-5 wow animate__fadeInLeft"
                                     data-wow-duration="900ms">
                                    <h3>Fast Service</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 wow animate__fadeInRight" data-wow-duration="900ms">
                                    <h3>Non-custodial</h3>
                                    <p>Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat
                                        scelerisque mauris sit ame dignissim. </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- features --}}


    {{-- how to trade --}}
    <section class="how-to-trade" id="how-to-trade">
        <article class="trading-coins">
            <div class="container">
                <div class="row">
                    @php
                        $i = 0
                    @endphp
                    @if(isset($coins[0]))
                        @foreach($coins as $key => $coin)
                            @php
                                if($i > 3) $i = 1; else
                                  $i += 1
                            @endphp
                            <div class="col-lg-6 mb-4 wow animate__fadeInUp"
                                 data-wow-duration="{{rand(4,7)}}00ms">
                                <div class="coin-card">
                                    <div class="icon">
                                        <img @if(!empty($coin->image)) src="{{asset(path_image().$coin->image)}}" @else
                                        src="{{asset('assets/landing/images/coins/1.png')}}" @endif class="img-fluid"
                                             alt="">
                                    </div>
                                    <h3>{!! clean($coin->name) !!}</h3>
                                    <p>@if(!empty($coin->details)) {!! clean($coin->details) !!} @else {{__('Fusce dui erat, efficitur ac
                                        nibh eget, tristique lobortis erat. Duiset luctus eleifend
                                        elementum. Nulla facilisi. Maecenas non commodo risus. Orci varius natoque
                                        penatibus et
                                        magnis dis parturient montes, nascetur ridiculus mus.')}} @endif</p>
                                    <div class="btn-group">
                                        <a href="{{route('marketPlace',['coin_type'=>$coin->type])}}"
                                           class="btn buy-sale-btn buy-sale-btn-1">{{__('Buy')}}</a>
                                        <a href="{{route('marketPlace',['coin_type'=>$coin->type])}}" class="btn buy-sale-btn buy-sale-btn-2">Sell</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-6 mb-4 wow animate__fadeInUp" data-wow-duration="300ms">
                            <div class="coin-card">
                                <div class="icon">
                                    <img src="{{asset('assets/landing/images/coins/1.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3>Bitcoin</h3>
                                <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duiset luctus
                                    eleifend
                                    elementum. Nulla facilisi. Maecenas non commodo risus. Orci varius natoque penatibus
                                    et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <div class="btn-group">
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-1">Buy</a>
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-2">Sell</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 wow animate__fadeInUp" data-wow-duration="500ms">
                            <div class="coin-card">
                                <div class="icon">
                                    <img src="{{asset('assets/landing/images/coins/2.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3>Ethereum</h3>
                                <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duiset luctus
                                    eleifend
                                    elementum. Nulla facilisi. Maecenas non commodo risus. Orci varius natoque penatibus
                                    et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <div class="btn-group">
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-1">Buy</a>
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-2">Sell</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 wow animate__fadeInUp" data-wow-duration="300ms">
                            <div class="coin-card">
                                <div class="icon">
                                    <img src="{{asset('assets/landing/images/coins/3.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3>Litecoin</h3>
                                <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duiset luctus
                                    eleifend
                                    elementum. Nulla facilisi. Maecenas non commodo risus. Orci varius natoque penatibus
                                    et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <div class="btn-group">
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-1">Buy</a>
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-2">Sell</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 wow animate__fadeInUp" data-wow-duration="500ms">
                            <div class="coin-card">
                                <div class="icon">
                                    <img src="{{asset('assets/landing/images/coins/4.png')}}" class="img-fluid" alt="">
                                </div>
                                <h3>Bitcoin</h3>
                                <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duiset luctus
                                    eleifend
                                    elementum. Nulla facilisi. Maecenas non commodo risus. Orci varius natoque penatibus
                                    et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <div class="btn-group">
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-1">Buy</a>
                                    <a href="void:" class="btn buy-sale-btn buy-sale-btn-2">Sell</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </article>
        <article class="treading-process">
            <div class="arrow arrow-top wow animate__fadeIn" data-wow-duration="500ms">
                <img src="{{asset('assets/landing/images/top-arrow.png')}}" class="img-fluid" alt="">
            </div>
            <div class="arrow arrow-bottom wow animate__fadeIn" data-wow-duration="500ms">
                <img src="{{asset('assets/landing/images/bottom-arrow.png')}}" class="img-fluid" alt="">
            </div>
            <div class="arrow arrow-left wow animate__fadeIn" data-wow-duration="500ms">
                <img src="{{asset('assets/landing/images/left-side-arrow.png')}}" class="img-fluid" alt="">
            </div>
            <div class="arrow arrow-right wow animate__fadeIn" data-wow-duration="500ms">
                <img src="{{asset('assets/landing/images/right-side-arrow.png')}}" class="img-fluid" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <h2 class="wow animate__fadeInUp"
                                data-wow-duration="500ms"> {!! isset($settings['trade_section_title']) ? clean($settings['trade_section_title']) : 'How To Do Pexeer Trading' !!} </h2>
                            <p class="wow animate__fadeInUp" data-wow-duration="700ms">
                                {!! isset($settings['trade_section_des']) ? clean($settings['trade_section_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat scelerisque
                                mauris sit amet dignissim.' !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 mb-5 wow animate__fadeInUp" data-wow-duration="1s">
                        <div class="treading-process-card">
                            <img
                                @if(isset($settings['trade_process_four_img'])) src="{{asset(path_image().$settings['trade_process_four_img'])}}"
                                @else
                                src="{{asset('assets/landing/images/tread-process/1.png')}}" @endif class="img-fluid"
                                alt="">
                            <div class="content">
                                <h4 class="mt-4">
                                    4.{!! isset($settings['trade_process_four_title']) ? clean($settings['trade_process_four_title']) : 'Make Exchange' !!} </h4>
                                <p> {!! isset($settings['trade_process_four_des']) ? clean($settings['trade_process_four_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu.' !!}  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 wow animate__fadeInUp" data-wow-duration="500ms">
                        <div class="treading-process-card">
                            <img
                                @if(isset($settings['trade_process_one_img'])) src="{{asset(path_image().$settings['trade_process_one_img'])}}"
                                @else
                                src="{{asset('assets/landing/images/tread-process/2.png')}}" @endif class="img-fluid"
                                alt="">
                            <div class="content">
                                <h4 class="mt-4">
                                    1.{!! isset($settings['trade_process_one_title']) ? clean($settings['trade_process_one_title']) : 'Create account' !!}</h4>
                                <p> {!! isset($settings['trade_process_one_des']) ? clean($settings['trade_process_one_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu.' !!}  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__fadeInUp" data-wow-duration="700ms">
                        <div class="treading-process-card">
                            <div class="content">
                                <h4>
                                    3.{!! isset($settings['trade_process_three_title']) ? clean($settings['trade_process_three_title']) : 'Open Trade' !!}</h4>
                                <p class="mb-4"> {!! isset($settings['trade_process_three_des']) ? clean($settings['trade_process_three_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu.' !!} </p>
                            </div>
                            <img
                                @if(isset($settings['trade_process_three_img'])) src="{{asset(path_image().$settings['trade_process_three_img'])}}"
                                @else
                                src="{{asset('assets/landing/images/tread-process/3.png')}}" @endif class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__fadeInUp" data-wow-duration="900ms">
                        <div class="treading-process-card">
                            <div class="content">
                                <h4>
                                    2.{!! isset($settings['trade_process_two_title']) ? clean($settings['trade_process_two_title']) : 'Watch Buy And Selling' !!}</h4>
                                <p class="mb-4">{!! isset($settings['trade_process_two_des']) ? clean($settings['trade_process_two_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu.' !!} </p>
                            </div>
                            <img
                                @if(isset($settings['trade_process_two_img'])) src="{{asset(path_image().$settings['trade_process_two_img'])}}"
                                @else
                                src="{{asset('assets/landing/images/tread-process/4.png')}}" @endif class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    {{-- how to trade --}}

    {{-- testimonials --}}
    <section class="testimonials" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="wow animate__fadeInUp"
                            data-wow-duration="500ms">{{ isset($settings['testimonial_section_title']) ? $settings['testimonial_section_title'] : 'What Says Our Customer' }}</h2>
                        <p class="wow animate__fadeInUp" data-wow-duration="700ms">{!!  isset($settings['testimonial_section_des']) ? clean($settings['testimonial_section_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat scelerisque
                            mauris sit amet dignissim.'!!} </p>
                    </div>
                </div>
            </div>
            <div class="row wow animate__fadeIn" data-wow-duration="900ms">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme testimonial-slider">
                        @if(isset($testimonials[0]))
                            @foreach($testimonials as $testimonial)
                                <div class="item">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <img src="{{$testimonial->image}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <h3>{!! clean($testimonial->name) !!}</h3>
                                            <h5>{!! clean($testimonial->designation) !!} of {!! clean($testimonial->company_name) !!} </h5>
                                            <p>{!! clean($testimonial->messages) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <img src="{{asset('assets/landing/images/testimonial.png')}}" class="img-fluid"
                                             alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>Samanta William</h3>
                                        <h5>CEO of Exchange Taxenge</h5>
                                        <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duis luctus
                                            eleifend elementum. Nulla facilisi. Maecenas no commodo risus. Orci varius
                                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            Sed
                                            facilisis rhoncus lorem sit amet commodo. Nulla tincidunt volutpa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <img src="{{asset('assets/landing/images/testimonial.png')}}" class="img-fluid"
                                             alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>Samanta William</h3>
                                        <h5>CEO of Exchange Taxenge</h5>
                                        <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duis luctus
                                            eleifend elementum. Nulla facilisi. Maecenas no commodo risus. Orci varius
                                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            Sed
                                            facilisis rhoncus lorem sit amet commodo. Nulla tincidunt volutpa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <img src="{{asset('assets/landing/images/testimonial.png')}}" class="img-fluid"
                                             alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>Samanta William</h3>
                                        <h5>CEO of Exchange Taxenge</h5>
                                        <p>Fusce dui erat, efficitur ac nibh eget, tristique lobortis erat. Duis luctus
                                            eleifend elementum. Nulla facilisi. Maecenas no commodo risus. Orci varius
                                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            Sed
                                            facilisis rhoncus lorem sit amet commodo. Nulla tincidunt volutpa.</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonials --}}

    {{-- faq --}}
    <section class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="wow animate__fadeInUp"
                            data-wow-duration="500ms">{{isset($settings['faq_section_title']) ? $settings['faq_section_title'] : 'What Want Our Customer'}}</h2>
                        <p class="wow animate__fadeInUp" data-wow-duration="700ms">{!! isset($settings['faq_section_des']) ? clean($settings['faq_section_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat scelerisque
                            mauris sit amet dignissim.'  !!} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-img">
                        <img
                            @if(isset($settings['faq_section_img'])) src="{{asset(path_image().$settings['faq_section_img'])}}"
                            @else
                            src="{{asset('assets/landing/images/faq-left.png')}}" @endif class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="faqAccordion">
                        @php
                            $i =0
                        @endphp
                        @if(isset($faqs[0]))
                            @foreach($faqs as $faq)
                                @php
                                    if($i > 3) $i = 1; else
                                      $i += 1
                                @endphp
                                <div class="card faq-card wow animate__fadeInUp" data-wow-duration="{{rand(2,5)}}s">
                                    <div class="card-header" id="faq{{$faq->id}}">
                                        <button class="btn btn-block collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse{{$faq->id}}"
                                                aria-expanded="false"
                                                aria-controls="collapse1">
                                            {!! clean($faq->question) !!}
                                        </button>
                                    </div>

                                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="faq{{$faq->id}}"
                                         data-parent="#faqAccordion">
                                        <div class="card-body">
                                            {!! clean($faq->answer) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="card faq-card wow animate__fadeInUp" data-wow-duration="300ms">
                                <div class="card-header" id="faq1">
                                    <button class="btn btn-block collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                                            aria-controls="collapse1">
                                        Can we use for trial?
                                    </button>
                                </div>

                                <div id="collapse1" class="collapse" aria-labelledby="faq1"
                                     data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Beguiled and demoralized by the charms of pleasure of moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through.Beguiled and demoralized by the
                                        charms.Beguiled and demoralized by the charms of pleasure of moment, so blinded
                                        by
                                        desire, that they cannot foresee the pain trouble
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-card wow animate__fadeInUp" data-wow-duration="400ms">
                                <div class="card-header" id="faq2">
                                    <button class="btn btn-block collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                        Can we use for trial?
                                    </button>
                                </div>

                                <div id="collapse2" class="collapse" aria-labelledby="faq2"
                                     data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Beguiled and demoralized by the charms of pleasure of moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through.Beguiled and demoralized by the
                                        charms.Beguiled and demoralized by the charms of pleasure of moment, so blinded
                                        by
                                        desire, that they cannot foresee the pain trouble
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-card wow animate__fadeInUp" data-wow-duration="500ms">
                                <div class="card-header" id="faq3">
                                    <button class="btn btn-block collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                        When our power of choice is untrammelled?
                                    </button>
                                </div>

                                <div id="collapse3" class="collapse" aria-labelledby="faq3"
                                     data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Beguiled and demoralized by the charms of pleasure of moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through.Beguiled and demoralized by the
                                        charms.Beguiled and demoralized by the charms of pleasure of moment, so blinded
                                        by
                                        desire, that they cannot foresee the pain trouble
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-card wow animate__fadeInUp" data-wow-duration="600ms">
                                <div class="card-header" id="faq5">
                                    <button class="btn btn-block collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                        Who do not know how to pursue pleasure?
                                    </button>
                                </div>

                                <div id="collapse5" class="collapse" aria-labelledby="faq5"
                                     data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Beguiled and demoralized by the charms of pleasure of moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through.Beguiled and demoralized by the
                                        charms.Beguiled and demoralized by the charms of pleasure of moment, so blinded
                                        by
                                        desire, that they cannot foresee the pain trouble
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-card wow animate__fadeInUp" data-wow-duration="700ms">
                                <div class="card-header" id="faq6">
                                    <button class="btn btn-block collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse6" aria-expanded="false"
                                            aria-controls="collapse6">
                                        Who do not know how to pursue pleasure?
                                    </button>
                                </div>

                                <div id="collapse6" class="collapse" aria-labelledby="faq6"
                                     data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Beguiled and demoralized by the charms of pleasure of moment, so blinded by
                                        desire,
                                        that they cannot foresee the pain trouble that are bound to ensue; and equal
                                        blame
                                        belongs to those who fail in their duty through.Beguiled and demoralized by the
                                        charms.Beguiled and demoralized by the charms of pleasure of moment, so blinded
                                        by
                                        desire, that they cannot foresee the pain trouble
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- faq --}}

    {{-- newsletter --}}
    <section class="newsletter wow animate__fadeIn" data-wow-duration="900ms">
        <div class="container">
            <div class="newsletter-inner">
                <div class="newsletter-img">
                    <img
                        @if(isset($settings['newsletter_section_img'])) src="{{asset(path_image().$settings['newsletter_section_img'])}}"
                        @else
                        src="{{asset('assets/landing/images/newsletter-img.png')}}" @endif class="img-fluid" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>{!!  isset($settings['newsletter_section_title']) ? clean($settings['newsletter_section_title']) : 'Join Our Newsletter' !!}</h2>
                            <p>{!! isset($settings['newsletter_section_des']) ? clean($settings['newsletter_section_des']) : 'Donec tristique commodo massa, prtiu egestas metus luctus eu. Morbi consequat scelerisque
                                mauris sit amet dignissim.' !!} </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="newsletter-form" action="{{route('subscriptionProcess')}}" method="post">
                            @csrf
                            <input type="email" required name="email" class="form-control" placeholder="Your email">
                            <button type="submit" class="newsletter-submit-btn"><i class="icofont-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- newsletter --}}

    <div class="modal fade " id="popUpModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-content">
                                <p>
                                    @if(isset($settings['terms_condition']))
                                        {!! clean($settings['terms_condition']) !!}
                                    @else
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi distinctio dolore
                                        ex, harum illum in inventore ipsam iusto laborum maiores minima minus modi nulla
                                        odio odit pariatur porro quod ratione reiciendis rerum tempore velit veritatis!
                                        Consequuntur corporis dolores ea eaque, error excepturi id ipsam iste magnam
                                        mollitia non nulla obcaecati placeat possimus provident quibusdam quod quos tempora.
                                        A autem cumque cupiditate, debitis distinctio, esse harum labore nobis nulla
                                        perferendis quasi tempora voluptas? Consequatur corporis cum reiciendis! A
                                        accusantium aperiam aspernatur at autem debitis delectus dolores error est eum
                                        eveniet ex facilis id itaque, laudantium magnam minima natus neque nihil nisi nobis
                                        numquam officiis perferendis quia quidem quisquam, repellendus reprehenderit saepe
                                        tempora ullam? Esse eum illum, neque obcaecati officiis quae repudiandae sequi. Aut
                                        corporis debitis dignissimos error, est fugit iste laboriosam laudantium maiores nam
                                        nobis quae quidem quod repellat repellendus rerum similique soluta voluptatem
                                        voluptates voluptatibus. Consequatur dolorem eos id illo numquam odit perspiciatis
                                        recusandae repudiandae suscipit unde. Aliquam, amet aperiam consequuntur corporis
                                        cum delectus dignissimos, ex, molestias obcaecati placeat quam quisquam quos rerum
                                        temporibus ut veritatis voluptates? Dolore facilis illum impedit natus quae?
                                        Accusantium adipisci asperiores atque cum delectus esse, eum ex illo in incidunt
                                        minima molestiae natus nemo neque nisi odio officiis possimus provident quae quaerat
                                        quas reiciendis rem repudiandae sint voluptas voluptate, voluptatem. Aspernatur,
                                        harum mollitia necessitatibus porro sit suscipit unde? Animi deleniti ducimus ea,
                                        eius harum ipsum magnam nesciunt officiis reiciendis vel! Aliquid atque deserunt
                                        fugit laborum qui quisquam saepe sapiente sequi vero voluptate. Aliquam aliquid
                                        consequatur culpa in incidunt odio quibusdam, temporibus voluptatibus. Alias aliquid
                                        commodi labore placeat tempora! Ad aperiam consequuntur, deserunt dolore eligendi
                                        magnam nisi pariatur quam quidem, repellat reprehenderit saepe sequi vero. Culpa
                                        debitis et minus modi nesciunt quidem, rem saepe? Accusantium at cumque enim
                                        exercitationem, optio pariatur provident quo veniam! Accusamus alias aliquam amet
                                        blanditiis consectetur cupiditate delectus deleniti deserunt distinctio dolor eaque
                                        esse excepturi exercitationem expedita illo inventore iure labore laudantium minus,
                                        necessitatibus non obcaecati odit optio pariatur perferendis possimus quae quidem
                                        quos repudiandae saepe sapiente sequi, sit, temporibus tenetur unde vel voluptatem.
                                        Aliquam autem consequuntur ducimus, earum eum eveniet excepturi inventore itaque
                                        labore laboriosam laborum necessitatibus nulla numquam porro quas qui ratione sed
                                        totam ut voluptatum? Corporis nostrum recusandae voluptas. Corporis iste quia rerum.
                                        Amet at autem beatae blanditiis consequatur culpa delectus dolor earum eligendi est
                                        exercitationem facere fuga fugit hic illo illum, ipsum iure modi molestiae,
                                        necessitatibus neque numquam porro praesentium quas quia quibusdam quos recusandae
                                        sit voluptatem voluptates? Accusamus accusantium alias architecto aspernatur
                                        assumenda at consectetur consequatur culpa cumque dolor earum eius eligendi enim
                                        error est ex illo incidunt maxime minus molestias nisi nulla quia quibusdam quos
                                        repellendus vel vero, voluptas! Animi aut blanditiis consequatur cumque cupiditate
                                        dicta dolor dolore dolores eaque earum excepturi facere, facilis hic impedit in ipsa
                                        ipsum iusto labore libero magnam modi necessitatibus nesciunt, nobis officia,
                                        placeat possimus quae quam qui quos repudiandae saepe totam voluptate voluptatum.
                                        Ratione, unde, vel! Aperiam aspernatur commodi ea et ex libero neque pariatur
                                        provident! Dolorem doloribus, minus."
                                    @endif
                                </p>
                            </div>
                            <div class="border-top pt-4">
                                <p>
                                    {{__('Please read this terms and condition carefully. It is necessary that you read and understand the information')}}
                                </p>
                            </div>
                            <form class="mt-4" action="{{route('saveUserAgreement')}}" method="POST">
                                @csrf
                                <div class="form-check">
                                    <input class="form-check-input d-none" type="radio" name="agree_terms"
                                           id="popupRadio1"
                                           value="{{AGREE}}">
                                    <label class="form-check-label" for="popupRadio1">{{__('Understand and Agree')}}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input d-none" type="radio" name="agree_terms"
                                           id="popupRadio2"
                                           value="{{NOT_AGREE}}">
                                    <label class="form-check-label" for="popupRadio2">{{__('Not agree')}}</label>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                                    <button type="submit" class="btn theme-btn">{{__('Continue')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script !src="">
    (function($) {
        "use strict";

        @if(Auth::user() && Auth::user()->agree_terms == STATUS_DEACTIVE)
            $(window).on('load', function () {
                $('#popUpModal').modal('show');
            });
        @endif

    })(jQuery);
</script>

@endsection
