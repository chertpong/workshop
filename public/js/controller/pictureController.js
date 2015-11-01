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
                $http.post(
                    $location.absUrl()+'/'+target+'/delete',{_method:'DELETE'}
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
                            console.log(response.status);
                            $('<div class="alert alert-danger" role="alert">ERROR!</div>').appendTo(".alert-msg").fadeOut(5000);
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
        $scope.copy = function(id){
            try {
                document.querySelector('#'+id).select();
                var successful = document.execCommand('copy');
                if(successful){
                    $('<div class="alert alert-success" role="alert">Successfully copy to clipboard!</div>').appendTo(".alert-msg").fadeOut(5000);
                }
            } catch (err) {
                $('<div class="alert alert-danger" role="alert">Cannot copy! please do it manually!!</div>').appendTo(".alert-msg").fadeOut(5000);
            }
        }
    }
]);

pictureControllers.controller('embeddedPictureController',['$scope','$http','$location',
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
                $http.post(
                    $location.absUrl()+'/'+target+'/delete',{_method:'DELETE'}
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
                            console.log(response.status);
                            $('<div class="alert alert-danger" role="alert">ERROR!</div>').appendTo(".alert-msg").fadeOut(5000);
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
        $scope.copy = function(id){
            try {
                document.querySelector('#'+id).select();
                var successful = document.execCommand('copy');
                if(successful){
                    $('<div class="alert alert-success" role="alert">Successfully copy to clipboard!</div>').appendTo(".alert-msg").fadeOut(5000);
                }
            } catch (err) {
                $('<div class="alert alert-danger" role="alert">Cannot copy! please do it manually!!</div>').appendTo(".alert-msg").fadeOut(5000);
            }
        }
    }
]);