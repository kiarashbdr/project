<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{url('/')}}/admin/css/mdb.rtl.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('/')}}/admin/css/admin.css" />
    <link rel="stylesheet" href="{{url('/')}}/admin/style.css">
    <!-- <link rel="stylesheet" href="{{url('/')}}/admin/style.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header class="rtl">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="http://localhost:8000/adm" class="list-group-item list-group-item-action py-2 ripple divv bg-dark text-center" aria-current="true">
           <span class="text">مدیریت صفحه اصلی</span><i class="fas fa-tachometer-alt fa-fw me-3 text-white text-center"></i> 
          </a>
          <a href="http://localhost:8000/adm/baners" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="a text-center text-white">مدیریت بنر</span><i class="fas fa-chart-area fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/product" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="g text">مدیریت محصولات </span><i class="fas fa-globe fa-fw me-3 y text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/post" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="b text-center text-white">مدیریت پست</span><i class="fas fa-lock fa-fw me-3 text-white text-center"></i>
        </a>
          <a href="http://localhost:8000/adm/media/create" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="c text">مدیریت رسانه</span><i class="fas fa-chart-line fa-fw me-3 text-white text-center"></i>
          </a>
          <a href="http://localhost:8000/adm/cal" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="d text">ماشین حساب</span><i class="fas fa-chart-pie fa-fw me-3 text-white text-center"></i>
          </a>
          <a href="http://localhost:8000/adm/navs" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="f text">مدیریت منو </span><i class="fas fa-chart-bar fa-fw me-3 text-white text-center"></i>
          </a>
          <a href="http://localhost:8000/adm" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="i text">بست ها</span><i class="fas fa-calendar fa-fw me-3 text-white text-center"></i>
          </a>
          
<!-- Split dropleft button -->
<div class="btn-group divv">
  <div class="btn-group dropstart" role="group">
    <button
      type="button"
      class="btn btn-dark dropdown-toggle dropdown-toggle-split"
      data-mdb-toggle="dropdown"
      aria-expanded="false"
    >
      <span class="visually-hidden">تنظیمات</span>
    </button>
    <ul class="dropdown-menu divv ">
      <li><a class="dropdown-item" href="#">ابزار ها</a></li>
      <li><a class="dropdown-item" href="#">حریم خصوصی</a></li>
      <li><a class="dropdown-item" href="#">رسانه</a></li>
      <hr class="text-white">
      <li><a class="dropdown-item" href="#">کاربر</a></li>
    </ul>
  </div>
  <button type="button" class="btn btn-dark">تنظیمات</button>
</div>

          <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark">
          <span class="i">Users</span><i class="fas fa-users fa-fw me-3 text-white"></i>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark">
          <span class="i">Sales</span><i class="fas fa-money-bill fa-fw me-3 text-dark"></i>
          </a> -->
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars text-white"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="assets/img/favicon.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto marginl">
          <input autocomplete="off" type="search" class="form-control rounded bg-dark divv"
            placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search text-white"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown text-white">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell text-white"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bg-white" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip text-white"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github text-white"></i>
            </a>
          </li>

          <!-- Icon dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button"
              data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end bgg" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item text" href="#"><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i></a>
              </li>
              <hr class="text-white">
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item text" href="#"><i class="france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item text" href="#"><i class="spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item text" href="#"><i class="russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item text" href="#"><i class="portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card bg-dark divv">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center text-light"><strong>مدیریت صفحه اصلی</strong></h5>
            
            <!-- <form action="{{url('/')}}/adm/baners" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select name="banner" id="baner">
                                <option value="media_id"></option>
                            </select>
                            <p class="text-light"> عکس جدید برای بنر</p>
                            <div class="text-center">
                             <input class="text-center" type="file" name="topAdBanner">
                             <input class="text-center" type="submit" value="ثبت">
                            </div>
                        </form> -->
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </section>
      <!-- Section: Main chart -->

      <!--Section: Sales Performance KPIs-->
      
     
    </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="{{url('/')}}/admin/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="{{url('/')}}/admin/js/admin.js"></script>

</body>

</html>
