<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="scss/index.css">

    <title>Hello, world!</title>
  </head>
  <body style="overflow-x: hidden;">
    <div id="content">

      <header class="py-5">
        <div class="container">
          <div class="desktop">
            <div class="d-flex align-items-center justify-content-between mb-5">
              <div class="d-flex align-items-center">
                <img class="mr-5" src="images/logo.png" alt="">
                <img src="images/category-point.png" alt="">
              </div>
              <div class="d-flex">
                <button class="btn-login mr-3">Masuk</button>
                <button class="btn-regis">Daftar</button>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="" class="text-regular text-secondary mx-3">Vendor disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa yang paling dicari</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa terbaik</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa top bulan ini</a>
            </div>
          </div>
          <div class="mobile">
            <div class="d-flex align-items-center justify-content-between mb-5">
              <div class="d-flex align-items-center">
                <img class="mr-5 logo-header" src="images/logo.png" alt="">
              </div>
              <div class="d-flex align-items-center">
                <img src="images/category-point.png" alt="">
                <i class="fas fa-bars ml-4 pointer" onclick="openSidemenu()" style="font-size: 20px;"></i>
              </div>
            </div>
          </div>
          <div id="menuside-nonlogin" class="d-flex flex-column align-items-center">
            <i class="fas fa-times" onclick="closeSidemenu()" style="position: absolute; right: 5%; top: 10%; font-size: 20px; cursor: pointer;"></i>
            <img src="images/logo.png" alt="">
            <div class="d-flex mt-3 mb-5">
              <button class="btn-login mr-3">Masuk</button>
              <button class="btn-regis">Daftar</button>
            </div>
            <div class="d-flex flex-wrap justify-content-start justify-content-sm-center">
              <a href="" class="text-regular text-secondary mx-1 my-2">Vendor disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-1 my-2">Jasa disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-1 my-2">Jasa yang paling dicari</a>
              <a href="" class="text-regular text-secondary mx-1 my-2">Jasa terbaik</a>
              <a href="" class="text-regular text-secondary mx-1 my-2">Jasa top bulan ini</a>
            </div>
          </div>
        </div>
      </header>
  
      <!-- Login -->
      <!-- <header class="py-5 login">
        <div class="container">
          <div class="desktop">
            <div class="d-flex align-items-center justify-content-between mb-5">
              <div class="d-flex align-items-center">
                <img class="mr-5" src="images/logo.png" alt="">
                <img src="images/category-point.png" alt="">
              </div>
              <div class="d-flex align-items-center">
                <img class="mr-4" src="images/icon-chat.png" alt="">
                <img class="mr-4" src="images/icon-calendar.png" alt="">
                <img class="mr-4" src="images/icon-notif.png" alt="">
                <div class="d-flex align-items-center ml-3">
                  <div class="profile small mr-2">
                    <img src="images/ex-profile-1.jpg" alt="">
                  </div>
                  <h5 class="text-bold">Andreson H</h5>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <a href="" class="text-regular text-secondary mx-3">Vendor disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa yang paling dicari</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa terbaik</a>
              <a href="" class="text-regular text-secondary mx-3">Jasa top bulan ini</a>
            </div>
          </div>
          <div class="mobile">
            <div class="d-flex align-items-center justify-content-between mb-5">
              <div class="d-flex align-items-center">
                <img class="mr-5 logo-header" src="images/logo.png" alt="">
              </div>
              <div class="d-flex align-items-center">
                <img src="images/category-point.png" alt="">
                <i class="fas fa-bars ml-4 pointer" onclick="openSidemenu()" style="font-size: 20px;"></i>
              </div>
            </div>
          </div>
          <div id="menuside-nonlogin" class="d-flex flex-column align-items-center">
            <i class="fas fa-times" onclick="closeSidemenu()" style="position: absolute; right: 5%; top: 10%; font-size: 20px; cursor: pointer;"></i>
            <img src="images/logo.png" alt="">
            <div class="d-flex flex-column align-items-center mt-3 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="profile small mr-2">
                  <img src="images/ex-profile-1.jpg" alt="">
                </div>
                <h5 class="text-bold">Andreson H</h5>
              </div>
              <div class="d-flex align-items-center justify-content-between w-100">
                <img src="images/icon-chat.png" alt="">
                <img src="images/icon-calendar.png" alt="">
                <img src="images/icon-notif.png" alt="">
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-md-start justify-content-center">
              <a href="" class="text-regular text-secondary mx-sm-1 mx-3 my-2">Vendor disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-sm-1 mx-3 my-2">Jasa disekitarmu</a>
              <a href="" class="text-regular text-secondary mx-sm-1 mx-3 my-2">Jasa yang paling dicari</a>
              <a href="" class="text-regular text-secondary mx-sm-1 mx-3 my-2">Jasa terbaik</a>
              <a href="" class="text-regular text-secondary mx-sm-1 mx-3 my-2">Jasa top bulan ini</a>
            </div>
          </div>
        </div>
      </header> -->
      
      <div class="container">
        <h1 class="text-center color-primary text-ptserif mb-2">Gunakan jasa kami sekarang</h1>
        <h4 class="text-center font-light w-75 mx-auto mb-4">Rencanakan hari pernikahanmu dengan matang, serta gunakan jasa kami untuk membuat hari penting mu menjadi sangat spesial</h4>
        <form class="seacrh" action="">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
  
      <div class="for_slick_slider center my-5">
        <div class="items">
          <img src="images/slides-1.jpg" alt="">
        </div>
        <div class="items">
          <img src="images/slides-1.jpg" alt="">
        </div>
        <div class="items">
          <img src="images/slides-1.jpg" alt="">
        </div>
      </div>
  
      <div class="container">
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Kategori</h2>
          <h5 class="font-light mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
          <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-gedung.png" alt="">
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-katering.png" alt="">
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-rias.png" alt="">
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-photo.png" alt="">
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-dekorasi.png" alt="">
            </div>
            <div class="col-xl-2 col-md-3 col-sm-4 col-6 mb-2">
              <img src="images/kat-entertainment.png">
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Vendor disekitarmu</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link">lihat semua</a>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card">
                <img src="images/vendor-6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Jasa disekitarmu</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link">lihat semua</a>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-1.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-2.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-3.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-4.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="home-section mb-5">
        <div class="container">
          <h2 class="text-ptserif mb-2 text-white">Jasa yang paling dicari</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link text-white">lihat semua</a>
          </div>
          <div class="row multiple-items">
            <div class="col-4 mb-4">
              <div class="card">
                <img src="images/vendor-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card">
                <img src="images/vendor-2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card">
                <img src="images/vendor-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-4 mb-4">
              <div class="card">
                <img src="images/vendor-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Jasa terbaik</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link">lihat semua</a>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-1.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-2.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-3.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-4.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Jasa top bulan ini</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link">lihat semua</a>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-1.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-2.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-3.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
              <div class="card noborder">
                <img src="images/jasa-4.jpg" class="card-img-top" alt="...">
                <div class="card-body no-paddingleft">
                  <h4 class="mb-2">Wedding March Factory</h4>
                  <p class="mb-2 font-light">Tomang, Jakarta Selatan</p>
                  <div class="d-flex mb-2">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-full.png" alt="">
                    <img class="mr-2" src="images/star-light.png" alt="">
                  </div>
                  <h2 class="text-primary text-ptserif">Rp 1500.000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h2 class="text-ptserif text-center mb-4">Apa kata mereka tentang kami?</h2>
          <div class="row">
            <div class="col-md-6 col-12 mb-5">
              <div class="d-flex">
                <div class="profile big">
                  <img src="images/ex-profile-1.jpg" alt="">
                </div>
                <div class="d-flex flex-column ml-3">
                  <h4 class="testi-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo condimentum fermentum tortor ut hendrerit sodales massa. Quam sed vestibulum quam commodo vel urna. At vitae amet interdum semper eu nibh enim sit. </h4>
                  <h5 class="font-bold text-uppercase">Sofia brichet</h5>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-5">
              <div class="d-flex">
                <div class="profile big">
                  <img src="images/ex-profile-2.jpg" alt="">
                </div>
                <div class="d-flex flex-column ml-3">
                  <h4 class="testi-text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo condimentum fermentum tortor ut hendrerit sodales massa. Quam sed vestibulum quam commodo vel urna. At vitae amet interdum semper eu nibh enim sit. </h4>
                  <h5 class="font-bold text-uppercase">James thomas</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-5">
          <h2 class="text-ptserif mb-2">Gallery</h2>
          <div class="d-flex justify-content-between mb-3">
            <h5 class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h5>
            <a href="" class="h5 font-regular color-primary text-bold link">lihat semua</a>
          </div>
          <div class="row">
            <div class="col-sm-7 mb-4">
              <img src="images/gallery-1.png" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="col-sm-5 mb-4">
              <img src="images/gallery-2.png" class="img-fluid w-100 h-100" alt="">
            </div>  
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="col-sm-12 mb-4 px-0">
                <img src="images/gallery-3.png" class="img-fluid w-100 h-100" alt="">
              </div>
              <div class="col-sm-12 mb-sm-0 mb-4 px-0">
                <img src="images/gallery-4.png" class="img-fluid w-100 h-100" alt="">
              </div>
            </div>
            <div class="col-sm-6">
                <img src="images/gallery-5.png" class="img-fluid w-100 h-100" alt="">
            </div>
          </div>
        </div>
      </div>

      <a id="chat" onclick="openChat()">
        <i class="far fa-comments"></i>
      </a>
  
      <footer>
        <div class="container">
          <div class="row mb-3">
            <div class="col-12">
              <img src="images/logo-footer.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 col-6">
                  <h1 class="h5 text-white font-light mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla vitae, blandit malesuada congue vulputate. Fringilla nam elit et et.</h1>
                </div>
                <div class="col-md-12 col-6">
                  <h4 class="text-white mb-3">Follow us on</h4>
                  <i class="fab fa-instagram mr-3" style="color: #fff; font-size: 20px;"></i>
                  <i class="fab fa-facebook-f mr-3" style="color: #fff; font-size: 20px;"></i>
                  <i class="fab fa-tiktok mr-3" style="color: #fff; font-size: 20px;"></i>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-6">
              <div class="d-flex flex-column">
                <a href="#" class="h5 text-white font-light mb-3">Vendor disekitarmu</a>
                <a href="#" class="h5 text-white font-light mb-3">Jasa disekitarmu</a>
                <a href="#" class="h5 text-white font-light mb-3">Jasa yang paling dicari</a>
                <a href="#" class="h5 text-white font-light mb-3">Jasa terbaik</a>
                <a href="#" class="h5 text-white font-light mb-3">Jasa top bulan ini</a>
              </div>
            </div>
            <div class="col-md-4 col-6 d-flex flex-column">
              <a href="#" class="h5 text-white font-light mb-3">Tentang Alapesta</a>
              <a href="#" class="h5 text-white font-light mb-3">Kebijakan Privasi</a>
              <a href="#" class="h5 text-white font-light mb-4">Jadi Mitra Kami</a>
              <a href="#" class="mb-4">
                <img src="images/icon-gplay.png" alt="">
              </a>
              <a href="#" class="mb-3">
                <img src="images/icon-appstore.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </footer>
      <section class="text-center text-white py-3" style="background-color: #3A3A3A;">
        <h5>All Right Reserved . Alapesta Since 2020</h5>
      </section>
      
    </div>

    

    <!-- Modal Chat -->
    <div id="room-chat" class="row pl-3" style="height: 100vh;">
      <div class="col-3 pt-2">
        <div class="user-list">
          <div class="d-flex align-items-center mb-2 pointer" onclick="back()">
            <i class="fas fa-arrow-left mr-3" style="font-size: 20px;"></i>
            <h1 class="h4">Back</h1>
          </div>
          <form class="">
            <div class="form-group" style="position: relative;">
              <i class="fas fa-search" style="position: absolute; top: 35%;left: 5%;"></i>
              <input type="text" class="form-control w-100" style="padding-left: 16%;" placeholder="Cari atau mulai chat baru">
            </div>
          </form>
  
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link-chat active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <div class="list-chat">
                <img src="images/ex-profile-1.jpg" alt="">
                <div class="ml-3">
                  <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                  <p class="text-regular text-secondary">Hai Alapesta</p>
                </div>
              </div>
              <hr class="mt-2 mr-0" style="width: 80%;">
            </a>
            <a class="nav-link-chat" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <div class="list-chat">
                <img src="images/ex-profile-1.jpg" alt="">
                <div class="ml-3">
                  <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                  <p class="text-regular text-secondary">Hai Alapesta</p>
                </div>
              </div>
              <hr class="mt-2 mr-0" style="width: 80%;">
            </a>
            <a class="nav-link-chat" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
              <div class="list-chat">
                <img src="images/ex-profile-1.jpg" alt="">
                <div class="ml-3">
                  <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                  <p class="text-regular text-secondary">Hai Alapesta</p>
                </div>
              </div>
              <hr class="mt-2 mr-0" style="width: 80%;">
            </a>
            <a class="nav-link-chat" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
              <div class="list-chat">
                <img src="images/ex-profile-1.jpg" alt="">
                <div class="ml-3">
                  <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                  <p class="text-regular text-secondary">Hai Alapesta</p>
                </div>
              </div>
              <hr class="mt-2 mr-0" style="width: 80%;">
            </a>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <section id="msger">
              <header class="msger-header">
                <div class="d-flex align-items-center">
                  <img width="40px" src="images/ex-profile-1.jpg" alt="">
                  <div class="ml-3">
                    <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                    <p class="text-regular text-secondary">Hai Alapesta</p>
                  </div>
                </div>
              </header>
            
              <main class="msger-chat">
                <div class="msg left-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(images/ex-profile-1.jpg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Agung Saputra</div>
                      <div class="msg-info-time">12:45</div>
                    </div>
            
                    <div class="msg-text">
                      Hi, welcome to Alapesta 😄
                    </div>
                  </div>
                </div>
            
                <div class="msg right-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Sajad</div>
                      <div class="msg-info-time">12:46</div>
                    </div>
            
                    <div class="msg-text text-dark">
                      You can change your name in JS section!
                    </div>
                  </div>
                </div>
              </main>
            
              <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message...">
                <button type="submit" class="msger-send-btn">Send</button>
              </form>
            </section>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <section id="msger">
              <header class="msger-header">
                <div class="d-flex align-items-center">
                  <img width="40px" src="images/ex-profile-1.jpg" alt="">
                  <div class="ml-3">
                    <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                    <p class="text-regular text-secondary">Hai Alapesta</p>
                  </div>
                </div>
              </header>
            
              <main class="msger-chat">
                <div class="msg left-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(images/ex-profile-1.jpg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Agung Saputra</div>
                      <div class="msg-info-time">12:45</div>
                    </div>
            
                    <div class="msg-text">
                      Hi, welcome to Alapesta 😄
                    </div>
                  </div>
                </div>
            
                <div class="msg right-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Sajad</div>
                      <div class="msg-info-time">12:46</div>
                    </div>
            
                    <div class="msg-text text-dark">
                      You can change your name in JS section!
                    </div>
                  </div>
                </div>
              </main>
            
              <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message...">
                <button type="submit" class="msger-send-btn">Send</button>
              </form>
            </section>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <section id="msger">
              <header class="msger-header">
                <div class="d-flex align-items-center">
                  <img width="40px" src="images/ex-profile-1.jpg" alt="">
                  <div class="ml-3">
                    <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                    <p class="text-regular text-secondary">Hai Alapesta</p>
                  </div>
                </div>
              </header>
            
              <main class="msger-chat">
                <div class="msg left-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(images/ex-profile-1.jpg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Agung Saputra</div>
                      <div class="msg-info-time">12:45</div>
                    </div>
            
                    <div class="msg-text">
                      Hi, welcome to Alapesta 😄
                    </div>
                  </div>
                </div>
            
                <div class="msg right-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Sajad</div>
                      <div class="msg-info-time">12:46</div>
                    </div>
            
                    <div class="msg-text text-dark">
                      You can change your name in JS section!
                    </div>
                  </div>
                </div>
              </main>
            
              <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message...">
                <button type="submit" class="msger-send-btn">Send</button>
              </form>
            </section>
          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <section id="msger">
              <header class="msger-header">
                <div class="d-flex align-items-center">
                  <img width="40px" src="images/ex-profile-1.jpg" alt="">
                  <div class="ml-3">
                    <h1 class="h5 text-semibold text-dark">Agung Saputra</h1>
                    <p class="text-regular text-secondary">Hai Alapesta</p>
                  </div>
                </div>
              </header>
            
              <main class="msger-chat">
                <div class="msg left-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(images/ex-profile-1.jpg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Agung Saputra</div>
                      <div class="msg-info-time">12:45</div>
                    </div>
            
                    <div class="msg-text">
                      Hi, welcome to Alapesta 😄
                    </div>
                  </div>
                </div>
            
                <div class="msg right-msg">
                  <div
                   class="msg-img"
                   style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
                  ></div>
            
                  <div class="msg-bubble">
                    <div class="msg-info">
                      <div class="msg-info-name">Sajad</div>
                      <div class="msg-info-time">12:46</div>
                    </div>
            
                    <div class="msg-text text-dark">
                      You can change your name in JS section!
                    </div>
                  </div>
                </div>
              </main>
            
              <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message...">
                <button type="submit" class="msger-send-btn">Send</button>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>