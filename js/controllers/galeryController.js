app.controller('galeryController', function ($scope, $routeParams, $DataService) {
	$scope.images = [
		{
			name: "sova",
			src: "../image/galery/001.jpg"
		},
		{
			name: "sova1",
			src : "../image/galery/Диктатор.png"
		},
		{
			name:"Космос",
			src : "../image/galery/DSC_0306.JPG"
		},
		{
			name:"dsdsds",
			src:"../image/galery/b_66.gif"
		},
		{
			name:"eewew",
			src:"../image/galery/imperium.jpg"
		},
		{
			name:"eewew",
			src:"../image/galery/qwerty.png"
		}
					];
	console.log($scope.images);
});