app.controller('hotJobsController', function hotJobsController($scope, Validation, ajaxService) {
	$scope.getHotJobs = function() {
		var url = baseUrl + 'ajaxController.php';
		var action = 'hotJobs';
		ajaxService.post(url, {action: action}, null, null, true).then(function (response) {
            if (response.status !== 200) {
                return false;
            }

            var responseData = response.data;
            if (responseData.status == false) {
                return false;
            }
			$scope.hotJobs = responseData.data.jobs;
        });
	}
	$scope.getHotJobs();
});