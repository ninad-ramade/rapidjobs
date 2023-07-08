app.factory("Validation", function () {
    var me = this;
    me.mandatory = function (value) {
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? true : false;
    };
    me.email = function (value) {
        var regexp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.dobformat = function (value, currentdate = true) {
        var regexp = /^(((0[13578]|1[02])\/(0[1-9]|[12]\d|3[01])\/((19|[2-9]\d)\d{2}))|((0[13456789]|1[012])\/(0[1-9]|[12]\d|30)\/((19|[2-9]\d)\d{2}))|(02\/(0[1-9]|1\d|2[0-8])\/((19|[2-9]\d)\d{2}))|(02\/29\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
        var result = (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;

        if (result) {
            var today = new Date();
            today = new Date((today.getMonth() + 1) + '/' + today.getDate() + '/' + today.getFullYear());
            var birthday = new Date(value);// birthday is a date
            if (currentdate == false) {
                return birthday.getTime() >= today.getTime() ? false : true;
            } else {
                return birthday.getTime() > today.getTime() ? false : true;
            }
        }

        return result;
    };

    me.dateformat = function (value) {
        var regexp = /^(((0[13578]|1[02])\/(0[1-9]|[12]\d|3[01])\/((19|[2-9]\d)\d{2}))|((0[13456789]|1[012])\/(0[1-9]|[12]\d|30)\/((19|[2-9]\d)\d{2}))|(02\/(0[1-9]|1\d|2[0-8])\/((19|[2-9]\d)\d{2}))|(02\/29\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;

        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };

    me.phoneformat = function (value) {
        var regexp = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.phoneformatcustom = function (value) {
        var regexp = /^([0-9]{1})?(\([0-9]{3})\) ([0-9]{3}|[0-9]{3})-([0-9]{4}|[0-9]{3})$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.phoneExtension = function (value) {
        var regexp = /^[0-9]{3,4}$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.cvvNumber = function (value) {
        var regexp = /^[0-9]{3,4}$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.incomeformat = function (value) {
        var regexp = /[^0-9$,.]/g;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.maxlength = function (value, maxlength) {
        return (angular.isDefined(value) && value !== null) ? value.length <= maxlength : true;
    };
    me.minlength = function (value, minlength) {
        return (angular.isDefined(value) && value !== null) ? value.length >= minlength : true;
    };
    me.eqlength = function (value, eqlength) {
        return (angular.isDefined(value) && value !== null) ? value.length === eqlength : true;
    };
    me.addressformat = function (value) {
        var regexp = /^[a-zA-Z0-9'\.\-\s\,:]{1,250}$/;
        return (angular.isDefined(value) && value.length > 0 && value.length <= 250 && value !== null) ? regexp.test(value) : true;
    };
    me.cityformat = function (value) {
        var regexp = /^([a-zA-Z\u0080-\u024F]+(?:.|. |-| |'))*[a-zA-Z\u0080-\u024F]{1,28}$/;
        return (angular.isDefined(value) && value.length > 0 && value.length <= 28 && value !== null) ? regexp.test(value) : true;
    };
    me.zipValidate = function (value) {
        var regexp = /^[0-9]{5}$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.tinValidate = function (value) {
        return (angular.isDefined(value) && value !== null) ? value.length === 10 : true;
    };
    me.ssnvalidate = function (value) {
        return (angular.isDefined(value) && value !== null) ? value.length === 11 && value != '000-00-0000' : true;
    };
    me.alphabeticFormat = function (value) {
        var regexp = /^[a-zA-Z]*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.nameFormat = function (value) {
        var regexp = /^[a-zA-Z-'\s]*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.nameFormatWithAnd = function (value) {
        var regexp = /^[a-zA-Z-&'\s]*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.routingNumber = function (value) {
        var abaRegex = /^[012346789][0-9]{8}$/;
        var checksumTotal = (7 * (parseInt(value.charAt(0), 10) + parseInt(value.charAt(3), 10) + parseInt(value.charAt(6), 10))) +
                (3 * (parseInt(value.charAt(1), 10) + parseInt(value.charAt(4), 10) + parseInt(value.charAt(7), 10))) +
                (9 * (parseInt(value.charAt(2), 10) + parseInt(value.charAt(5), 10) + parseInt(value.charAt(8), 10)));
        var checksumMod = checksumTotal % 10;
        if (checksumMod !== 0 ||
                value.length != 9 ||
                (value.substring(0, 1) === '5') ||
                (!abaRegex.test(value)))
            return false;

        return true;
    };
    me.numberValidate = function (value) {
        var regexp = /^\d+$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : false;
    };
    me.floatValidate = function (value) {
        var regexp = /^[0-9]\d*(\.\d+)?$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : false;
    };
    me.alphanumericFormat = function (value) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.alphanumericallowspacesingleinvertFormat = function (value) {
        var regexp = /^[a-zA-Z0-9\s\']*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.alphanumericspacesymbols = function (value) {
        var regexp = /^[a-zA-Z0-9\s\.\-\,\']*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.alphanumericsymbols = function (value) {
        var regexp = /^[a-zA-Z0-9\.\-\,\']*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.alphabeticspacesymbols = function (value) {
        var regexp = /^[a-zA-Z\s\.\-\,\']*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.urlFormat = function (value) {
        var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };
    me.validatePassword = function (password) {
        var count = 0;

        if (password.length < 8) {
            return false;
        }

        if ((/[A-Z]/.test(password))) {
            count++;
        }
        if ((/[a-z]/.test(password))) {
            count++;
        }
        if ((/[\'^£$%&*()}{@#~?><>,|=_+¬-]/.test(password))) {
            count++;
        }
        if ((/\d/.test(password))) {
            count++;
        }

        if (count > 2) {
            return true;
        }

        return false;
    }
    // https://transparent-health.atlassian.net/browse/NE-1429
    me.validateRoutingNumber = function (number) {
        // Rule 1: Routing number should be 9 digits.
        if (number.length != 9) {
            return false;
        }

        // Rule 2: Routing number should't start with consecutive 8 zero's
        var str = number;
        var res = str.split("");
        res.splice(8, 1);
        if (res.join('') == 00000000) {
            return false;
        }

        // Rule 3: Full repeating numbers not allowed
        var splitArray = str.split("");
        var reverseNumber = [];
        for (var i = 0; i < splitArray.length; i++) {
            reverseNumber[splitArray[i]] = splitArray[i];
        }
        var filtered = reverseNumber.filter(function (el) {
            return el != null;
        })
        if (filtered.length == 1) {
            return false;
        }

        return true;
    }

    me.checkNameCase = function (stringToCheck) {
        var words = stringToCheck.split(" ");
        var flag = 0;
        words.forEach(function (value, index, array) {
            var firstLetter = value[0];
            var remainingLetters = value.substring(1);
            if (/[A-Z]/.test(remainingLetters) || /[a-z]/.test(firstLetter)) {
                flag = 1;
            }
        });
        if (flag == 1) {
            return false;
        }
        return true;
    }

    me.convertToPascalCase = function (stringToConvert) {
        return typeof stringToConvert == 'undefined' || stringToConvert == '' ? '' : stringToConvert.charAt(0).toUpperCase() + stringToConvert.substring(1).toLowerCase();
    }

    me.alphaunderscore = function (value) {
        var regexp = /^[A-Za-z_][A-Za-z\d_]*$/;
        return (angular.isDefined(value) && value.length > 0 && value !== null) ? regexp.test(value) : true;
    };

    return me;
});

