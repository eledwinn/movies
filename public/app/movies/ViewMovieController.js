moviesApp.controller('ViewMovieController', ['$scope', '$routeParams', 'MoviesService',  function MovieListController($scope, $routeParams, MoviesService) {
   
   
    MoviesService.getId({id : $routeParams.id }).$promise.then(function(movie){
        $scope.movie = movie;
    }, function(e){
        console.log(e.data.errors)
        if (e.status === 422) $scope.errors = e.data.errors;
        else $scope.errors = ["Error, por favor intente de nuevo"];
    }); 

    $scope.submit = function () {


        console.log($scope.image);
        return;

        $scope.errors = undefined;
        MoviesService.post($scope.movie).$promise.then(function(movie){
            alert('Se ha creado correctamente');
            $location.path('/')
        }, function(e){
            console.log(e.data.errors)
            if (e.status === 422) $scope.errors = e.data.errors;
            else $scope.errors = ["Error, por favor intente de nuevo"];
        }); 
    }
}]);