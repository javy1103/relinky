@extends('layouts.app')

@section('head')
    <title>Relinky</title>
    <script src="/js/landing/landing.js"></script>
    <link href="/css/landing/main.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <!-- navigation -->
    <header id="header_main">
        <nav class="uk-navbar">
            <div class="uk-container uk-container-center">
                <a href="{{ url('/') }}" class="uk-navbar-brand">
                    Relinky
                </a>
                <div class="uk-navbar-flip">
                    <a href="#" id="mobile_navigation_toggle" data-uk-offcanvas="{target:'#mobile_navigation'}"><i class="material-icons">&#xE5D2;</i></a>
                    <ul class="uk-navbar-nav" id="main_navigation">
                        <li>
                            <a href="{{url('register')}}">
                                Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="#login_modal" data-uk-modal>
                                Log In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="mobile_navigation" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul>
                <li>
                    <a href="#sect-overview" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE417;</i></span>
                        <span class="menu_title">Overview</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-features" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE896;</i></span>
                        <span class="menu_title">Features</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-gallery" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE410;</i></span>
                        <span class="menu_title">Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-pricing" class="uk-navbar-nav-subtitle" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE227;</i></span>
                        <span class="menu_title">Pricing<small>Find the perfect plan</small></span>
                    </a>
                </li>
                <li>
                    <a href="#sect-team" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE7FB;</i></span>
                        <span class="menu_title">Team</span>
                    </a>
                </li>
                <li>
                    <a href="#sect-contact" data-uk-smooth-scroll="{offset: 48}">
                        <span class="menu_icon"><i class="material-icons">&#xE0E1;</i></span>
                        <span class="menu_title">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <section style="background-image: url('img/slider/car.jpg')" class="banner" id="sect-overview">
        <div class="uk-grid uk-grid-width-1-1">
            @include('shared.forms.basic_search')
        </div>
    </section>

    <section class="section section_dark md-bg-indigo-700">
        <div class="uk-container uk-container-center animate" data-uk-scrollspy="{cls:'uk-animation-slide-right animated',target:'> *',delay:300}">
            <h2 class="heading_a heading_light uk-text-center-medium">
                Big Header to get your attention
                <span class="sub-heading">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </h2>
        </div>
    </section>

    <section class="section section_large" id="sect-features">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-large-3-5 uk-container-center uk-text-center">
                    <h2 class="heading_b">
                        Features
                        <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem consectetur cupiditate, distinctio impedit quisquam rerum voluptas. Fugiat, repudiandae, sit.</span>
                    </h2>
                </div>
            </div>
            <div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5 animate" data-uk-grid-margin data-uk-scrollspy="{cls:'uk-animation-slide-bottom animated',target:'> *',delay:300,topoffset:-100}">
                <div>
                    <div class="uk-text-center uk-margin-bottom">
                        <i class="material-icons icon_large icon_dark">&#xE263;</i>
                    </div>
                    <h3 class="heading_c uk-text-center">Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, odio.</p>
                </div>
                <div>
                    <div class="uk-text-center uk-margin-bottom">
                        <i class="material-icons icon_large icon_dark">&#xE85C;</i>
                    </div>
                    <h3 class="heading_c uk-text-center">Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, odio.</p>
                </div>
                <div>
                    <div class="uk-text-center uk-margin-bottom">
                        <i class="material-icons icon_large icon_dark">&#xE8DC;</i>
                    </div>
                    <h3 class="heading_c uk-text-center">Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, odio.</p>
                </div>
                <div>
                    <div class="uk-text-center uk-margin-bottom">
                        <i class="material-icons icon_large icon_dark md-color-red-500">&#xE3AF;</i>
                    </div>
                    <h3 class="heading_c uk-text-center">Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, odio.</p>
                </div>
                <div>
                    <div class="uk-text-center uk-margin-bottom">
                        <i class="material-icons icon_large icon_dark">&#xE6DF;</i>
                    </div>
                    <h3 class="heading_c uk-text-center">Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, odio.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_gallery md-bg-blue-grey-50" id="sect-gallery">
        <div class="uk-container uk-container-center uk-invisible" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible',delay:300,topoffset:-150}">
            <h2 class="heading_c uk-margin-medium-bottom uk-text-center-medium">
                Gallery
                <span class="sub-heading">The Best Images From Around The World</span>
            </h2>
            <div data-uk-slider>
                <div class="uk-slider-container">
                    <ul class="uk-grid uk-grid-small uk-slider uk-grid-width-medium-1-3 uk-grid-width-large-1-4">
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image01.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 1</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image11.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 2</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image07.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 3</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image08.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 4</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image02.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 5</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image14.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 6</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image06.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 7</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="md-card">
                                <div class="md-card-content padding-reset"><img src="img/gallery/Image12.jpg" alt=""></div>
                                <div class="md-card-footer">
                                    <h4 class="md-card-footer-head">Heading 8</h4>
                                    Lorem ipsum dolor sit amet, consectetur.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="slide_navigation">
                    <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="sect-pricing">
        <div class="uk-container uk-container-center">
            <h2 class="heading_b uk-margin-large-bottom uk-text-center">
                Find the <span class="md-color-light-green-500">perfect plan</span> for your business
            </h2>
            <div class="pricing_table pricing_table_a uk-grid uk-grid-small uk-grid-width-medium-1-2 uk-grid-width-large-1-4 animate" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}"  data-uk-scrollspy="{cls:'uk-animation-slide-bottom animated',target:'> *',delay:300,topoffset:-100}">
                <div>
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 1</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>0
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>512MB</strong> Memory</li>
                                <li><strong>1 Core</strong> Processor</li>
                                <li><strong>20GB</strong> SSD Disk</li>
                                <li><strong>1TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 2</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>20
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>1 GB</strong> Memory</li>
                                <li><strong>1 Core</strong> Processor</li>
                                <li><strong>30GB</strong> SSD Disk</li>
                                <li><strong>2TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-light-green-500 md-color-white">Plan 3</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>40
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>4 GB</strong> Memory</li>
                                <li><strong>2 Core</strong> Processor</li>
                                <li><strong>60GB</strong> SSD Disk</li>
                                <li><strong>4TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large md-btn-success">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content padding-reset">
                            <div class="pricing_table_plan md-bg-grey-500 md-color-white">Plan 4</div>
                            <div class="pricing_table_price">
                                <span class="currency">$</span>80
                                <span class="period">monthly</span>
                            </div>
                            <ul class="pricing_table_features">
                                <li><strong>8 GB</strong> Memory</li>
                                <li><strong>4 Core</strong> Processor</li>
                                <li><strong>100GB</strong> SSD Disk</li>
                                <li><strong>5TB</strong> Transfer</li>
                            </ul>
                            <div class="pricing_table_select">
                                <a href="#" class="md-btn md-btn-large">Get it now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="section">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-3 uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-left uk-invisible',delay:400,topoffset:-100}">
                    <h3 class="heading_c"><i class="material-icons md-36 md-color-red-500">&#xE88F;</i> Pricing FAQ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at deserunt est et eveniet facilis fuga illum iste magni nulla obcaecati placeat quam, repudiandae rerum similique soluta, temporibus veritatis. Dignissimos dolor dolores possimus! Aut eligendi, exercitationem porro saepe veritatis voluptas?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at deserunt est et eveniet facilis fuga illum iste magni nulla obcaecati placeat quam, repudiandae rerum similique soluta, temporibus veritatis. Dignissimos dolor dolores possimus! Aut eligendi, exercitationem porro saepe veritatis voluptas?</p>
                </div>
                <div class="uk-width-large-2-3 uk-invisible" data-uk-scrollspy="{cls:'uk-animation-slide-right uk-invisible',delay:800,topoffset:-100}">
                    <div class="uk-accordion" data-uk-accordion>
                        <h3 class="uk-accordion-title">CAN I SWITCH PLANS?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">DO YOU SELL DOMAINS?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">DO YOU OFFER EMAIL ACCOUNTS?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">HOW DO I SIGN UP?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">IS THERE A DISCOUNT FOR YEARLY SERVICE?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">HOW LONG ARE YOUR CONTRACTS?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3 class="uk-accordion-title">HAVE MORE QUESTIONS?</h3>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section md-bg-blue-grey-50" id="sect-team">
        <div class="uk-container uk-container-center uk-invisible" data-uk-scrollspy="{cls:'uk-animation-scale-up uk-invisible',delay:300,topoffset:-100}">
            <div class="uk-grid uk-margin-large-bottom">
                <div class="uk-width-large-3-5 uk-container-center uk-text-center">
                    <h2 class="heading_b">
                        Our Team
                        <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </h2>
                </div>
            </div>
            <div class="uk-tab-center uk-margin-medium-bottom">
                <ul class="uk-tab uk-tab-large" data-uk-tab="{connect:'#team_tabbed',animation: 'slide-bottom'}">
                    <li class="uk-active"><a href="#">Developers</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Marketing</a></li>
                </ul>
            </div>
            <ul id="team_tabbed" class="uk-switcher uk-margin">
                <li>
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head md-bg-light-blue-600">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_07.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center md-color-white">
                                        Darion Brekke
                                        <span class="uk-text-truncate">PHP, MYSQL, NODEJS</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_05.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Charles Lesch
                                        <span class="uk-text-truncate">HTML, CSS, JS</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_09.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Viva Ankunding
                                        <span class="uk-text-truncate">JAVA, C++, ANDROID</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_06.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Randi Tromp
                                        <span class="uk-text-truncate"><i class="material-icons">&#xE0CD;</i> 123-456-789</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_10.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Felix Wiza Jr.
                                        <span class="uk-text-truncate"><i class="material-icons">&#xE0CD;</i> 123-456-789</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_12.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Libby Harvey Sr.
                                        <span class="uk-text-truncate"><i class="material-icons">&#xE0CD;</i> 123-456-789</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid-margin>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_01.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Dora Lemke
                                        <span class="uk-text-truncate">Lorem Ipsum</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="md-card">
                                <div class="md-card-head">
                                    <div class="uk-text-center">
                                        <img class="md-card-head-avatar" src="img/avatars/avatar_08.png" alt=""/>
                                    </div>
                                    <h3 class="md-card-head-text uk-text-center">
                                        Vernice Willms
                                        <span class="uk-text-truncate">Lorem Ipsum</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section section_large" id="sect-contact">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                <div class="uk-width-large-2-5">
                    <h3 class="heading_c uk-margin-large-bottom">Contact Form</h3>
                    <form action="">
                        <div class="uk-form-row">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-2">
                                    <label>First Name</label>
                                    <input type="text" class="md-input" />
                                </div>
                                <div class="uk-width-medium-1-2">
                                    <label>Last Name</label>
                                    <input type="text" class="md-input" />
                                </div>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>E-Mail Address</label>
                            <input type="text" class="md-input" />
                        </div>
                        <div class="uk-form-row">
                            <label>Message</label>
                            <textarea cols="30" rows="4" class="md-input"></textarea>
                        </div>
                        <div class="uk-form-row">
                            <button class="md-btn md-btn-success md-btn-large">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="uk-width-large-3-5">
                    <h3 class="heading_c uk-margin-large-bottom">Contact Info</h3>
                    <p class="uk-margin-large-bottom">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolorum enim repellat sit
                        veritatis? Alias assumenda cupiditate debitis dolorum, explicabo illo laboriosam nisi quibusdam
                        quod vel velit voluptas voluptate voluptatem?
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE551;</i> 123-456-789
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE0E1;</i> example@mailserver.com
                    </p>
                    <p>
                        <i class="material-icons md-24 uk-margin-small-right">&#xE0C8;</i> 9173 12th Street East
                        Ashburn, VA 20147
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_dark md-bg-blue-grey-700">
        <div class="uk-container uk-container-center">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5 uk-text-center-medium">
                    Copyright &copy; 2016 Altair (tzd), All rights reserved.
                </div>
                <div class="uk-width-medium-2-5">
                    <div class="uk-align-medium-right uk-text-center-medium">
                        <a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Facebook"><i class="uk-icon-facebook uk-icon-small md-color-white"></i></a><!--
                        --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="Twitter"><i class="uk-icon-twitter uk-icon-small md-color-white"></i></a><!--
                    --><a href="#" class="uk-margin-medium-right" data-uk-tooltip="{offset: 12}" title="LinkedIn"><i class="uk-icon-linkedin uk-icon-small md-color-white"></i></a><!--
                --><a href="#" data-uk-tooltip="{offset: 12}" title="Google Plus"><i class="uk-icon-google-plus uk-icon-small md-color-white"></i></a>
            </div>
        </div>
    </div>
</div>
</section>
<div class="uk-modal {{ count($errors) > 0 ? 'uk-open' : '' }}" id="login_modal">
    <div class="uk-modal-dialog login-modal">
        <button type="button" class="uk-modal-close uk-close"></button>
        @include('shared.login_form')
        <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_b uk-text-success">Can't log in?</h2>
            <p>Here’s the info to get you back in to your account as quickly as possible.</p>
            <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
            <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
        </div>
        <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
            <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
            <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
            <form>
                <div class="uk-form-row">
                    <label for="login_email_reset">Your email address</label>
                    <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                </div>
                <div class="uk-margin-medium-top">
                    <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
