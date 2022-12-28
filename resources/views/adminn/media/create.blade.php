@extends('admin.layouts.master')
@section("extracss")

@endsection
@section("main")
    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>مدیریت مدیا</strong></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('media.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="photo_name">اسم عکس</label>
                            <input type="text" name="photo_name" id="photo_name">
                            <br>
                            <label for="photo_alt">توضیح عکس</label>
                            <input type="text" name="photo_alt" id="photo_alt">
                            <br>
                            <label for="photo_alt">اسم عکس</label>
                            <input type="text" name="photo_descript" id="photo_descript">
                            <br>
                            <input type="file" name="ImgP">
                            <input type="submit" value="ثبت">
                        </form>

@endsection
@section("extrajs")



@endsection
