
<?php $__env->startSection("extracss"); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection("main"); ?>
<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/calc/assest/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/calc/assest/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/calc/assest/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/calc/assest/css/mdb.rtl.min.css">
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/calc/assest/css/style.css" />
    <style>
        .rtl{
    direction: rtl!important;
}
.ltr{
    direction: ltr!important;
}
body{
    height: 100vh;
    /* overflow: hidden; */
}
.calculate-input{
    background: rgba(255, 255, 255, 0.301);
    width: 100%;
    padding: 2rem;
    font-size: 1.8rem;
    border: rgb(255, 255, 255) solid 0.5px;
    border-radius: 12px;
    box-shadow: 5px 5px 3px  rgb(61, 61, 61) -2px -2px -2px;
    
  border: 1px solid;
  padding: 20px;
  box-shadow: 3px 5px;

}
.num-container button{
    font-size: 1.8rem;
}
.button{
    border-radius: 12px;
}
.on{
    background-color: rgb(255, 255, 255, 0.301);
    color: black;
}
/* .check{
    margin-left: 30%;
}
.check1{
    margin-left: 3%;
}
.check2{
    margin-left: 6%;
} */
    </style>
    <title>calculator</title>
</head>
<body class="bg-dark">
    <h1>dtdtdtdfugkh</h1>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-3 pt-4 pb-1">
                        <div class="bg-white rounded p-5">
                            <form action="#" method="post" id="form">
                                <input type="text" name="calculate" id="calculate" class="calculate-input" disabled="disabled">
                            </form>
                        </div>
                        <hr class="p-0 m-0">
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between p-3 pt-1">
                            <div class="d-flex check">
                                <button class="btn btn-primary me-3 button" id="check">check <br><i class="fas fa-angle-right"></i></button>
                                <button class="btn btn-primary me-3 button">check <br> <i class="fas fa-clock"></i></button>
                                <button class="btn btn-primary me-3 button">check <br> <i class="fas fa-clock"></i></button>
                                <button class="btn btn-primary me-3 button">check <br> <i class="fas fa-clock"></i></button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="slicer">
                <div class="row">
                    <div class="col-12 check1" id="orc">
                        <div class="num-container m-auto" id="numcontainert">
                            <div class="row">
                                
                                <div class="col-1" id="whitenum">
                                    <div class="d-flex flex-column">
                                        <button class="mt-3 btn btn-light button" id="whiteArrow"><i class="fas fa-angle-right"></i></button>
                                        <button class="mt-3 btn btn-light button" id="gt">GT</button>
                                        <button class="mt-3 btn btn-light button" id="onwhite">ON</button>
                                        <button class="mt-3 btn btn-light button" id="negPos">-/+</button>
                                    </div> 
                                </div>
                                <div class="col-5" id="numpad">
                                    <div class="row">                         
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="7">7</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="8">8</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="9">9</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="4">4</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="5">5</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="6">6</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="1">1</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="2">2</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 h-80 button" id="3">3</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="0">0</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="00">00</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="000">000</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5" id="mathnum">
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="divide"><i class="fas fa-divide"></i></button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="square"><i class="fas fa-square-root-alt"></i></button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-success w-100 button on" id="on">ON</button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="times"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="percentage"><i class="fas fa-percentage"></i></button>
                                        </div>
                                        <div class="col-4">
                                            <button class="mt-3 btn btn-light w-100 button" id="mrc">MRC</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <button class="mt-3 btn btn-light w-100 button" id="plus">+</button>
                                                    <button class="mt-3 btn btn-light w-100 button" id="dot">.</button>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex flex-column">
                                                        <button class="mt-3 btn btn-light w-100 button" id="minus">-</button>
                                                        <button class="mt-3 btn btn-light w-100 button" id="equal">=</button>
                                                    </div>   
                                                    
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex flex-column">
                                                        <button class="mt-3 btn btn-light w-100 button" id="memminus">M -</button>
                                                        <button class="mt-3 btn btn-light w-100 button" id="memplus">M +</button>
                                                    </div> 
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-none" id="eorc">
                        <div class="col-12 check2">
                            <div class="row">                         
                                <div class="col-4">
                                    <button class="mt-3 btn btn-dark w-100 button" id="oddtill">سری اعداد فرد تا</button>
                                </div>
                                <div class="col-4">
                                    <button class="mt-3 btn btn-dark w-100 button" id="eventill">سری اعداد زوج تا</button>
                                </div>
                                <div class="col-4">
                                    <button class="mt-3 btn btn-dark w-100 button" id="fib">فیبو.ناچی تا </button>
                                </div>
                                <div class="col-4">
                                    <button class="mt-3 btn btn-dark w-100 button" id="execute">اجرا </button>
                                </div>
                                
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src='"<?php echo e(url("/")); ?>/assest/js/jquery-3.6.0.min.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/all.min.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/bootstrap.min.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/swiper-bundle.min.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/mdb.min.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/script.js"'></script>
<script src='"<?php echo e(url("/")); ?>/assest/js/script.js"'></script>
</html>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("extrajs"); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.cal.calculator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kiarash\Desktop\an\resources\views/admin/cal/calculator.blade.php ENDPATH**/ ?>