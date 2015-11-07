app.controller('ArticleController', function ($scope, $routeParams, $DataService) {
	var id = $routeParams.articleId;
	//console.log(id);
	if (!$DataService.news) {
		 $DataService.loadData('news').success(function(data){
		 	$DataService.news = data;
			$scope.article = $DataService.getArticle(id);
		 });
	}
	$scope.article = $DataService.getArticle(id);
});