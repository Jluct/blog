app.controller('$CommentController', function ($scope, $routeParams, $DataService, comm) {
	$scope.id = $routeParams.articleId;
    if($DataService.user_data){

        $scope.user_data = $DataService.user_data;
    }

	$DataService.loadData('comment', $scope.id).success(function (data) {
		$scope.comments = data;
	});


	$scope.addComment = function (newComment, id) {
		comm.addComm(newComment, id).success(function (data) {
			$scope.comments = data;
			$scope.newComment.text = "";
		});
	}
});



