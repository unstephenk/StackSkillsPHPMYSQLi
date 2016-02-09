/**
 * Created by Stephen on 2/8/2016.
 */

var app = angular.module('minmax', [
    'jcs-autoValidate',
    'angular-ladda'
]);

app.run(function (defaultErrorMessageResolver) {
        defaultErrorMessageResolver.getErrorMessages().then(function (errorMessages) {
            errorMessages['tooYoung'] = 'You must be at least {0} years old to use this site';
            errorMessages['tooOld'] = 'You must be max {0} years old to use this site';
            errorMessages['badUsername'] = 'Username can only contain numbers and letters and _';
        });
    }
);

app.controller('MinMaxCtrl', function($scope, $http){
    $scope.formModel={};
    $scope.submitting = false;

    $scope.onSubmit = function (){

        $scope.submitting = true;

            console.log("Hey! I'm submitted.");
            console.log($scope.formModel);

            $http.post('https://minmax-server.herokuapp.com/register/', $scope.formModel).
             success(function (data){
             console.log(":)");
                $scope.submitting = false;
             }).error(function(data){
             console.log(':(');
                $scope.submitting = false;
             });


    };
});