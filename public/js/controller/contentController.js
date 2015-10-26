'use strict';
/**
 * Created by Chertpong on 26/10/2558.
 */
var contentControllers = angular.module('contentControllers',['textAngular']);

contentControllers.controller('addContentController',['$scope','$http','$window',
    function ($scope,$http,$window) {
        $scope.title = '';
        $scope.htmlcontent = '';
        $scope.save = function () {
            $http
                .post('store', {
                    title: $scope.title,
                    content: $scope.htmlcontent
                }).then(
                    function successCallback(response){
                        $window.location.href = response.data;
                    },
                    function errorCallback(response){
                        $('<div class="alert alert-danger" role="alert">Error!</div>').appendTo(".alert-msg").fadeOut(5000);
                        console.log(response);
                    }
                );
        }
    }
]);