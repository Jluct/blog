<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru" ng-app="app">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="libr/js/ng.js"></script>
    <!--	<script src="https://code.angularjs.org/1.3.15/angular-route.js"></script>-->
    <script src="libr/js/angular-route.js"></script>
    <!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="libr/js/jquery-2.1.1.min.js"></script>
    <!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="libr/css/bootstrap.min.css">
    <!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
    <script src="libr/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arimo&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <title>Личный блог</title>
    <script src="app.js"></script>
    <script src="js/directives/article.js"></script>
    <script src="js/directives/comment.js"></script>
    <!--	<script src="js/directives/imageGal.js"></script>-->
    <script src="js/services/DataService.js"></script>
    <script src="js/controllers/autorController.js"></script>
    <script src="js/services/addComment.js"></script>
    <script src="js/services/searchNews.js"></script>
    <script src="js/controllers/IndexController.js"></script>
    <script src="js/controllers/MenuController.js"></script>
    <script src="js/controllers/NewsController.js"></script>
    <script src="js/controllers/ArticleController.js"></script>
    <script src="js/controllers/CommentController.js"></script>
    <script src="js/controllers/galeryController.js"></script>
    <script src="js/controllers/adminController.js"></script>

    <script src="js/controllers/WrapperController.js"></script>

    <link rel="stylesheet" href="css/index.css">
</head>

<body ng-controller="WrapperController">
<div class="container">
    <section>
        <header class="row ">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-10">
                <h1>Личный блог</h1>

                <h1>Космического диктатора</h1>
            </div>
        </header>
    </section>
    <section class="row">
        <menu class="col-sm-2">
            <ul ng-if="!rootSuccess" ng-controller="MenuController" class="nav nav-pills nav-stacked">
                <li ng-repeat="item in menu" role="presentation">
                    <a ng-if="!rootSuccess" href="{{item.menu_url}}">{{item.menu_title}}</a>

                    <div ng-if="rootSuccess" class="btn-group">
                        <!--							<a href="{{item.menu_url}}">-->
                        <button type="button" class="btn ">{{item.menu_title}}</button>
                        <!--							</a>-->
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Добавить</a></li>
                            <li><a href="#">Удалить</a></li>
                            <li><a href="#">Редактировать</a></li>
                        </ul>
                    </div>

                </li>
            </ul>
        </menu>
        <div class="col-sm-8">
            <div ng-view></div>
        </div>
        <div class="col-sm-2" >
            <div ng-controller="autorController" ng-include="patern"></div>
        </div>
    </section>

</div>
</body>

</html>