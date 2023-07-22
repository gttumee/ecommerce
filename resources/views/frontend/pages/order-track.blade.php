@extends('frontend.layouts.master')

@section('title','Nimo.mn || Түгээлтийн Мэдээ')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Эхлэл<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Түгээлтийн мэдээ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Та өөрийн захиалсан барааны захиалгийн дугаарыг оруулах Шалгах товч дарснаар түгээлтийн мэдээ и-мэйл хаягаар авах боломжтой.</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Захиалгын дугаар оруулах">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Шалгах</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection