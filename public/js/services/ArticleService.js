var app = angular.module('ArticleService', ['ArticleController'])
app.factory('Article', function($http) {
    
    return {
        get: function() {
            return $http.get('/api/articles');
        },
        save: function(articleData) {
            return $http({
                method: 'POST',
                url: '/api/articles',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param(articleData)
            });
        },
        destroy: function(id) {
            return $http.delete('/api/articles/' + id);
        }
    }

});


