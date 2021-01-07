@extends('otherspages.layouts.master')
@section('content')


    <!-- HEADER --> 
<div id="home" class="header-banner">
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
        </ul>
<div class="banner-white-wave">
  <img src="{{ asset('/public/images/bannerwave.png') }}" alt="">
</div>

  <div class="container">
  @include('otherspages.partials.nav')
<div class="banner-body">
  <div class="row">
    <div class="col-sm-6">
      <div class="banner-body-left">
        <h2>Photographer!! Anytime-Anywhere.</h2>
        <p>First <strong>On Demand</strong> Photographer platform in Bangladesh.</p>
      </div>
      <div class="google-store">
        <a class="new-btn google-store-a" href=""><i class="fab fa-android"></i><span>Google Store</span></a>
      </div>
    </div>
    <div class="col-sm-6 offset-md-1 col-md-5">
     <img src="{{ asset('/public/images/mainbanner.png') }}" alt="">
    </div>
  </div>
</div>
</div>

</div>

<div class="client-counter text-center padd-60">
  <div class="container">
    
      <div class="row">
        <div class="col-md-3">
          <div class="counter_item">
            <i class="far fa-heart"></i>
            <h2 class="counter">{{ $api_response['happy_client'] }}</h2>
            <p>Happy Client</p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="counter_item">
             <i class="far fa-user"></i>
            <h2 class="counter">{{ $api_response['pro_photographer'] }}</h2>
            <p>Pro Photographer</p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="counter_item">
           <i class="fas fa-camera"></i>
            <h2 class="counter">{{ $api_response['total_photo_shoot'] }}</h2>
            <p>Total Photo-shoot</p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="counter_item">
            <i class="far fa-comment"></i>
            <h2 class="counter">{{ $api_response['good_review'] }}</h2>
            <p>Good Reviews</p>
          </div>
        </div><!-- col -->
      </div><!-- row -->
  </div><!-- container -->
</div>

<div id="features" class="book-on padd-80">
  <div class="container">
    <div class="book-slogan text-center">
      <h3 class="head-color">Reach Photographer in 30 minutes</h3>
    <p>Book your photographer on one click via photofery application and photographer will reach you within 30 minutes.</p>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <div class="book-on-left">
          <div class="book-on-left-icon book-on-icon">
           <i class="fas fa-calendar-check"></i>
          </div>
          <div class="book-on-left-text">
            <h6>Guaranteed booking </h6>
            <p>Once you search for a photographer via photofery,
You will be connected with nearby photographer.
</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-left">
          <div class="book-on-left-icon book-on-icon">
            <i class="fas fa-phone"></i>
          </div>
          <div class="book-on-left-text">
            <h6>24 X 7 Helpline</h6>
            <p>We are always happy to help you With your queries regarding Photofery.</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-left">
          <div class="book-on-left-icon book-on-icon">
            <i class="fas fa-truck"></i>
          </div>
          <div class="book-on-left-text">
            <h6>Fasted Delivery</h6>
            <p>Your photo will be delivered within 48 hours after photo shoot.</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-left">
           <div class="book-on-left-icon book-on-icon">
           <i class="far fa-money-bill-alt"></i>
          </div>
          <div class="book-on-left-text">
            <h6>Save Your Money</h6>
            <p>Photofery provide you professional Photographer in cheap price.</p>
          </div>
         <div class="clearfix"></div>
        </div>
        <div class="book-on-left">
          <div class="book-on-left-icon book-on-icon">
            <i class="far fa-images"></i>
          </div>
          <div class="book-on-left-text">
            <h6>Aesthetic Edit</h6>
            <p>When you book a photographer using Photofery Application, Photofery will provide you a fixed number of Aesthetic edited photo basis on shooting time.
</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bookon-mid-img">
          <img src="{{ asset('/public/images/bookonmid.png')}}" alt="">
        </div>
      </div>

      <div class="col-md-4">
        <div class="book-on-right">
          <div class="book-on-right-icon book-on-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="book-on-right-text">
            <h6>Upgrade Profile</h6>
            <p>Using Photofery Application You Can do more photo-shoot on affordable Price since this will help you to upgrade Your social media profile.</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-right">
          <div class="book-on-right-icon book-on-icon">
            <i class="fas fa-sd-card"></i>
          </div>
          <div class="book-on-right-text">
            <h6>Collect Memory</h6>
            <p>Photofery will help you to collect your memory via instant booking a photographer.</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-right">
          <div class="book-on-right-icon book-on-icon">
            <i class="fas fa-user-lock"></i>
          </div>
          <div class="book-on-right-text">
            <h6>Get Security</h6>
            <p>Photofery will always provide security of your personal photos.</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-right">
          <div class="book-on-right-icon book-on-icon">
           <i class="fas fa-search-dollar"></i>
          </div>
          <div class="book-on-right-text">
            <h6>Get Offer</h6>
            <p>You will get notifications on all ongoing 
offer, so you can avail those and save money.
</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="book-on-right">
          <div class="book-on-right-icon book-on-icon">
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="book-on-right-text">
            <h6>Rate the Photographer</h6>
            <p>Using Photofery mobile application 
You can give rating to the photographer 
Base on your experience. 
</p>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="how-work-main padd-80">
  <div class="container">
    <div class="how-work-body">
      <h3 class="text-center text-capitalize head-color pb-5">How Does It Work?</h3>
          <div class="row">
            <div class="col-md-3">
              <div class="how-work-img">
                 <div class="hr-design hr-design-first text-center"><img src="{{ asset('/public/images/how-work-1.png')}}" alt=""></div>
              </div>
             <div class="how-work-history text-center padd-top-80">
               <h6>Search</h6>
               <p>Choose your location, type of photography, hour and search</p>
             </div>
            </div>

            <div class="col-md-3">
              <div class="how-work-img">
                 <div class="hr-design hr-design-sec text-center"><img src="{{ asset('/public/images/how-work-2.png')}}" alt=""></div>
              </div>
             <div class="how-work-history text-center padd-top-80">
               <h6>Photographer Found</h6>
               <p>Get matched with the perfect photographer nearby you.</p>
             </div>
            </div>

            <div class="col-md-3">
              <div class="how-work-img">
                 <div class="hr-design hr-design-third text-center"><img src="{{ asset('/public/images/how-work-3.png')}}" alt=""></div>
              </div>
             <div class="how-work-history text-center padd-top-80">
               <h6>Enjoy Shoot</h6>
               <p>Enjoy your photo shoot in the hands of an experienced professional</p>
             </div>
            </div>

            <div class="col-md-3">
              <div class="how-work-img">
                 <div class="hr-design hr-design-four text-center"><img src="{{ asset('/public/images/how-work-4.png')}}" alt=""></div>
              </div>
             <div class="how-work-history text-center padd-top-80">
               <h6>Download Edited Shoot</h6>
               <p>Download Edited Shoot from our pannel</p>
             </div>
            </div>
          </div>
    </div>
  </div>
</div>

<div id="overview" class="subscribe-body">
  <div class="container">
    <div class="subscrive-main-body">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="row">
            <div class="col-lg-7">
              <div class="subscribe-form">
              <h4>Do you want photographer right now??</h4>
              <p>Then download the photofery App.</p>
               <form class="custom-form" action="{{ route('subscribecreateprocess')}}" method="post">
                @csrf
                    <div class="form-group inline">
                      <div class="row">
                        <div class="col-8">
                          <label style="font-size: 16px;line-height: 2.7;position: absolute;color: #b0b0b0;margin-left: 10px;">+88</label>
                        <input type="text" name="subscribe_phone" class="form-control" placeholder="Enter Mobile No*" style="padding-left: 45px;height:42px;">
                      </div>
                      <div class="col-4">
                      <button type="submit" class="subscribe-btn btn"> <i style="    color: #9b1121;" class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                      </div>
                    </div>
                </form>
            </div>
            </div>
            <div class="col-lg-5 padd-left-0">
              <img src="{{ asset('/public/images/subscribe.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="store-owner text-center padd-60">
  <div class="container">
    <div class="book-slogan text-center">
      <h3 class="head-color">More for Photographers</h3>
    <p>Photographers can register and be part of photofery</p>
    </div>
      <div class="row">
        <div class="col-md-3">
          <div class="store-owner">
            <div class="store-owner-icon">
             <i class="fas fa-chalkboard-teacher"></i>
            </div>
             <h6>Free Training</h6>
             <p>Photofery arranges seminars and instructional courses for photographers</p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="store-owner">
            <div class="store-owner-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h6>Upgrade Your Skill</h6>
            <p></p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="store-owner">
            <div class="store-owner-icon">
            <i class="far fa-building"></i>
            </div>
            <h6>Borderless Workspace</h6>
            <p>Photofery detect nearby photographer using Mobile GPS. So you can get request outside your local area.</p>
          </div>
        </div><!-- col -->
        <div class="col-md-3">
          <div class="store-owner">
            <div class="store-owner-icon">
            <i class="fas fa-search-dollar"></i>
            </div>
             <h6>Earn Smart</h6>
            <p>No more free photoshoot , work as photofery Photographer and Earn smart amount.</p>
          </div>
        </div><!-- col -->
      </div><!-- row -->
  </div><!-- container -->
</div>




<div id="photographer" class="become-customer padd-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
             <div class="d-flex justify-content-center mb-4">
                <a class="btn-group how_to_install_link2 animate__animated animate__fadeInLeftBig" style="margin-left: 60px; margin-top: 20px">
                  <div class=" how_to_install_icon2 px-0 ">
                    <img src="{{ asset('/public/images/person2.png')}}" class="img-fluid" style="z-index: 10px; height:65px">
                  </div>
                  <button class="btn how_to_install2">Become a Photographers</button>
                </a>
              </div>
         <div class="become-customer-form">
              <form action="{{route('photographercreateprocess')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
                  </div>
                  <input type="text" name="phone" placeholder="01********" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                </div>



                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                </div>


                <div class="row">
                  <div class="col-md-6 col-sm-12 pr-lg-0">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock" aria-hidden="true"></i></span>
                      </div>
                      <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12 ">
                    <div class="input-group mb-3">
                      <!-- <div class="input-group-prepend">
                        <span class="input-group-text" >@</span>
                      </div> -->
                      <input type="password" name="c_password" class="form-control again_pass" placeholder="Again Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>

                </div>


                <div class="d-flex justify-content-center">
                  <a class="btn-group how_to_install_link" style="margin-right: 60px; margin-top: 20px">
                    <button class="btn how_to_install" type="submit">Sign UP</button>
                    <button class=" how_to_install_icon" type="submit">
                      <img src="https://jabo.app/assets/img/signuptik.png">
                    </button>
                  </a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="screenshot-ui padd-80">
  <div class="container">
    <div class="screen-header text-center">
      <h3 class="head-color">Screenshot UI</h3>
    </div>
    <div class="mar-minus-10">
    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 1}' class="screen-slick">
       @php $i = 1; @endphp
        @foreach ($imagesliderlists as $imageslider)
      <div>
       
        <div class="screen-slick-block">
        <img src="{{asset('public/images/slider').'/'. $imageslider->image}}" alt="">
        </div>
       
      </div>
       @php $i++; @endphp
        @endforeach
     </div> 
  </div>
  </div>
</div>

<div id="faq" class="ask-question padd-80">
  <div class="container">
    <div class="book-slogan text-center">
      <h3 class="head-color">Most Asked Quetions</h3>
    <p>Your Opinion is so much valuable to us. We are always ready to answer your question.</p>
    </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1 faq">
          <div class="row">
            <div class="panel-group col-lg-6 res-margin" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed"> What is Photofery? <i class="more-less fas fa-minus"></i></a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                  <div class="panel-body">
                    <p>Photofery connects you with amazing photographers. Photofery is an on-demand freelancer photographer marketplace, allowing customers to book photographers conveniently while helping professionals get more work.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" class="collapsed">  How to use? <i class="more-less fas fa-plus"></i></a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                  <div class="panel-body">
                    <p>Once you download the Photofery mobile Application in your phone, you can search your nearest photographer for photo-shoot. Choose your location, type of photography, hour and search your nearest photographer. </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> What are Benefits?<i class="more-less fas fa-plus"></i></a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                  <div class="panel-body">
                    <p>There are priceless moments in our life that deserve to be captured beautifully. Photofery helps you to capture this moment by providing photographer anytime, anywhere.</p>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-6">
              <div class="contact-form ask-question-contact-form">
                <h5>Have Any Questions</h5>
                
                <form id="contactForm" name="contactForm" class="custom-form" novalidate="novalidate" action="{{ route('messagecreateprocess')}}" method="post">
                 @csrf
                  <div class="controls">
                    <div class="form-group">
                      <input id="name" type="text" name="name" class="form-control required" placeholder="Enter your name *">
                    </div>
                    <div class="form-group">
                      <input id="email" type="email" name="email" class="form-control required" placeholder="Enter your email *">
                    </div>
                    <div class="form-group">
                      <textarea id="message" name="message" class="form-control required" placeholder="Message*" rows="3"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <input type="submit" class="btn deco_submit" value="Send Message">
                     <div class="form-succ" style="margin-top: 10px;color: #000; display:none">Thank You For Contact Us.</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><!-- row -->
  </div><!-- container -->
</div>
@endsection
