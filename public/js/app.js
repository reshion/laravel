var myApp = angular.module('myApp',
        [
            'CompileDirective',
            'MenuService',
            'MenuController',
            'ArticleController',
            'AboutController',
            'ArticleService',
            'ngRoute',
            'HomeController'
        ], function($interpolateProvider) {

    // replace curly brackets for round brackets. because there
    // was a conflict between angular and laravel
    $interpolateProvider.startSymbol('((');
    $interpolateProvider.endSymbol('))');
   
});
myApp.run(function($compile, $log) {
    log = $log;
    log.log('app init');
});

myApp.config(function($routeProvider, $locationProvider) {
    
//    route = $routeProvider;
    // route for the home page
    $routeProvider
    
            // route for the home page
            .when('/home', {
                templateUrl: 'ngtemplate/home.html',
                controller: 'HomeController',
                activeTab: 'home'
            })
            
            // route for the about page
            .when('/about', {
                templateUrl: 'ngtemplate/about.html',
                controller: 'AboutController',
                activeTab: 'about'
                
            })

            // route for the article page
            .when('/article', {
                templateUrl: 'ngtemplate/article.html',
                controller: 'ArticleController',
                activeTab: 'article'
            })
            .when('/project', {
                templateUrl: 'ngtemplate/project.html',
                controller: 'ProjectController',
                activeTab: 'project'
            })
            .otherwise({
                redirectTo: '/'
            });
    // Kill hash in url 
    $locationProvider.html5Mode(true);
    


});

