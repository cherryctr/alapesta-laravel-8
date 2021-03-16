@extends('layouts.app')
@section('content')

 <!-- INCLUDE HEADER -->
 @include('front.header.header-front')
 <!-- END INCLUDE HEADER -->
 <style>
   html, body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
    color: #222;
  }
  
  a{
    text-decoration: none;
  }
  
  p, li, a{
    font-size: 14px;
  }
  
  /* GRID */
  
  .twelve { width: 100%; }
  .eleven { width: 91.53%; }
  .ten { width: 83.06%; }
  .nine { width: 74.6%; }
  .eight { width: 66.13%; }
  .seven { width: 57.66%; }
  .six { width: 49.2%; }
  .five { width: 40.73%; }
  .four { width: 32.26%; }
  .three { width: 23.8%; }
  .two { width: 15.33%; }
  .one { width: 6.866%; }
  
  /* COLUMNS */
  
  .col {
      display: block;
      float:left;
      margin: 1% 0 1% 1.6%;
  }
  
  .col:first-of-type {
    margin-left: 0;
  }
  
  .container{
    width: 100%;
    max-width: 940px;
    margin: 0 auto;
    position: relative;
    text-align: center;
  }
  
  /* CLEARFIX */
  
  .cf:before,
  .cf:after {
      content: " ";
      display: table;
  }
  
  .cf:after {
      clear: both;
  }
  
  .cf {
      *zoom: 1;
  }
  
  /* GENERAL STYLES */
  
  .pagination{
    padding: 30px 0;
  }
  
  .pagination ul{
    margin: 0;
    padding: 0;
    list-style-type: none;
  }
  
  .pagination a{
    display: inline-block;
    padding: 10px 18px;
    color: #222;
  }
  
  /* ONE */
  
  .p1 a{
    width: 40px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    text-align: center;
  }

  .p1 a:href{
    background-color: #fff;
    border-radius: 100%;
    color: #E78A6E;
  }
  
  .p1 a.is-active{
    background-color: #E78A6E;
    border-radius: 100%;
    color: #fff;
  }
  
  /* TWO */
  
  .p2 .is-active li{
    font-weight: bold;
    border-bottom: 3px solid #2ecc71;
  }
  
  /* THREE */
  
  .p3 .is-active{
    background-color: #2ecc71;
    color: #fff;
  }
  
  /* FOUR */
  
  .p4 a{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 100%;
    padding: 0;
    text-align: center;
    position: relative;
    border: 3px solid #2ecc71;
  }
  
  .p4 .is-active:before{
    content: "";
    width: 30px;
    height: 30px;
    border-radius: 100%;
    background-color: #2ecc71;
    position: absolute;
    top: 5px;
    left: 5px;
  }
  
  /* FIVE */
  
  .p5 a{
    width: 30px;
    height: 5px;
    padding: 0;
    margin: auto 5px;
    background-color: rgba(46, 204, 113, 0.4);
  }
  
  .p5 .is-active{
    background-color: #2ecc71;
  }
  
  /* SIX */
  
  .p6 a{
    width: 30px;
    height: 30px;
    border-radius: 100%;
    padding: 0;
    margin: auto 5px;
    text-align: center;
    position: relative;
    background-color: rgba(46, 204, 113, 0.4);
  }
  
  .p6 .is-active{
    background-color: #2ecc71;
  }
  
  /* SEVEN */
  
  .p7 a{
    border: 3px solid #2ecc71;
    margin: auto 5px;
    color: #2ecc71;
    font-weight: bold;
  }
  
  .p7 .is-active{
    background-color: #2ecc71;
    color: #fff;
  }
  
  /* EIGHT */
  
  .p8 a{
    background-color: #2ecc71;
    margin: auto 5px;
    color: #fff;
    font-weight: bold;
    border: 3px solid #2ecc71;
  }
  
  .p8 .is-active{
    background-color: #fff;
    color: #2ecc71;
  }
  
  /* NINE */
  
  .p9 a{
    width: 30px;
    height: 30px;
    line-height: 30px;
    padding: 0;
    text-align: center;
    margin: auto 5px;
  }
  
  .p9 a.is-active{
    border: 3px solid #2ecc71;
    border-radius: 100%;
  }
  
  /* TEN */
  
  .p10 a{
    width: 30px;
    height: 30px;
    line-height: 30px;
    padding: 0;
    text-align: center;
    margin: auto 5px;
  }
  
  .p10 a.is-active{
    border: 3px solid #2ecc71;
  }
  
  /* ELEVEN */
  
  .p11 a{
    background-color: #2ecc71;
    margin: auto 5px;
    color: #fff;
    border: 3px solid #2ecc71;
    position: relative;
  }
  
  .p11 a:first-of-type:before{
    content: "";
    position: absolute;
    top: -3px;
    left: -25px;
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
    border-right: 22px solid #2ecc71;
  }
  
  .p11 a:last-of-type:after{
    content: "";
    position: absolute;
    top: -3px;
    right: -25px;
    border-top: 22px solid transparent;
    border-bottom: 22px solid transparent;
    border-left: 22px solid #E78A6E;
  }
  
  .p11 .is-active{
    font-weight: bold;
  }
  
  /* TWELVE */
  
  .p12 a:first-of-type, .p12 a:last-of-type, .p12 .is-active{
    background-color: #2ecc71;
    color: #fff;
    font-weight: bold;
  }
  
 </style>

<div class="container">
      <div class="title w-75 mx-auto mb-5">
        <h1 class="text-center color-primary text-ptserif mb-5">Temukan kebutuhan untuk moment pernikahan anda</h1>
        <form class="seacrh" action="">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="list">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-5">
            <div class="border-sort">
              <h4 class="text-ptserif">Kategori Vendor</h4>
              <hr>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="all">
                <label class="h5 form-check-label font-regular" for="all">
                  Semua
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="gedung">
                <label class="h5 form-check-label font-regular" for="gedung">
                  Gedung
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="katering">
                <label class="h5 form-check-label font-regular" for="katering">
                  Katering
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rias">
                <label class="h5 form-check-label font-regular" for="rias">
                  Tata Rias
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="photographer">
                <label class="h5 form-check-label font-regular" for="photographer">
                  Photographer
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="dekorasi">
                <label class="h5 form-check-label font-regular" for="dekorasi">
                  Dekorasi
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="entertainment">
                <label class="h5 form-check-label font-regular" for="entertainment">
                  Entertainment
                </label>
              </div>
            </div>
            <div class="border-sort">
              <h4 class="text-ptserif">Sortir Wilayah</h4>
              <hr>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jaksel">
                <label class="h5 form-check-label font-regular" for="jaksel">
                  Jakarta Selatan
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakbar">
                <label class="h5 form-check-label font-regular" for="jakbar">
                  Jakarta Barat
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jaktim">
                <label class="h5 form-check-label font-regular" for="jaktim">
                  Jakarta Timur
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakpus">
                <label class="h5 form-check-label font-regular" for="jakpus">
                  Jakarta Pusat
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakut">
                <label class="h5 form-check-label font-regular" for="jakut">
                  Jakarta Utara
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="bekasi">
                <label class="h5 form-check-label font-regular" for="bekasi">
                  Bekasi
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="bandung">
                <label class="h5 form-check-label font-regular" for="bandung">
                  Bandung
                </label>
              </div>
            </div>
            <div class="border-sort">
              <h4 class="text-ptserif">Sortir Rate Vendor</h4>
              <hr>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  5
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  4
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  3
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  2
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                 
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  1
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lf-9 col-md-8 col-7">
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
                
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
               
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
            
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
               
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
           
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
                   
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                  <img src="{{ asset('assets/images/jasa-1.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">Wedding March Factory</h4>
                    <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('assets/images/star-full.png') }}" alt="">
                    </div>
                    
                  </div>
                </div>
              </div>


              
            </div>
            <!-- PAGINATION -->
            <div class="pagination p1">
                <ul>
                    <a href="#"><li><</li></a>
                    <a class="is-active" href="#"><li>1</li></a>
                    <a href="#"><li>2</li></a>
                    <a href="#"><li>3</li></a>
                    <a href="#"><li>4</li></a>
                    <a href="#"><li>5</li></a>
                    <a href="#"><li>6</li></a>
                    <a href="#"><li>></li></a>
                </ul>
            </div>
            <!-- END PAGINATION -->
          </div>
        </div>
      </div>
    </div>

    @endsection