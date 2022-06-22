@extends('layouts.app')

@section('content')

<section class="banner">

    <div class="banner-container">
       
        <img src="{{ asset('images/bannerhome.png') }}" alt="">
   
        <div class="banner-title">
            <p class="banner-title-content">Learn Anytime, Anywhere</p>
            <p class="banner-title-content banner-title-content-b">
                at HapoLearn <img src="{{ asset('images/banner.png') }}" alt="">!  
            </p>
        </div>
        <div class="banner-content">
               <p>  Interactive lessons, "on-the-go" <br> practice, peer support. </p>
        </div>
            <a href="#" class="button-1">Start Learning Now!</a>
    </div>

    <div class="banner-bottom">
        
    </div>
    <div class="overlay">
           
    </div>
</section>

<section class="content container-center">
    <div class="main-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn1">
                        <img src="{{ asset('images/html-css.png') }}" class="card-img-top" alt="Học HTML, CSS và JS">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">HTML/CSS/js Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn2 ">
                        <img src="{{ asset('images/laravel.png') }}" class="card-img-top" alt="Học Laravel">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">LARAVEL Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn1">
                        <img src="{{ asset('images/php.png') }}" class="card-img-top" alt="Học PHP">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="other-content main-content">
        <p class="other-content-header">Other course</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn3">
                        <img src="{{ asset('images/CSS.png') }}" class="card-img-top" alt="Học HTML, CSS và JS">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">HTML/CSS/js Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn2">
                        <img src="{{ asset('images/Group.png') }}" class="card-img-top" alt="Học Laravel">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">LARAVEL Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-container-img img-btn4">
                        <img src="{{ asset('images/java 1.png') }}" class="card-img-top" alt="Học PHP">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">PHP Tutorial</h5>
                        <p class="card-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                        <a href="#" class="card-btn btn btn-primary">Take This Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all-content">
            <a href="#">View All Our Courses</a>
            <a href="">
            <svg width="48" height="27" viewBox="0 0 48 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M47.0926 13.0413C47.0926 12.4721 46.875 11.9196 46.4732 11.5346L35.5747 0.636161C35.173 0.234375 34.6205 0 34.0513 0C33.4821 0 32.9464 0.234375 32.5446 0.636161L31.289 1.89174C30.8872 2.27679 30.6529 2.82924 30.6529 3.39844C30.6529 3.96763 30.8872 4.52009 31.289 4.90514L36.1942 9.82701H1.95871C0.753348 9.82701 0 10.8315 0 11.9699V14.1127C0 15.2511 0.753348 16.2556 1.95871 16.2556H36.1942L31.289 21.1607C30.8872 21.5625 30.6529 22.115 30.6529 22.6842C30.6529 23.2534 30.8872 23.8058 31.289 24.2076L32.5446 25.4632C32.9464 25.8482 33.4821 26.0826 34.0513 26.0826C34.6205 26.0826 35.173 25.8482 35.5747 25.4632L46.4732 14.5647C46.875 14.1629 47.0926 13.6105 47.0926 13.0413Z" fill="#90AB26"/>
</svg>

            </a>
        </div>
    </div>
</section>
@endsection
