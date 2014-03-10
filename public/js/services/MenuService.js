var app = angular.module('MenuService', [])
app.factory('Menu', function($http) {
    
    return {
        get: function() {
           
            return $http.get( '/api/menus');
        }
    }
});


