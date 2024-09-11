



@extends('adminn.layouts.master')


@section('content')

    <div class="container">
        <div class="card">

            <div class="card-body">
                @include('errors')

                <form method="post" action="{{route('adminactivities.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">price</label>
                                <input type="number" name="price"  class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">location</label>
                                <input type="text" name="location" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">picture</label>
                                <input type="file" name="pic" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">slots</label>
                                <input type="number" name="available_slots" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label  class="form-label">start date</label>
                                <input type="datetime-local" name="start_date" class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label">description</label>
                                <textarea class="form-control"  name="description" rows="4">

                            </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>




                    </div>

                </form>

            </div>

        </div>
    </div>


@endsection

