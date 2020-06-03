@extends('layouts.app')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('images/bg/bg3.jpg')}}">
        <div class="container pt-70 pb-20">
            <!-- Section Content -->
            <div class="section-content">
            <div class="row"> 
                <div class="col-md-6">
                <h2 class="text-theme-color-yellow font-36">Teacher Details</h2>
                <ol class="breadcrumb text-left mt-10 white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Teacher Details</li>
                </ol>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="{{ asset('images/team/team-details.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="name font-24 mt-0 mb-0">Sakib Smith</h4>
              <h5 class="mt-5 text-theme-color-red">Chemistry Teachers</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias, consectetur blanditiis eum maxime sunt accusantium ipsa doloribus reiciendis. Ea quod reprehenderit deserunt. Veritatis omnis similique tempora delectus a consequuntur, quis.  Adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias.</p>
              <ul class="styled-icons icon-dark icon-theme-color-red icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-4">
              <h4 class="line-bottom">About Me:</h4>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-theme-color-red media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="pe-7s-pen text-theme-color-blue font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Experiences:</h5>
                        <p class="text-white">Chemistry (BSc), Computer Science (BSc), English and Creative Writing (BA)</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-theme-color-sky media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-color-blue font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Address:</h5>
                        <p class="text-white">Village 856 Broadway New York</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-theme-color-green media border-bottom p-15">
                      <div class="media-left">
                        <i class="fa fa-phone text-theme-color-blue font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Contact:</h5>
                        <p class="text-white"><span>Phone:</span> +262 695 2601<br><span>Email:</span> you@yourdomain.com</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <h4 class="line-bottom">Find Location:</h4>

              <!-- Google Map HTML Codes --><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
              <div class="clearfix">
                <h4 class="line-bottom">Quick Contact:</h4>
              </div>
              <form id="contact-form" class="contact-form-transparent">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-color-red mt-5" type="submit">Send your message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>





@endsection