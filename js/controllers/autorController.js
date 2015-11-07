app.controller('autorController', function ($scope, $DataService,$timeout) {
    if(!$DataService.user_data.user_login){

        $DataService.loadData('getSession').success(function(data){
            console.log(data);
            if(data==false) {

                $scope.patern = "/tpl/autor.html";
                return false;
            }

            $DataService.user_data = data;
            $scope.user_data = $DataService.user_data;
            $scope.patern = "/tpl/cabinet.html";
        });

    }else{
        $scope.patern = "/tpl/cabinet.html";

    }



    $scope.authorization = function (data) {
        $DataService.loadData('authorization', data).success(function (data) {
            console.log(data);
            if (!data)
                return false;

            $scope.patern = "/tpl/cabinet.html";
            $timeout(function() {
                $DataService.user_data = data;
                $scope.user_data = $DataService.user_data;
            },1000);
        });
    }
});