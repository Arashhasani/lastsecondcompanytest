@extends('webb.layouts.master')
@section('content')

    <section class="slider-section js-fix-height" id="js-slider-section">
        @foreach($slides as $slide)
            <div class="slide">
                <div class="slide__wrap">
                    <div class="slide__img">
                        <img src="{{$slide['pic']}}" alt="">
                    </div>
                    <div class="wrap">
                        <div class="wrap_float js-fix-height">
                            <div class="slide-content">
                                <div class="location">{{$slide['name']}}</div>
                                <h2 class="slide-title">{{$slide['location']}}</h2>
                                <p class="slide-description">
                                    Canoeing in Canada from ${{$slide['price']}}
                                </p>
                                <div class="buttons">
                                    <a href="#" class="btn getModal" data-href="#book-now"><span>Book Now</span></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach

    </section>
    <section class="packages-section section center-title-section js-slider-block">
        <div class="wrap">
            <div class="wrap_float">
                <h2 class="title">Most Popular Tours</h2>
                <div class="subtitle">Trips we’d love to go on right now</div>
                <div class="section-content">
                    <div class="packages-slider">

                        @foreach($activities as $activity)

                            <a href="{{route('activity.page',['activity'=>$activity['id']])}}" class="packages-item">
                                <div class="shadow js-shadow"></div>
                                <div class="bg-img" style="background-image: url({{$activity['pic']}})"></div>
                                <div class="packages-item-head">
                                    <div class="packages-cost"><span class="days"></span> from <span class="cost-val">${{$activity['price']}}</span> / pp</div>
                                    <div class="favorites-tag added js-add-to-fav">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                                <div class="packages-item-foot">
                                    <h3 class="packages-title">{{$activity['name']}}</h3>
                                    <div class="location">{{$activity['location']}}</div>
                                </div>
                            </a>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
