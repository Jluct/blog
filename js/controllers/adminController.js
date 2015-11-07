app.controller('adminController', function ($scope, $DataService) {
	$scope.autor=function(admin){

		if(admin)
		$DataService.loadData('user',admin).success(function(data){
			if(data)
				location.href="#/admin/console";
		});
	}
});