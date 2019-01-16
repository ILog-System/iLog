(function(){
	'use strict'


	angular
	.module('app')
	.controller('EmployeeCtrl' , EmployeeCtrl)


	function EmployeeCtrl($scope,$http){
		// $event.preventDefault();

		$http.get("Assets/partials/php/employee.php").then(function (response) {
			$scope.list = response.data;
			// $scope.sched = response.data;
			
		});

		// $http.get("Assets/partials/php/adminSched.php").then(function (response) {
		// 	$scope.sched = response.data;

		// });
		$scope.selectUser = function(users){
			$scope.clickedUser = users;
			$scope.modalInfo = angular.copy($scope.clickedUser);
	};
	// 	$scope.selectSched = function(list){
	// 		$scope.clickedSched = list;
	// 		$scope.modalInfo1 = angular.copy($scope.clickedSched);
	// };
	}
})();