@extends('layouts.app')

@section('content')

<section class="banner">

    <div class="banner-container">
        <p class="banner-img">
    <img src="{{ asset('images/bannerhome.png') }}" alt="">
    </p>
        <div class="banner-title">
            <p class="banner-title-content">Learn Anytime, Anywhere</p>
            <p class="banner-title-content banner-title-content-b">
                at HapoLearn<img src="{{ asset('images/banner.png') }}" alt="">!  
            </p>
        </div>
        <div class="banner-conlit">
            <p>
                Interactive lessons, "on-the-go" <br>
                practice, peer support.
            </p>
        </div>
        <a href="#" class="button-1">Start Learning Now!</a>
    </div>
    <div class="banner-bottom">
        
    </div>
    <div class="overlay">
           
    </div>
</section>

<div class="main">
    <div class="main-content">
       <div class="list-items">
          <div class="items">
             <div class="img-items img-items1">
                <img src="{{ asset('images/js.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">HTML/CSS/js turtorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items2">
                <img src="{{ asset('images/laravel.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">Laravel tutorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items1">
                <img src="{{ asset('images/php.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">PHP turtorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
       </div>
    </div>
    <div class="main-content">
       <p class="big-tittle"> Other courses</p>
       <div class="line-border"></div>
       <div class="list-items no-tranfer mt-45">
          <div class="items">
             <div class="img-items img-items3">
                <img src="{{ asset('images/CSS.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">HTML/CSS/js turtorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items2">
                <img src="{{ asset('images/Group.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">Laravel tutorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items4">
                <img src="{{ asset('images/java 1.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">PHP turtorial</p>
                <p class="content">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
       </div>
       <div class="view-more-title">
          <a href="">View All Our Courses <i class="fa-solid fa-arrow-right"></i></a>
       </div>
    </div>
 </div>




 <section class="background-why ">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-7">
                <h4 class="why-tablet">Why HapoLearn?</h4>
            </div>
        </div>
        <div class="row  ">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-7 offset-lg-1 offset-md-0 why-content ">
                    <div class="row row-title">
                        <div class="col-4">
                            <img src="{{ asset('images/laptop.png') }}" alt="why" class="device-mobile">
                        </div>
                        <div class="col-lg-12 col-md-12 col-2 align-self-center">
                            <h4 class="why-title why-pc">Why HapoLearn?</h4>
                        </div>
                    </div>

                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                    <div class="why-text">
                        <i class="fa-solid fa-circle-check"></i>
                        Interactive lessons, "on-the-go" practice, peer support.
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <img src="{{ asset('images/laptop.png') }}" alt="why" class="why-img">
                </div>
            </div>
                </div>

    </div>
</section>
@endsection
