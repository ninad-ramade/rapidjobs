app.service('fieldService', fieldService);
function fieldService(Validation) {
	

    /**
     * Validate the field defined in fields object with validations defined in it
     * @param json fields Form fields
     * @return json Return object with a flag in it
     */
    var validate = function (fields) {
        var found = false;
        angular.forEach(fields, function (vals, keys) {
            var validations = vals.validations;
            angular.forEach(validations, function (val, key) {
                var label = typeof vals.label != 'undefined' && vals.label != '' ? vals.label : keys.charAt(0).toUpperCase() + keys.substr(1).toLowerCase();
                switch (val) {
                    case 'required':
                        if (vals.value == '' || typeof vals.value == 'undefined' || (typeof vals.value == 'string' && vals.value.toLowerCase() == 'select')) {
                            vals.error = true;
                            if (vals.msgs != '')
                                vals.msgs;
                            else
                                vals.msgs.push(label + ' is mandatory.');
                            found = true;
                        }
                        break;
                    case 'name':
                        if (!Validation.nameFormat(vals.value)) {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'dob':
                        var currentdate = typeof (vals.currentdate) != 'undefined' && vals.currentdate == false ? false : true;
                        if (!Validation.dobformat(vals.value, currentdate)) {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'email':
                        if (!Validation.email(vals.value)) {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'phone':
                        if (!Validation.phoneformat(vals.value)) {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label.toLowerCase() + '.');
                            found = true;
                        }
                        break;
                    case 'address':
                        if (!Validation.addressformat(vals.value)) {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'validatePassword':
                        if (vals.value != '' && typeof vals.value != 'undefined' && !Validation.validatePassword(vals.value)) {
                            vals.error = true;
                            vals.msgs.push(label + ' should at least be 8 characters long and should contain at least 3 of the following : lower case, upper case, number and special characters.');
                            found = true;
                        }
                        break;
                    case 'alphanumeric':
                        if (!Validation.alphanumericallowspacesingleinvertFormat(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'alphabets':
                        if (!Validation.alphabeticFormat(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'alphanumericsymbols':
                        if (!Validation.alphanumericspacesymbols(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'alphabetssymbols':
                        if (!Validation.alphabeticspacesymbols(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'numeric':
                        if (!Validation.numberValidate(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'url':
                        if (!Validation.urlFormat(vals.value) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
                        }
                        break;
                    case 'username':
                        if (!Validation.minlength(vals.value, 4) && vals.value != '') {
                            vals.error = true;
                            vals.msgs.push(label + ' should at least be 4 characters long.');
                            found = true;
                        }
                        break;
					case 'compare':
						if(vals.value != fields[vals.compareField].value) {
							vals.error = true;
                            vals.msgs.push('Passwords do not match.');
                            found = true;
						}
						break;
					case 'number':
						if(isNaN(vals.value)) {
							vals.error = true;
                            vals.msgs.push('Please enter a valid ' + label + '.');
                            found = true;
						}
						break;
                    default:
                        break;
                }
            })
        });
        return  {flag: found, fields: fields};
    }
    /**
     * Set's the values for the given fields object.
     * @param json fields Form fields
     * @param json values Values for fields defined
     */
    var setValues = function (fields, values) {
        angular.forEach(fields, function (vals, keys) {
            if (values[keys] != undefined && keys.toLowerCase() != 'password') {
                vals.value = vals.type == 'date' ? new Date(values[keys]) : values[keys];
            }
        })
        return fields;
    }
    /**
     * Format's the fields in to key-value pair for sending it to server.
     * @param json fields Form fields
     */
    var setJsonData = function (fields) {
        var JSONObj = new Object();
        angular.forEach(fields, function (vals, keys) {
            if (vals.constructor == Object && vals.value != "") {
                JSONObj[keys] = vals.value;
            } else if (vals.constructor == Array) {
                angular.forEach(vals, function (value, key) {
                    var obj = {};
                    angular.forEach(value, function (eachValue, eachKey) {
                        if (eachValue.value != "")
                        {
                            obj[eachKey] = eachValue.value;
                        }
                    });
                    if (typeof JSONObj[keys] == 'undefined')
                    {
                        JSONObj[keys] = {};
                    }
                    JSONObj[keys][key] = obj;
                });
            }
        });
        return JSONObj;
    }

    /**
     * Reset all error message displayed because for validation.
     * @param json fields Form fields
     */
    var resetErrors = function (fields) {
        angular.forEach(fields, function (val, key) {
            val.error = false;
            val.msgs = [];
			if(typeof document.getElementById(key) != 'undefined' && document.getElementById(key) != null) {
				document.getElementById(key).classList.remove('input-error');
			}
        });
        return fields;
    }

    /**
     * Reset all values after successful submission.
     * @param json fields Form fields
     */
    var resetValues = function (fields) {
        angular.forEach(fields, function (val, key) {
            val.value = '';
        });
        return fields;
    }

    /**
     * Set's the error message for the given fields object.
     * @param json fields Form fields
     * @param json errors Error for respective field
     */
    var setErrors = function (fields, errors) {
        angular.forEach(fields, function (vals, keys) {
            angular.forEach(errors, function (val, key) {
                if (keys == key) {
                    vals.error = true;
                    vals.msgs = val;
                }
            });
        });
        return fields;
    }
    return {
		validate: validate,
        setJsonData: setJsonData,
		setValues: setValues,
		resetValues: resetValues,
        resetErrors: resetErrors,
        setErrors: setErrors
    }
}