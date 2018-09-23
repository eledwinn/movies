moviesApp.controller('NewMovieController', ['$scope', '$location', 'MoviesService',  function MovieListController($scope, $location, MoviesService) {
    $scope.submit = function () {
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