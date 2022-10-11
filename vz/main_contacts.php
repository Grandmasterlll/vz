<?php

class main_contacts
{
    public function header($index, $product, $contacts, $about_us){
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
            <a class="nav-link" aria-current="page" href="'.$index.'">ГЛАВНАЯ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.$product.'">ПРОДУКТ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.$contacts.'">КОНТАКТЫ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="'.$about_us.'">О НАС </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-light">
    <h1 class="mb-3">КОНТАКТЫ</h1>
    
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

    public function row(){
        $con = print_r('
        <div class="p-3 mb-2 bg-white text-dark">
         <div class="row">
          <div class="col-md-4">
          ТЕЛЕФОНЫ:<br>
            +375 17270 07 45 –отдел продаж <br>
            +375 29691 32 23 – А1 <br>
            +375 44580 95 30 – А1 <br>
            +7 495589 24 35 <br>
            + 375 17270 07 44 – бухгалтерия <br>
            + 375 17270 07 47 – отдел снабжения <br>
           <a href="info@antynea.com"> info@antynea.com </a> <br>
            </div>
          <div class="col-md-4">
          РАФИК РАБОТЫ: <br>
            Пн-Пт 08:30 - 17:00 <br>
            Сб-Вс Выходной <br>
            </div>
          <div class="col-md-4">
          АДРЕС: <br>
            Офис: г. Минск, ул. Промышленная, д.21, корпус 1, помещение 1 <br>
            </div>
        </div>
        </div>
        ');
        return $con;
    }
    public function map(){ // map []   <div id="yandexmap" class=""></div>
        $con = print_r('
       
         
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.548911263842!2d27.679387016194017!3d53.85088658008783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd2782c8e56c7%3A0xe58f91540e6a92d3!2z0JrQvtC80L_QsNC90LjRjyDQktC40YjQvdC10LIg0J7QntCe!5e0!3m2!1sru!2sby!4v1665495679905!5m2!1sru!2sby"
          width=100% height=100% style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
        ');
        return $con;
    }
    public function q2(){
        $con = print_r('
         
        ');
        return $con;
    }
}

