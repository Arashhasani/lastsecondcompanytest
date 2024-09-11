



@extends('adminn.layouts.master')


@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success btn-sm" href="{{route('adminactivities.create')}}">create</a>

            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($activities as $activitie)
                        <form method="post" id="deleteform{{$activitie['id']}}" action="{{route('adminactivities.destroy',['activity'=>$activitie['id']])}}">
                            @csrf
                            @method('delete')
                        </form>

                        <tr>
                            <th scope="row">#</th>
                            <td>{{$activitie['name']}}</td>
                            <td>{{$activitie['price']}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm">edit</a>
                                <a class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('deleteform{{$activitie['id']}}').submit()">delete</a>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {{$activities->render()}}
            </div>
        </div>
    </div>


@endsection

