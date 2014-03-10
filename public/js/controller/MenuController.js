var app = angular.module('MenuController', [])
app.controller('MenuController', function($scope, Menu, $sce, $route, $log) {
    $log.log('menuctl init');
    scope = $scope;
    $scope.status = $route;
    $scope.loading = true;
//    Menu.get().success(function(data) {
//        $scope.html = data.html;
//    });

    // Rendering Html after Response
    $scope.parseHtml = function(description) {

        return $sce.trustAsHtml(description);
    }

});






