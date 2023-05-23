@extends('layouts.app')
@section('content')
<main>
    <div class="banner_top">
      <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
      </div>
      <div class="container">
        <button class="btn-outline-primary p-1">CURRENT SERIES</button>
        <div class="row d-flex justify-content-center mt-3">
          <div class="col-12 d-flex flex-wrap justify-content-evenly g-2">
            <div class="my_card me-3" v-for="img in comics">
              <img :src="(img.thumb)" alt="">
              <div class="text"><span></span></div>
            </div>
          </div>
          <div class=" d-flex justify-content-center my-3">
            <button class="btn-outline-primary">LOAD MORE</button>
          </div>
        </div>
      </div>
    </div>
    <div class="banner_center">
    <div class="container">
    <nav class="nav d-flex justify-content-around">
      <a class="nav-link d-flex" href="#" v-for="item in banner">
        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital-comics" />
        <div class="align-self-center">"DIGITAL COMICS"</div>
      </a>
      <a class="nav-link d-flex" href="#" v-for="item in banner">
        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="digital-comics" />
        <div class="align-self-center">"DC MERCHANANDISE"</div>
      </a>
      <a class="nav-link d-flex" href="#" v-for="item in banner">
        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="digital-comics" />
        <div class="align-self-center">"SUBSCRIPTION"</div>
      </a>
      <a class="nav-link d-flex" href="#" v-for="item in banner">
        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="digital-comics" />
        <div class="align-self-center">"COMIC SHOP LOCATOR"</div>
      </a>
      <a class="nav-link d-flex" href="#" v-for="item in banner">
        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="digital-comics" />
        <div class="align-self-center">"DC POWER VISA"</div>
      </a>
    </nav>
  </div>
    </div>
    <div class="banner_bottom">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-4">
                <ul class="pt-4">
                  <li>
                    <a href="#">
                      <h4>
                        DC COMICS
                      </h4>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Characters
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Comics
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Movies
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      TV
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Games
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Videos
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      News
                    </a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="#">
                      <h4>
                        SHOP
                      </h4>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Shop DC
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Shop DC Collectibles
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /col-4 -->
              <div class="col-4">
                <ul class="pt-4">
                  <li>
                    <a href="#">
                      <h4>
                        DC
                      </h4>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Terms Of Use
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Privacy policy (New)
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Ad Choices
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Advertising
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Jobs
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Subscriptions
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Talent Workshops
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      CPSC Certificates
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Ratings
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Shop Help
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Contacts Us
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /col-4 -->
              <div class="col-4">
                <ul class="pt-4">
                  <li>
                    <a href="#">
                      <h4>
                        SITES
                      </h4>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      DC
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      MAD Megazine
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      DC Kids
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      DC Universe
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      DC Power Visa
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /col-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-6 -->
          <div class="logo_dc col-6">
          </div>
          <!-- /logo_dc col-6 -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /banner_bottom -->
    </main>

    @endsection
