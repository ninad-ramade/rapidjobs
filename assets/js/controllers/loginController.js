app.controller('loginController', function loginController($scope, Validation, ajaxService) {
	$scope.loginMessage = '';
  	$scope.loginData = {
		username: {
			value: ''
		},
		password: {
			value: ''
		}
	};
	$scope.hideMessage = function() {
		$scope.loginMessage = '';
	}
	$scope.login = function() {
		if($scope.loginData.username.value != '' && $scope.loginData.password.value != '') {
			var url = baseUrl + 'ajaxController.php';
			var action = 'login';
			ajaxService.post(url, {action: action, username: $scope.loginData.username.value, password: $scope.loginData.password.value}, null, null, true).then(function (response) {
	            if (response.status !== 200) {
	                return false;
	            }
	
	            var responseData = response.data;
	            if (responseData.status == false) {
	                $scope.loginMessage = responseData.message;
	            }
				$("#sign_up_popup2").modal('toggle');
				//window.location.reload();
	        });
		}
	}
});