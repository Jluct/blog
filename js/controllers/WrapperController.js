app.controller('WrapperController',function($scope,$rootScope,$sce){
	$rootScope.html = $sce.trustAsHtml;
})