/**
 * Created by Stephen on 2/6/2016.
 */
var app = angular.module('minmax',[]);

app.controller('MinMaxCtrl', function($scope){
    $scope.formModel={};

    $scope.onSubmit= function(){
        console.log("Hey! I have been submitted!");
        console.log($scope.formModel);

    };
});