<html>
<head>



</head>
<body>
@extends('layouts.master')

@section('title')
    Books
@endsection

@section('content')
    @if(count($errors)>0)
        <div class = "row">
            <div class = "col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-6">

            <form action="booksName" method="post">
                <div class="form-group">

                    <label for="bookName">Name of book</label>
                    <input class="form-control" type="text" name="bookName" id="bookName">

                    <input type="hidden" value="{{Session::token()}}" name="_token">

                    </br>

                    <input class=" btn btn-primary btn-md" type="submit" value="Find book">
                </div>
            </form>

        </div>
    </div>
@endsection


</body>
</html>