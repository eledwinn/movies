moviesApp.controller('MovieListController', ['$scope', 'MoviesService',  function MovieListController($scope, MoviesService) {
    MoviesService.get().$promise.then(function(data){
        $scope.movies = data;
    }, function(){
        
    });
  }]);