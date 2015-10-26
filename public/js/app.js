'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'contentControllers'
]).
config(['$routeProvider','$interpolateProvider', function($routeProvider,$interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');

  $routeProvider
      .when('',{
        controller:'addContentController'
      })
      .otherwise({
        redirectTo: '/'
      });


}]);
