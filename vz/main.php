<?php

class main
{
    public function jss(){
        $con = print_r('
        <!-- MDB -->
        <script
          type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js">
        </script>
        
       
        ');
        return $con;
    }
    public function head(){
        //$title=$title1;
        $connect= print_r('
         <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>vz</title>
    <link rel="stylesheet" href="css/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB icon 
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />  -->
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
       <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    
</head>
        ');
        return ($connect);
    }
    public function footer(){
        $con = print_r('
         <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
 
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
</h6>
          <p>
Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
Useful links
</h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
info@example.com
</p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="#">kr9kva&4iper</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        ');
        return $con;
    }
    //<div class="container-md">100% wide until medium breakpoint</div>
    public function header(){
        $con = print_r('
        <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-light">
    <h1 class="mb-3">Antynea</h1>
    <h4 class="mb-3">ООО АНТИНЕЯ В МИНСКЕ ОФИЦИАЛЬНЫЙ САЙТ</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
  </div>  
  <!-- Jumbotron 
  <div class="p-5 text-center bg-light">
    <h1 class="mb-3">Antynea</h1>
    <h4 class="mb-3">ООО АНТИНЕЯ В МИНСКЕ ОФИЦИАЛЬНЫЙ САЙТ</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
  </div><div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
  -->
</header>
        ');
        return $con;
    }
    public function Carousel(){
        $con = print_r('
        <!-- Carousel wrapper -->
<div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner rounded-5 shadow-4-strong">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="img/1j.jpg" class="d-block w-100"
        alt="Sunset Over the City" />
      <div class="carousel-caption d-none d-md-block">
        <h3 class="ccc ">Внимание ! Изменились номера городских телефонов !</h3>
        <p> Телефоны: 270-07-41(42,43,44,45,46)</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/2j.jpg" class="d-block w-100"
        alt="Canyon at Nigh" />
      <div class="carousel-caption d-none d-md-block">
        <h3 class="ccc ">новый поролоновый завод в белоруссии</h3>
       
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="img/3j.jpg" class="d-block w-100"
        alt="Cliff Above a Stormy Sea" />
      <div class="carousel-caption d-none d-md-block">
        <h3 class="ccc ">дублирование триплирование <br> огромный ассортимент товаров</h3>
       
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
        ');
        return $con;
    }


    public function element_H3(){
        $con = print_r('
            <div class="p-3 mb-2 bg-white text-dark">
            <h3 class="text-center">ПРОДУКЦИЯ</h3>
            </div>
                        
            
        ');
        return $con;
    }
    public function card(){
        $con = print_r('
            <div class="row">
              <div class="col-md-4">
              
                              <div class="card">
                                         <img src="img/1e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                      <div class="card-body">
                                        <h5 class="card-title">Стельки для обуви</h5>
                                       
                                      </div>
                                </div>
                </div>
              <div class="col-md-4">
                          <div class="card">
                                     <img src="img/2e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                  <div class="card-body">
                                    <h5 class="card-title">Манекены</h5>
                                   
                                  </div>
                            </div>
                </div>
              <div class="col-md-4">
                          <div class="card">
                                     <img src="img/3e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                  <div class="card-body">
                                    <h5 class="card-title">Вставка в фуражку</h5>
                                   
                                  </div>
                            </div>
                </div>
            </div>
            
            <!-- 
                ###
            -->
            <br>
             <div class="row">
              <div class="col-md-4">
              
                              <div class="card">
                                         <img src="img/4e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                      <div class="card-body">
                                        <h5 class="card-title">Игольница</h5>
                                       
                                      </div>
                                </div>
                </div>
              <div class="col-md-4">
                          <div class="card">
                                     <img src="img/5e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                  <div class="card-body">
                                    <h5 class="card-title">Услуги по дублированию</h5>
                                   
                                  </div>
                            </div>
                </div>
              <div class="col-md-4">
                          <div class="card">
                                     <img src="img/6e.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                                  <div class="card-body">
                                    <h5 class="card-title">Спинки для рюкзаков</h5>
                                    
                                  </div>
                            </div>
                </div>
            </div>
          
        ');
        return $con;
    }
    public function element_H3_OUR_PARTNERS(){ /// НАШИ ПАРТНЕРЫ
        $con = print_r('
            <div class="p-3 mb-2 bg-white text-dark">
                        <h3 class="text-center ">НАШИ ПАРТНЕРЫ</h3>
            </div>
        ');
        return $con;
    }

    public function OUR_PARTNERS(){  /// НАШИ ПАРТНЕРЫ
        $con = print_r('
            <div class="container-md">
         <!-- 
         <div class="p-3 mb-2 bg-white text-dark" style="width: 100%;  height: 40%"></div>
         -->
                       
                            <ul id="flexiselDemo3" >
                                <li><img src="images/1.jpg" /></li>
                                <li><img src="images/2.jpg" /></li>
                                <li><img src="images/3.jpg" /></li>
                                <li><img src="images/4.jpg" /></li>                                                 
                            </ul>    
                       
                              
            
            </div>
        
        ');
        return $con;
    }
    public function element_H3_OUR_ADVANTAGES(){ ///НАШИ ПРЕИМУЩЕСТВА
        $con = print_r('
            <div class="p-3 mb-2 bg-white text-dark">
                        <h3 class="text-center">НАШИ ПРЕИМУЩЕСТВА</h3>
             </div>
        ');
        return $con;
    }
    public function OUR_ADVANTAGES(){  /// НАШИ ПРЕИМУЩЕСТВА
        $con = print_r('
        <div class="container-md">
         <!-- 
         <div class="p-3 mb-2 bg-white text-dark" style="width: 100%;  height: 40%"></div>
         -->
                       
                            <ul id="flexiselDemo5" >
                                <li><img src="images/1.jpg" /></li>
                                <li><img src="images/2.jpg" /></li>
                                <li><img src="images/3.jpg" /></li>
                                <li><img src="images/4.jpg" /></li>                                                 
                            </ul>    
                       
                              
            
            </div>
        ');
        return $con;
    }
    public function element_H3_n4(){  /// МЫ В СОЦСЕТЯХ
        $con = print_r('
            <div class="p-3 mb-2 bg-white text-dark">
                        <h3 class="text-center">МЫ В СОЦСЕТЯХ</h3>
            </div>
        ');
        return $con;
    }
    public function p3(){  /// МЫ В СОЦСЕТЯХ
        $con = print_r('
         <div class="p-3 mb-2 bg-white text-dark">
         <center>
                       <a href="#" class="google"> <i class="fab fa-google-plus-square fa-4x"></i> </a>
                       <a href="#" class="facebook"> <i class="fab fa-facebook fa-4x"></i> </a>
                       <a href="#" style="padding: 10px ; "> <i class="fab fa-vk fa-4x"></i> </a>
                       <a href="#" class="twitter"> <i class="fab fa-twitter fa-4x"></i> </a>
                       <a href="#" class="instagram"> <i class="fab fa-instagram fa-4x"></i> </a>
                        </center>
    
                       
            </div>
        ');
        return $con;
    }
    public function q(){
        $con = print_r('
         
        ');
        return $con;
    }
}
