@extends('layouts.app')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('images/bg/bg3.jpg')}}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
            <div class="row"> 
                <div class="col-md-6">
                <h2 class="text-theme-color-yellow font-36">Event Details</h2>
                <ol class="breadcrumb text-left mt-10 white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Event Details</li>
                </ol>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section>
      <div class="container pt-40 pb-40">
        <div class="row">
          <div class="col-md-8">
              <h2>Event Title Place Here</h2>
            <div class="owl-carousel-1col" data-nav="true">
              <div class="item">
                <img src="{{ asset('images/bg/bg11.jpg')}}" alt="">
              </div>
              <div class="item">
                <img src="{{ asset('images/bg/bg2.jpg')}}" alt="">
              </div>
              <div class="item">
                <img src="{{ asset('images/bg/bg12.jpg')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-60">
            <ul>
              <li>
                <h5>Topics:</h5>
                <p>Children around the world are not enrolled in school</p>
              </li>
              <li>
                <h5>Host:</h5>
                <p>Kodesolution Lmd.</p>
              </li>
              <li>
                <h5>Location:</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
              </li>
              <li>
                <h5>Start Date:</h5>
                <p>January 26, 2016</p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p>February 10, 2016</p>
              </li>
              <li>
                <h5>Website:</h5>
                <p>kodesolution.com</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-dark icon-theme-color-orange icon-sm icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-40">
          <div class="col-md-6">
            <h3 class="text-theme-color-orange mb-20">Event Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
          </div>
          <div class="col-md-6">
            <blockquote class="bg-silver-light">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-theme-color-orange mb-30">Our Teachers</h3>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
            <div class="team maxwidth400">
              <div class="thumb"><img class="img-fullwidth" src="{{ asset('images/team/team5.jpg')}}" alt=""></div>
              <div class="content border-1px p-15 bg-theme-color-green clearfix">
                <h3 class="name text-white mt-0">David Jakaria</h3>
                <p class="text-white mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                <ul class="styled-icons icon-dark icon-circled icon-theme-color-orange icon-sm pull-left flip">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-theme-color-orange btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
            <div class="team maxwidth400">
              <div class="thumb"><img class="img-fullwidth" src="{{ asset('images/team/team6.jpg')}}" alt=""></div>
              <div class="content border-1px p-15 bg-theme-color-red clearfix">
                <h3 class="name mt-0 text-white">Sakib Smith</h3>
                <p class="mb-20 text-white">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                <ul class="styled-icons icon-dark icon-circled icon-theme-color-green icon-sm pull-left flip">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-theme-color-green btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-sm-30 sm-text-center">
            <div class="team maxwidth400">
              <div class="thumb"><img class="img-fullwidth" src="{{ asset('images/team/team7.jpg')}}" alt=""></div>
              <div class="content border-1px p-15 bg-theme-color-yellow clearfix">
                <h3 class="name mt-0 text-white">Ismail Jon</h3>
                <p class="mb-20 text-white">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                <ul class="styled-icons icon-dark icon-circled icon-theme-color-sky icon-sm pull-left flip">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-theme-color-sky btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 sm-text-center">
            <div class="team maxwidth400">
              <div class="thumb"><img class="img-fullwidth" src="{{ asset('images/team/team8.jpg') }}" alt=""></div>
              <div class="content border-1px p-15 bg-theme-color-sky clearfix">
                <h3 class="name mt-0 text-white">Andre Smith</h3>
                <p class="mb-20 text-white">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                <ul class="styled-icons icon-dark icon-circled icon-theme-color-red icon-sm pull-left flip">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <a class="btn btn-theme-color-red btn-sm pull-right flip" href="page-teachers-details.html">view details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-color-sky">
      <div class="container pt-10 pb-20">
        <div class="row">
          <div class="call-to-action">
            <div class="col-md-6">
              <h3 class="mt-5 mb-5 text-white vertical-align-middle"><i class="pe-7s-mail mr-10 font-48 vertical-align-middle"></i> SUBSCRIBE TO OUR NEWSLETTER</h3>
            </div>
            <div class="col-md-6">
              <!-- Mailchimp Subscription Form Starts Here -->
              <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-call">
                  <span class="input-group-btn">
                    <button data-height="45px" class="btn bg-theme-color-red text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection