'use strict';
/**
 * Created by Chertpong on 29/10/2558.
 */
var pictureService = angular.module('pictureServices',['ui.bootstrap']);

pictureService.factory('embeddedPictureService',['$http','$uibModal','$location',
    function($http,$uibModal,$location){
        return {
            selectPic : function(callback){
                var path = $location.absUrl().substring(0,$location.absUrl().indexOf("/contents/"));
                $http
                    .get((path +'/api/pictures'))
                    .then(
                    function successCallback(response){
                        var modalInstance = $uibModal.open({
                            animation:true,
                            templateUrl: path+'/template/embeddedPictureService.html',
                            size: 'md',
                            controller: ['$uibModalInstance', '$scope',
                                function($uibModalInstance, $scope) {
                                    $scope.path = path;
                                    $scope.pictures = response.data.length > 0 ? response.data : [];

                                    $scope.copy =function(id) {
                                        try {
                                            document.querySelector('#' + id).select();
                                            document.execCommand('copy');
                                        } catch (err) {
                                            console.log("Error! Can't copy");
                                        }
                                    }
                                    $scope.insert = function(id){
                                        var urlPic = document.querySelector('#' + id).value;
                                        urlPic = urlPic.split('/').pop();
                                        console.log(urlPic);
                                        urlPic = path+'/pictures/'+urlPic;
                                        $uibModalInstance.close(urlPic);
                                    }
                                }
                            ]
                        });
                        modalInstance.result.then(function (pictureUrl){
                            callback(pictureUrl);
                        });
                    },
                    function errorCallback(response){
                        console.log(response.data);
                        return response.data;
                    }
                );
            }
        }
    }]
);