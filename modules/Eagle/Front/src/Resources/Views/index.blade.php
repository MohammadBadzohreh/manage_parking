<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مدیریت پارکینگ</title>
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/font/font.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/css/responsive.css') }}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{ asset('/css/iziToast.min.css') }}">
</head>
<body>
<header class="t-header">
    <div class="container">
        <div class="t-header-row">
            <div class="t-header-right">
                <div class="t-header-logo"><a href="index.html"></a></div>
                <div class="t-header-search">
                    <div class="t-header-searchbox">
                        <input type="text" placeholder="جستجو پارکینگ / مقاله / مدرس">
                        <div class="t-header-search-content">
                            <div class="t-header-search-result-filters">
                                <div class="t-header-search-filter-item f-all active"><span>همه (20)</span></div>
                                <div class="t-header-search-filter-item f-courses "><span>پارکینگ ها (13)</span></div>
                                <div class="t-header-search-filter-item f-article "><span>مقاله ها (5)</span></div>
                                <div class="t-header-search-filter-item f-teacher "><span>مدرسین (2)</span></div>
                            </div>
                            <div class="t-header-search-result">
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>laravel course</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                                <a href="">
                                    <div class="t-header-search-result-right">
                                        <p>پارکینگ ساخت فریم ورک مشابه لاراول</p>
                                        <p class="t-header-search-result-right-info">
                                            مدرس پارکینگ : محمد نیکو
                                        </p>
                                    </div>
                                    <div class="t-header-search-result-left">
                                        <img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}"
                                             alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
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
                            <img src="{{ asset('/front/img/profile.jpg') }}" alt="desction">
                        </div>
                        <span>{{ auth()->user()->name }}</span>
                        <div class="user-menu-account-dropdown">
                            <ul>
                                <li><a href="{{ route("dashboard") }}">مشاهده پروفایل</a></li>
                                <li><a href="{{ route('logout') }}">خروج</a></li>

                            </ul>

                        </div>

                    </div>
                @endauth

                @guest()
                    <div class="login-register-btn ">
                        <div><a class="btn-login" href="{{ route('login') }}">ورود</a></div>
                        <div><a class="btn-register" href="{{ route('register') }}">ثبت نام</a></div>
                    </div>
                @endguest

            </div>
        </div>
    </div>
    <nav id="navigation" class="navigation">
        <!--        بعد از لاگین توی حالت رسپانسیو-->
        <div class="after-login d-none">
            <a href="">مشاهده پروفایل</a>
            <a href="">خرید های من</a>
            <a href="">داشبورد</a>
            <a href="">خروج</a>
        </div>
        <!---->
        <div class="login-register-btn d-none">
            <div><a class="btn-login" href="login.html">ورود</a></div>
            <div><a class="btn-register" href="register.html">ثبت نام</a></div>
        </div>
        <div class="container">
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
<main id="index">
    <article class="container article">
        <div class="ads d-none">
            <a href="" rel="nofollow noopener"><img src="{{ asset('/front/img/ads/1440px/test.jpg') }}" alt=""></a>
        </div>
        <div class="top-info">
            <div class="slideshow">
                <div class="slide"><img src="{{ asset('/front/img/slideshow/p-1.jpg') }}" alt=""></div>
                <div class="slide"><img src="{{ asset('/front/img/slideshow/p-2.jpg') }}" alt=""></div>
                <div class="slide"><img src="{{ asset('/front/img/slideshow/p-3.jpg') }}" alt=""></div>
                <div class="slide"><img src="{{ asset('/front/img/slideshow/p-4.jpg') }}" alt=""></div>
                <div class="slide"><img src="{{ asset('/front/img/slideshow/p-5.jpg') }}" alt=""></div>

                <a class="prev" onclick="move(-1)"><span>&#10095</span></a>
                <a class="next" onclick="move(1)"><span>&#10094</span></a>

                <div class="items">
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                </div>
            </div>
            <div class="optionals">
                <div><img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}" alt=""></div>
                <div><img src="{{ asset('/front/img/banner/laravel-payment-processing.jpg') }}" alt=""></div>
            </div>
        </div>
        <div class="box-filter">
            <div class="b-head">
                <h2>جدید ترین پارکینگ ها</h2>
                <a href="all-courses.html">مشاهده همه</a>
            </div>
            <div class="posts">
                @foreach($parkings as $parking)
                    <div class="col">
                        <a href="{{ route("parking.detail",$parking->id)}}">
                            <div class="course-status">
                                تکمیل شده
                            </div>

                            <div class="card-img"><img src="{{ $parking->banner }}" alt="reactjs">
                            </div>
                            <div class="card-title"><h2{{ $parking->title }}</h2></div>
                            <div class="card-body">
                                <img src="{{ asset('/front/img/profile.jpg') }}" alt="محمد نیکو">
                                <span>{{ $parking->user->name }}</span>
                            </div>
                            <div class="card-details">
                                <div class="price">
                                    <div class="endPrice">{{ number_format($parking->price) }}</div>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>

    </article>
</main>
<footer>
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
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                    نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                    حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان
                    رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                    داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                    حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                    گیرد.
                </p>
            </div>
        </div>
    </div>
    <div class="webamooz">
        طراحی و توسعه با لاراول توسط تیم
        <a href="https://webamooz.net">وب آموز</a>
        © 1399
    </div>
</footer>
<div class="overlay"></div>
<script src="{{ asset('/front/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('/front/js/js.js') }}"></script>
<script src="{{ asset('/js/iziToast.min.js') }}"></script>
@include("Common::feedback")
</body>
</html>
