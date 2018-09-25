@extends('layout')

@section('resources')
<script src="https://code.angularjs.org/1.7.2/angular.min.js" type="text/javascript"></script>
<script src="https://code.angularjs.org/1.7.2/angular-route.min.js" type="text/javascript"></script>
<script src="https://code.angularjs.org/1.7.2/angular-resource.min.js" type="text/javascript"></script>

<script src="{{asset('app/app.js')}}" type="text/javascript"></script>
<script src="{{asset('app/services.js')}}" type="text/javascript"></script>
<script src="{{asset('app/movies/MovieListController.js')}}" type="text/javascript"></script>
<script src="{{asset('app/movies/NewMovieController.js')}}" type="text/javascript"></script>
<script src="{{asset('app/movies/ViewMovieController.js')}}" type="text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>

@endsection


@section('content')
    <div ng-view></div>
@endsection

