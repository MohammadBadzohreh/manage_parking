<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وب آموز | آموزش برنامه‌ نویسی و طراحی وب</title>
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/font/font.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}" media="(max-width:991px)">
</head>
<body>
<header class="t-header">
    <div class="container">
        <div class="t-header-row">
            <div class="t-header-right">
                <div class="t-header-logo"><a href="index.html"></a></div>
                <div class="t-header-search">
                    <div class="t-header-searchbox">
                        <input type="text" placeholder="جستجو دوره / مقاله / مدرس">
                    </div>
                </div>
            </div>
            <div class="t-header-left">
                <div class="icons">
                    <div class="search-icon"></div>
                    <div class="menu-icon"></div>

                </div>

                @auth()

                    <div class="user-menu-account">
                        <div class="user-image">
                            <img src="{{ auth()->user()->banner }}" alt="{{ auth()->user()->name }}">
                        </div>
                        <span>پروفایل کاربری من </span>
                        <div class="user-menu-account-dropdown">
                            <ul>
                                <li><a href="{{ route("dashboard") }}">داشبورد</a></li>
                                <li><a href="{{ route("logout") }}">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                @endauth
                @guest()
                    <div class="login-register-btn">
                        <div><a class="btn-login" href="{{ route("login") }}">ورود</a></div>
                        <div><a class="btn-register" href="{{ route("register") }}">ثبت نام</a></div>
                    </div>
                @endguest

            </div>
        </div>
    </div>
    <nav id="navigation" class="navigation">
        <div class="login-register-btn d-none">
            <div><a class="btn-login" href="{{ route("login") }}">ورود</a></div>
            <div><a class="btn-register" href="{{ route("register") }}">ثبت نام</a></div>
        </div>
        <div class="container">
            <ul>
                <div class="dark-light">
                    <svg class="moon" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                    <svg class="sun" fill="#ffce45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M277.3 32h-42.7v64h42.7V32zm129.1 43.7L368 114.1l29.9 29.9 38.4-38.4-29.9-29.9zm-300.8 0l-29.9 29.9 38.4 38.4 29.9-29.9-38.4-38.4zM256 128c-70.4 0-128 57.6-128 128s57.6 128 128 128 128-57.6 128-128-57.6-128-128-128zm224 106.7h-64v42.7h64v-42.7zm-384 0H32v42.7h64v-42.7zM397.9 368L368 397.9l38.4 38.4 29.9-29.9-38.4-38.4zm-283.8 0l-38.4 38.4 29.9 29.9 38.4-38.4-29.9-29.9zm163.2 48h-42.7v64h42.7v-64z"></path>
                    </svg>
                </div>

            </ul>
        </div>
    </nav>
</header>

<main id="single">
    <div class="content">

        <div class="container">
            <article class="article">
                <div class="ads mb-10">
                    <a href="" rel="nofollow noopener"><img src="img/ads/1440px/test.jpg" alt=""></a>
                </div>
                <div class="h-t">
                    <h1 class="title">پارکینگ_{{ $parking->title }}</h1>
                </div>
            </article>
        </div>


        <div class="main-row container">
            <div class="sidebar-right">
                <div class="sidebar-sticky">
                    <div class="product-info-box">
                        <div class="sell_course">
                            <strong>قیمت :</strong>
                            <p class="price">
                        <span class="woocommerce-Price-amount amount">{{ number_format($parking->price) }}
                            <span class="woocommerce-Price-currencySymbol">تومان</span>
                        </span>
                            </p>
                        </div>
                        <button class="btn buy" onclick="handleBuyParking({{ $parking->id }})">رزرو پارکینگ</button>
                    </div>
                    <div class="product-info-box">
                        <div class="product-meta-info-list">
                            <div class="total_sales">
                                رزرو شده ها : <span>{{ $parking->uses }}</span>
                            </div>
                            <div class="meta-info-unit four">
                                <span class="title">صاحب پارکینگ : </span>
                                <span class="vlaue">{{ $parking->user->name }}</span>
                            </div>
                            <div class="meta-info-unit five">
                                <span class="title">وضعیت پارکینگ : </span>
                                <span class="vlaue">@lang($parking->status)</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-teacher-details">
                        <div class="top-part">
                            <a href="#">
                                <img alt="{{ $parking->user->name }}"
                                     class="img-fluid lazyloaded"
                                     src="{{ $parking->user->banner }}"
                                     loading="lazy">
                                <span>{{ $parking->user->name }}</span>
                                <noscript>
                                    <img class="img-fluid" src="img/profile.jpg" alt="محمد نیکو"></noscript>
                            </a>
                        </div>
                    </div>
                    <div class="short-link">
                        <div class="">
                            <span>آدرس:</span>
                            <p>{{ $parking->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-left">
                <a href="#" class="episode-download">{{ $parking->title }}</a>
                <div class="course-description">

                    <div class="course-description-title">توضیحات پارکینگ
                    </div>
                    <p>
                        {!! $parking->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer style="margin-top: 20px">
    <a class="scrollToTop"></a>
    <div class="container">
        <div class="f-links">
            <div class="col--2"><a href="">مدیریت پارکینگ</a></div>
            <div class="col--2"><a href="">لینک اول</a></div>
            <div class="col--2"><a href="">لینک دوم</a></div>
            <div class="col--2"><a href="">لینک سوم</a></div>
            <div class="col--2"><a href="">لینک چهارم</a></div>
            <div class="col--2"><a href="">لینک پنجم</a></div>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="f-about">
            <div class="col--8">
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
        </div>
    </div>
</footer>

<form id="buy_parking" action="{{ route('parking.buy',$parking->id) }}" method="post">
    @csrf
</form>
<div class="overlay"></div>
<script src="{{ asset('/front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/front/js/js.js') }}"></script>
<script src="{{ asset('/front/js/modal.js') }}"></script>
<script>
    function handleBuyParking(){
        $("#buy_parking").submit();
    }
</script>

</body>
