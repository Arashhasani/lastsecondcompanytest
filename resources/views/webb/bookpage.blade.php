@extends('webb.layouts.master')

@section('content')


    <div class="page-wrap contact-page">
        <div class="page-wrap-content">
            <div class="breadcrumbs">
                <div class="wrap wrap-center">
                    <div class="wrap_float">
                        <a href="index.html">Home</a> / <a href="#">Features</a> / <span class="current">Contact Form</span>
                    </div>
                </div>
            </div>
            <div class="single-header">
                <div class="wrap wrap-center">
                    <div class="wrap_float">
                        <h1 class="page-title">
                            Booking Form
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-section contact-section">
        <div class="wrap">
            <div class="wrap_float">
                <div class="wrap wrap-center">
                    <h2 class="title">
                        Fallout this booking form
                    </h2>
                    <div class="form">
                        @include('errors')
                        <form method="post" action="{{route('activity.book.page',['activity'=>$activity['id']])}}">
                            @csrf
                            <div class="form-fields">
                                <div class="input-wrap " style="margin-top: 10px">
                                    <input type="text" disabled class="input" placeholder="{{$activity['name']}}">
                                </div>
                                <div class="input-wrap " style="margin-top: 10px">
                                    <input type="text" disabled class="input" placeholder="{{$activity['start_date']}}">

                                </div>
                                <div class="input-wrap " style="margin-top: 10px">
                                    <input type="text" disabled class="input" placeholder="{{auth()->user()->name}}">

                                </div>
                                <div class="input-wrap " style="margin-top: 10px">
                                    <input type="text" disabled class="input" placeholder="{{auth()->user()->email}}">

                                </div>

                                <div class="input-wrap" style="margin-top: 10px">

                                    <input type="number" name="slots"  class="input" placeholder="slots out of {{$activity['available_slots']}}">

                                </div>
                                <div class="input-wrap textarea-wrap comment-field">
                                    <button class="btn submit submit-btn" type="submit">
                                        <span>Book activity</span>
                                    </button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
