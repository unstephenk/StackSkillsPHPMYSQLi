/**
 * Created by Stephen on 2/8/2016.
 */

var app = angular.module('minmax', []);

app.controller('MinMaxCtrl', function($scope, $http){
    $scope.formModel={};

    $scope.onSubmit = function (valid){

        if(valid) {
            console.log("Hey! I'm submitted.");
            console.log($scope.formModel);

            /*$http.post('https://minmax-server.herokuapp.com/register/', $scope.formModel).
             success(function (data){
             console.log(":)");
             }).error(function(data){
             console.log(':(');
             });*/

        }else{
            console.log("Invalid Form")

        }
    };
});