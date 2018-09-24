moviesApp.controller('MovieListController', ['$scope', 'MoviesService',  function MovieListController($scope, MoviesService) {
    MoviesService.get().$promise.then(function(data){

        data.forEach(element => {
            if (element.url) {
                element.urls = element.url.split('|').filter(e => e.length > 0);
                element.firstUrl = element.urls.find(u => true);
            }
        });

        $scope.movies = data;
    }, function(){

    });
}]);