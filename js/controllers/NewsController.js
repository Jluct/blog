app.controller('NewsController', function ($http, $scope, $DataService, $sce, searchNews) {
	if (!$DataService.news) {
		$DataService.loadData('news').success(function (data) {
			$DataService.news = data;
			$scope.news = $DataService.getNews();
		});
	}

	$scope.news = $DataService.getNews();

	$scope.visible = searchNews.visible;
	
	$scope.query=searchNews.query;
	
	$scope.searchNews = function (query) {
		
		if (!query){
			return false;
		}
		
		searchNews.query=query;
		searchNews.searchArt(query).success(function (data) {
			console.log(data);
			$DataService.news = data;
			$scope.news = "";
			$scope.news = $DataService.getNews();
		});
		searchNews.visible = true;
		$scope.visible = searchNews.visible;

	}

	$scope.reset = function () {
		searchNews.visible = false;
		$scope.visible = searchNews.visible;
		searchNews.searchReset().success(function (data) {
			if (searchNews.query){
				searchNews.query = '';
				$scope.query='';
			}
			$DataService.news = data;
			$scope.news = "";
			$scope.news = $DataService.getNews();
		});

	}

});