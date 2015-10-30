'use strict';
/**
 * Created by Chertpong on 26/10/2558.
 */
var contentControllers = angular.module('contentControllers',['textAngular','pictureServices']);
contentControllers.config(['$interpolateProvider','$provide', function($interpolateProvider,$provide) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
    $provide.decorator('taOptions', ['taRegisterTool', '$delegate','embeddedPictureService', function(taRegisterTool, taOptions,embeddedPictureService) { // $delegate is the taOptions we are decorating
        taOptions.toolbar = [
            ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'pre', 'quote'],
            ['bold', 'italics', 'underline', 'strikeThrough', 'ul', 'ol', 'redo', 'undo', 'clear'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'indent', 'outdent'],
            ['html','insertLink', 'insertVideo', 'wordcount', 'charcount']
        ];

        taRegisterTool('insertImage2', {
            iconclass: 'fa fa-picture-o',
            action: function($deferred){
                var textAngular = this;
                embeddedPictureService.selectPic(function(data){
                    console.log(data);
                    textAngular.$editor().wrapSelection('insertImage', data);
                });
                $deferred.resolve();
            }
        });

        taOptions.toolbar[3].push('insertImage2');
        return taOptions;
    }]);
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