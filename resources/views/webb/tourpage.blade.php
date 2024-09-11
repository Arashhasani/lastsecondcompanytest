@extends('webb.layouts.master')

@section('content')

    <div class="single-header header-wide image-header with-wide-wrap">
        <div class="image-wrap">
            <img src="{{$activity['pic']}}" alt="" class="image-cover bg-img">
        </div>
        <div class="wrap wrap-center">
            <div class="wrap_float">
                <div class="breadcrumbs white-color">
                    <a href="index.html">Home</a> / <a href="#">Travel</a> / <span class="current">Tour Page Single</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrap with-sidebar">
        <div class="page-wrap-content">
            <div class="post-single-wrap sticky-parent">
                <div class="single-content wp-content">
                    <div class="wrap wrap-center">
                        <div class="wrap_float">
                            <div class="location location-in-title">{{$activity['location']}}</div>
                            <h1 class="page-title large-title">
                                {{$activity['name']}}
                            </h1>

                            <p>
                                {!! $activity['description'] !!}
                            </p>

                            <div class="accordion-block">
                                <div class="accordion-item">
                                    <div class="accordion-item-title flex">
                                                <span>
                                                     Arrival
                                                </span>
                                        <span class="time">
                                                    {{$activity['start_date']}}
                                                </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrap-sidebar">
            <div class="sidebar">
                <div class="sidebar-item widget_tour">
                    <h4 class="_title"> from ${{$activity['price']}}</h4>
                    <h4 class="_title"> {{$activity['available_slots']}} empty slots left</h4>
                    <div class="text">
                        Price per person excl. international flights
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="btn "  href="{{route('activity.book.page',['activity'=>$activity['id']])}}">

                            <span>Book Now This Tour</span>

                        </a>
                    @else
                        <button class="btn getModal" data-href="#modal-login">

                            <span>Login for booking this tour</span>

                        </button>
                    @endif

                    <div class="get-in-touch">
                        <p class="text">Get in touch for more information or to arrange a one-to-one consultation.</p>
                        <button class="btn transparent-btn getModal" data-href="#ask-question">
                            <span>Ask a question</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
