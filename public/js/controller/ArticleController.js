var app = angular.module('ArticleController', [])

app.controller('ArticleController', function($scope, $http, Article) {
    $scope.articleData = {};
    $scope.articles = {};
    $scope.articleView = {};

    $scope.loading = true;

    // Get all Article
    Article.get()
            .success(function(data) {
                $scope.articles = data;
                $scope.loading = false;
            });

    $scope.submitArticle = function() {
        $scope.loading = true;

        Article.save($scope.articleData)
                .success(function(data) {
                    Article.get()
                            .success(function(getData) {
                                $scope.articles = getData;
                                $scope.loading = false
                            });
                })
                .error(function(data) {
                    console.log(data);
                });
    };


    $scope.deleteArticle = function(id) {
        $scope.loading = true;


        Article.destroy(id)
                .success(function(data) {


                    Article.get()
                            .success(function(getData) {
                                $scope.articles = getData;
                                $scope.loading = false;

                            });
                });
    };
    
    $scope.showArticleByID = function(id) {
        
        $scope.articles.forEach(function(value) {
            if(value.id === id) {
                $scope.articleView = value;
            }
        });
        console.log($scope.articleView);
        
    }
});




        