app.service('ajaxService', ajaxService);
function ajaxService($http, $q) {
	var post = function (url, data, callback, token, fileContent = false) {
        var defer = $q.defer();
        jQuery('.loading-area').show();
        var contentType = fileContent ? undefined : 'application/json';
        var headers = {'Content-Type': contentType};
        if (token != null && typeof token != 'undefined') {
            headers = {'Content-Type': contentType, 'Authorization': 'Bearer ' + token};
        }
        $http({
            method: "POST",
            url: url,
            data: data,
            headers: headers

        }).then(function mySucces(response) {
            jQuery('.loading-area').hide();
            return defer.resolve(response);
        }, function myError(response) {
            jQuery('.loading-area').hide();
            return defer.resolve(response);
        });
        return defer.promise;
    };
	var filepost = function(url, data) {
		var defer = $q.defer();
        jQuery('.loading-area').show();
		var headers = {'Content-Type': undefined};
        $http({
            method: "POST",
            url: url,
            data: data,
            headers: headers
        }).then(function mySucces(response) {
            jQuery('.loading-area').hide();
            return defer.resolve(response);
        }, function myError(response) {
            jQuery('.loading-area').hide();
            var errorCodes = ['401', '404'];
            if (errorCodes.indexOf(response.status) > -1) {
                window.location.reload();
            }
            return defer.resolve(response);
        });
        return defer.promise;
	}
	var deleteRow = function(url, data, datatable = null) {
		toastr.warning("<br /><button type='button' id='confirmationUpdate' class='btn btn-sm btn-success' value='yes'>Yes</button>&nbsp;&nbsp;<button type='button' class='btn btn-sm btn-danger' id='editUpdate' value='no' >No</button>", 'Are you sure you want to delete?', {
	        autoDismiss: false,
	        timeOut: 0,
	        onShown: function (toast) {
	            $("#confirmationUpdate").click(function () {
					post(url, data, datatable);
	            });
	        }
	    });
	}
    return {
        post: post,
		filepost: filepost,
		deleteRow: deleteRow
    }
}