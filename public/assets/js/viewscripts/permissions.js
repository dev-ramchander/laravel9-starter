(function ($) {
    $(document).on('input', 'form.permission-form input#permission-name', function () {
        var inputVal = $(this).val().replace(/ /g, '_')
        inputVal = (inputVal[0] == "_") ? inputVal.substr(1) : inputVal;
        console.log(inputVal.length);
        if ( inputVal.length > 2 ) {
            console.log("here is the case");
            console.log(inputVal[inputVal.length - 1]);
            console.log(inputVal[inputVal.length - 2]);
            if (inputVal[inputVal.length - 1] === "_" && inputVal[inputVal.length - 2 ] === "_") {
                console.log('we in');
                inputVal = inputVal.substring(0, inputVal.length - 1);
                $(this).val(inputVal);
            }
        }
    });

    $(document).on('blur', 'form.permission-form input#permission-name', function () {
        var inputVal = $(this).val().replace(/ /g, '_')
        inputVal = (inputVal[0] == "_") ? inputVal.substr(1) : inputVal;
        inputVal = (inputVal[ inputVal.length -1 ] == "_") ? inputVal.substring(0,inputVal.length - 1) : inputVal;
        $(this).val(inputVal);
    });
})(jQuery);
