'use strict';

$(document).ready(function () {
    $('#createBrandForm, #editBrandForm').submit(function () {
        if ($('#error-msg').text() !== '') {
            $('#phoneNumber').focus();
            return false;
        }
    });

    $('#createBrandForm, #editBrandForm').on('keyup keypress', function (e) {
        let keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
});
