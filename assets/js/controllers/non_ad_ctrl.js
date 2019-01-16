(function(){
	'use strict'

	angular
	.module('app')
	.controller('nonAdminCtrl' , nonAdminCtrl)

	function nonAdminCtrl($scope,$http){

		$http.get("Assets/partials/php/nonAd.php").then(function (response) {
				$scope.list = response.data;
			});

		
	}


})();