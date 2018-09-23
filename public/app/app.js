// Define the `phonecatApp` module
var moviesApp = angular.module('moviesApp', ['ngRoute', 'ngResource']);


moviesApp.config(['$locationProvider', '$routeProvider', function config($locationProvider, $routeProvider) {
    $locationProvider.hashPrefix('!');

    $routeProvider.
    when('/home', {
        templateUrl: 'app/movies/list.html',
        controller: 'MovieListController'
    }).
    when('/movies/new', {
        templateUrl: 'app/movies/new.html',
        controller: 'NewMovieController'
    }).
    when('/movies/:id', {
        templateUrl: 'app/movies/view.html',
        controller: 'ViewMovieController'
    }).
    otherwise('/home');
}
]);