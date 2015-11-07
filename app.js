var app = angular.module('app', [
	'ngRoute']);

app.config(['$routeProvider',
	function ($routeProvider) {
		$routeProvider.
		when('/main', {
			templateUrl: '../tpl/first.html',
			controller: 'IndexController'
		}).
		when('/news', {
			templateUrl: 'tpl/news.html',
			controller: 'NewsController'
		}).
		when('/news/:articleId', {
			templateUrl: 'tpl/articleid.html',
			controller: 'ArticleController'
		}).
		when('/galery', {
			templateUrl: 'tpl/galery.html',
			controller: 'galeryController'
		}).
		when('/admin', {
			templateUrl: 'tpl/admin.html',
			controller: 'adminController'
		}).
		otherwise({
			redirectTo: '/main'
		});
}]);