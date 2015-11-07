app.controller('MenuController', function ($http, $scope, $DataService) {
	$scope.rootSuccess = $DataService.rootPoint;

	if (!$DataService.menu)
		$DataService.loadData('menu').success(function (data) {
			$DataService.menu = data;
			$scope.menu = $DataService.menu;
		});
	$scope.menu = $DataService.menu;

});