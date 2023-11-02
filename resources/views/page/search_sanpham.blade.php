@extends('master')
@section('content')
<section class="product-shop spad">
        <div class="container">
            <div class="row">
            <h4>Search Results for "{{ $query }}"</h4>
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
@if ($pr->count() > 0)
    @foreach($pr as $pr)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                    <a href="detail/{{$pr->id}}">
                                        <img src="Template/Template/img/products/{{$pr->image}}" alt="">
                                    </a>
                                        @if($pr->sale_price!=0)
                                        <div class="sale pp-sale">Sale</div>
                                        @endif
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="#">+ Add Cart</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$pr->category}}</div>
                                        <a href="#">
                                            <h5>{{$pr->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            ₫{{$pr->price}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
        <p>No products found.</p>
    @endif
    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection