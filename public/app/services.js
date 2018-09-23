moviesApp.factory('MoviesService', ['$resource', function($resource) {
    return $resource('/api/movies/:id', {}, {
        get: { method: 'GET', isArray: true },
        getId: { method: 'GET' },
        post: { method: 'POST' }
    });
}]);