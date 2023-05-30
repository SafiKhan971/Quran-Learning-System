function AjaxUploadResponse(phpurl, phpdata) {

    // console.log(phpurl);
    // path = localStorage.getItem("path");
    // path = "https://crective.grithx.pk/";
    path = "http://localhost/crective.com/";
    var return_val = '';
    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        type: "POST",
        async: false,
        url: path + phpurl,
        beforeSend: function () {
        },
        dataType: 'json',
        data: phpdata,
        success: function (data) {
            return_val = data;
        },
        error: function (xhr, status, text) {
            console.log('Failure! ' + text);
        }
    });
    return return_val;
}

function AjaxResponse(phpurl, phpdata) {
    // path = localStorage.getItem("path");
    // path = "https://crective.grithx.pk/";
    path = "http://localhost/crective.com/";
    var return_val = '';
    $.ajax({
        cache: false,
        type: "POST",
        async: false,
        url: path + phpurl,
        beforeSend: function () {
        },
        dataType: "json",
        data: phpdata,
        success: function (data) {
            return_val = data;
        },
        error: function () {
        }
    });
    return return_val;
}
