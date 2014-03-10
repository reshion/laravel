<!doctype html>
<html lang="en" ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <title>Der Blog von Reshion</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/default.css">
        <script src="lib/jquery/jquery-2.0.3.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/angular-1.2.6/angular.js"></script>
        <script src="lib/angular-1.2.6/angular-route.js"></script>
        <script src="js/app.js"></script>
        <script src="js/directiven/CompileDirective.js"></script>
        <script src="js/controller/MenuController.js"></script>
        <script src="js/controller/ArticleController.js"></script>
        <script src="js/services/MenuService.js"></script>
        <script src="js/controller/HomeController.js"></script>
        <script src="js/controller/AboutController.js"></script>
        <script src="js/controller/ProjectController.js"></script>
        <script src="js/services/ArticleService.js"></script>
        <script src="js/default.js"></script>
    </head>
    <body  ng-controller="MenuController" >

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-one">

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-two">

        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
       
        <div class="collapse navbar-collapse navbar-no-padding" id="bs-example-navbar-collapse-1">
            <div class=" head">

                <div class="col-lg-offset-2 col-lg-8 col-md-8 col-lg-offset-10 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="row test-menu" style="height: 60px;">
                        <div ng-class="{true: 'active col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-1', false: 'col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-1'}[status.current.activeTab == 'home']" class="col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-1">
                            <a  href="/home"><span>Home</span></a>
                        </div>
                        <div ng-class="{true: 'active col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-2', false: 'col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-2'}[status.current.activeTab == 'about']" class="col-lg-3 col-md-3 col-sm-3 col-xs-8  menu-2">
                            <a  href="/about"><span>About</span></a>
                        </div>
                        <div ng-class="{true: 'active col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-3', false: 'col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-3'}[status.current.activeTab == 'project']" class="col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-3">
                            <a  href="/project"><span>Projects</span></a>
                        </div>
                        <div ng-class="{true: 'active col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-4', false: 'col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-4'}[status.current.activeTab == 'article']" class="col-lg-3 col-md-3 col-sm-3 col-xs-8 menu-4">
                            <a  href="/article"><span>Article</span></a>
                        </div>
                    </div>
                    <div ng-show="false" dynamic="html" ng-model="html"></div>
                </div>
            </div>
        </div>
        <div class=" head head-2">
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-lg-offset-10 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                <div id="test-menu-2" class="row test-menu-2" style="height: 60px;">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  menu-1" >
                        <span>Home</span>
                    </div>
                    <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12  menu-2" >
                        <span>About</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 menu-3"  >
                        <span>Projects</span>
                    </div>
                    <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 menu-4 " >
                        <span>Article</span>
                    </div>
                </div>
                <div ng-show="false" dynamic="html" ng-model="html"></div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-8 col-lg-offset-10 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="main-content">
                        <ng-view></ng-view>
                    </div>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-default navbar-fixed-bottom footer" role="navigation">
            <div class="container">
                Reshion @ 2014
            </div>
        </nav>

    </body>
</html>
