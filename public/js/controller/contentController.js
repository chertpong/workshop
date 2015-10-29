'use strict';
/**
 * Created by Chertpong on 26/10/2558.
 */
var contentControllers = angular.module('contentControllers',['textAngular']);
contentControllers.config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}]);

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
                    }
                );
        }

    }
]);

contentControllers.controller('editContentController',['$scope','$http','$window','$location',
    function ($scope,$http,$window,$location) {
        $scope.title = '';
        $scope.htmlcontent = '';
        //Load content ID
        var contentId = $location.absUrl().split('/').length > 0 ? $location.absUrl().split('/') : [];
        contentId = contentId[contentId.length -2];

        $http.get('../../api/contents/'+contentId).then(
            function successCallback(response){
                $scope.title = response.data.title;
                $scope.htmlcontent = response.data.content;
            },
            function errorCallback(response){
                $('<div class="alert alert-danger" role="alert">Error! fail to load content!</div>').appendTo(".alert-msg").fadeOut(5000);
                console.log(response.data);
            }
        );

        $scope.edit = function () {
            $http
                .post('update', {
                    title: $scope.title,
                    content: $scope.htmlcontent,
                    _method: 'PUT'
                }).then(
                function successCallback(response){
                    $window.location.href = response.data;
                },
                function errorCallback(response){
                    console.log(response.data);
                    $('<div class="alert alert-danger" role="alert">Error!</div>').appendTo(".alert-msg").fadeOut(5000);
                }
            );
        }

    }
]);