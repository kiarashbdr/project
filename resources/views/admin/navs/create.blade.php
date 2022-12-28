@extends('admin.layouts.master')
@section("extracss")

@endsection

@section("main")
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
        <a href="http://localhost:8000/adm" class="list-group-item list-group-item-action py-2 divv ripple bg-dark text-center" aria-current="true">
          <span class="btext">مدیریت صفحه اصلی</span><i class="fas fa-tachometer-alt fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/baners" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="ba text">مدیریت بنر</span><i class="fas fa-chart-area fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/product" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bbg text">مدیریت محصولات </span><i class="fas fa-globe fa-fw me-3 y text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/post" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bb text">مدیریت پست ها</span><i class="fas fa-lock fa-fw me-3 text-white"></i>
        </a>
          <a href="http://localhost:8000/adm/media/create" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bc text">مدیریت رسانه</span><i class="fas fa-chart-line fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/cal" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bd text">ماشین حساب</span><i class="fas fa-chart-pie fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/navs" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bf text">مدیریت منو </span><i class="fas fa-chart-bar fa-fw me-3 text-white"></i>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bh text">مدیریت صفحات</span><i class="fas fa-building fa-fw me-3 text-white"></i>
          </a>
          <a href="http://localhost:8000/adm/media/create" class="list-group-item list-group-item-action py-2 divv ripple bg-dark">
          <span class="bi text">بست ها</span><i class="fas fa-calendar fa-fw me-3 text-white"></i>
          </a>
        </div>
      </div>
    </nav>
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
          <img src="assets/img/favicon.png" height="25" alt="" loading="lazy">
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
    <!--Main layout-->
    <main dir="rtl" style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card bg-dark divv">
                    <div class="card-header py-3 bg-dark">
                        <h5 class="mb-0 text-center text-white"><strong>ایجاد منو</strong></h5>
                       
                        <hr class="text-white">
                    </div>
                    <div class="card-body w-100 text-white text-center">
                        <form action="{{url('/')}}/adm/navs" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="w-100">
                             
                              <label for="url">عنوان منو اختصاصی</label>
                              <input class="w-100 divv bg-dark text-white" type="text" name="url" id="url">
                              <br><br>
                              <label for="nav_name">اسم منو</label>
                              <input class="w-100 divv bg-dark text-white" type="text" name="nav_name" id="nav_name">
                             
                           </div>
                           <br><br>
                            <p>
                                عناصر منو
                            </p>
                            <br>
                            <label for="nav_title">عنوان عنصر منو</label>
                            <input class="w-100 divv bg-dark text-white" type="text" name="nav_title" id="nav_title">
                            <br><br>
                            <label for="nav_uri">آدرس صفحه منو</label>
                            <input class="w-100 divv bg-dark text-white" type="text" name="nav_uri" id="nav_uri">
                            <br><br><br>
                            <label for="hasChild">فرزند دارد</label>
                            <select name="hasChild" id="hasChild">
                                <option class="divv bg-dark text-white" value="1">دارد</option>
                                <option class="divv bg-dark text-white" value="0">ندارد</option>
                            </select>

                            <label for="father_id">پدرش کیست</label>
                            <select name="navs" id="navs">
                                <option value="media_id">
                                    خودش والد اصلی است
                                </option>
                            </select>
                            <br><br>
                            <div>
                            <input class="divv bg-dark text-white" type="file" name="media_id">
                             <input class="bg-dark divv text-white" type="submit" value="ثبت">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection

@section("extrajs")

@endsection
