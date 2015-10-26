'use strict';
/**
 * Created by Chertpong on 27/10/2558.
 */
var pictureControllers = angular.module('pictureControllers',[]);
pictureControllers.config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}]);

pictureControllers.controller('mainPictureController',['$scope','$http','$location',
    function($scope,$http,$location){
        $scope.pictures = [];
        $scope.path = $location.absUrl();
        $http
            .get(($location.host()+'/../api/pictures'))
            .then(
            function successCallback(response){
                $scope.pictures =response.data;
            },
            function errorCallback(response){
                $('<div class="alert alert-danger" role="alert">Error cannot load pictures!</div>').appendTo(".alert-msg").fadeOut(5000);
            }
        );


        $scope.delete = function(target){
            if(confirm('Do you really want to delete?')){
                $http.delete(
                    $location.absUrl()+'/'+target+'/delete'
                ).then(
                    function successCallback(response){
                        $scope.pictures.forEach(function (e,i,a) {
                            if(e.id == target){
                                a.splice(i,1);
                            }
                            console.log($scope.pictures);
                        });
                        $('<div class="alert alert-success" role="alert">Success!</div>').appendTo(".alert-msg").fadeOut(5000);
                    },
                    function errorCallback(response){
                        if(response.status == '302'){
                            $('<div class="alert alert-success" role="alert">Success!</div>').appendTo(".alert-msg").fadeOut(5000);
                        }
                        else {
                            //TODO : Fix bug error 405
                            console.log(response.status);
                        }
                        $scope.pictures.forEach(function (e,i,a) {
                            if(e.id == target){
                                a.splice(i,1);
                            }
                            console.log($scope.pictures);
                        });
                    }
                );
            }
        };
    }
]);