
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/2/2017
 * Time: 5:17 PM
 */

@extends('layouts.master')

@section('content')
<div class="col-md-4 col-sm-6 col-xs-12">
    @foreach($products as $product)
	    					<div class="item-tour mg-bot15">
	    						<a href="" title="khám phá">
	    							<div>
	    								<div class="img-tour" style="position: relative;">
	    									<img src="bootstrap/images/{{$product->product_img}}" class="img-responsive">
	    									<div class="img-title">
	    										<div class="view-tour row">
	    											<div class="col-xs-12 text-left">
	    												<i class="fa fa-eye white"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-thumbs-o-up"></i>
	    												<span class="white">500</span>
	    												<i class="fa fa-comment-o white"></i>
	    												<span class="white">5</span>
	    											</div>
	    										</div>
	    										<div class="row date-tour">
	    											<div class="col-xs-6 text-left">
	    												<i class="fa fa-calendar"></i>
	    												<span>{{$product->start_date}}</span>
</div>
	    											<div class="col-xs-6 text-right">
	    												<i class="fa fa-user"></i>
	    												<span>{{$product -> slot}}</span>
	    											</div>
</div>
</div>
</div>
	    								<div class="tour-content">
	    									<div class="tour-title col-xs-12 col-sm-12 col-md-12">
	    										<div style="vertical-align: middle; display: table-cell;">{{$product->pro_name}}</div>
	    									</div>
	    									<div class="tour-info">
	    										<div class="date-tour col-xs-2">
	    											<div style="font-weight: bold; border-bottom: 1px solid #ccc; padding-bottom: 5px; font-size: 24px">8</div>
	    											<div style="padding-top: 5px; font-size: 10px;">Ngày</div>
	    										</div>
	    										<div class="price-tour col-xs-7">
	    											<span class="old-price">5,000,000 đ</span>
	    											<span class="new-price">{{$product->price}}</span>
	    										</div>
	    										<div class="btn-booking col-xs-3">
	    											<span>Đặt ngay</span>
	    										</div>
	    									</div>
	    								</div>
                </div>
             </a>
        </div>
        @endforeach
</div>


    @endsection