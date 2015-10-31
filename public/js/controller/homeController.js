'use strict';
/**
 * Created by Chertpong on 29/10/2558.
 */
var homeController = angular.module('homeController',[]);
homeController.controller('homeController',['$scope','$http',function($scope,$http){
    $scope.contents  = [];
    $http.get('api/contents/recent/3').then(
        function successCallback(response){
            $scope.contents = response.data;
        },
        function errorCallback(response){

        }
    );
}]);
