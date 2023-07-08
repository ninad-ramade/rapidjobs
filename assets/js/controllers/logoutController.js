app.controller('logoutController', function logoutController($scope, ajaxService) {
	$scope.logout = function() {
		var url = baseUrl + 'ajaxController.php';
		var action = 'logout';
		ajaxService.post(url, {action: action}, null, null, true).then(function (response) {
            if (response.status !== 200) {
                return false;
            }

            var responseData = response.data;
            if (responseData.status == false) {
                return false;
            }
			window.location.reload();
        });
	}
});