function deleteData(url) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to delete this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: 'No',
        confirmButtonText: "Yes",
        confirmButtonClass: "btn btn-warning mr-10",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: url,
                type: "DELETE",
                data: {
                    "_token": $('#csrfToken').val(),
                },
                beforeSend: function () {
                    blockBlodyOnAjaxRequest();
                },
                complete: function () {
                    $('body').unblock();
                },

                success: function (res) {
                    Swal.fire({
                        title: res.title,
                        text: res.msg,
                        type: res.type,
                        confirmButtonClass: "btn btn-success"
                    }).then(function () {
                        location.reload();
                    });
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: "Cancelled",
                text: "No action taken 🙂",
                type: "error",
                confirmButtonClass: "btn btn-success"
            });
        }
    });
}


function restoreData(url) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to recover this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: 'No',
        confirmButtonText: "Yes",
        confirmButtonClass: "btn btn-warning mr-10",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: url,
                type: "put",
                data: {
                    "_token": $('#csrfToken').val(),
                },
                beforeSend: function () {
                    blockBlodyOnAjaxRequest();
                },
                complete: function () {
                    $('body').unblock();
                },

                success: function (res) {
                    Swal.fire({
                        title: res.title,
                        text: res.msg,
                        type: res.type,
                        confirmButtonClass: "btn btn-success"
                    }).then(function () {
                        location.reload();
                    });
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: "Cancelled",
                text: "No action taken 🙂",
                type: "error",
                confirmButtonClass: "btn btn-success"
            });
        }
    });
}

function blockBlodyOnAjaxRequest() {
    $('body').block({
        message: '<div class="feather icon-refresh-cw icon-spin font-medium-2"></div>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
}


function statusChange(cur) {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to change the status!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change it!",
        confirmButtonClass: "btn btn-success mr-10",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            let url = $(cur).attr('data-url');
            let status = $(cur).val();
            statusUpdate(url, status)
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: "Cancelled",
                text: "Your imaginary file is safe 🙂",
                type: "error",
                confirmButtonClass: "btn btn-success"
            }).then(function () {
                location.reload();
            });
        }
    });
}


function statusUpdate(url, status) {
    $.ajax({
        url: url,
        type: "POST",
        data: {
            "_token": $('#csrfToken').val(),
            status:status,
        },
        dataType: "json",
        success: function (res) {
            Swal.fire({
                title: res.title,
                text: res.msg,
                type: res.type,
                confirmButtonClass: "btn btn-success"
            }).then(function () {
                location.reload();
            });
        }
    });
}

function getLangComPrice(url, from_lang, to_lang, sector, rate_per_word, rate_per_minute) {
    $.ajax({
        url: url,
        type: "get",
        data: {
            from_lang:from_lang,
            to_lang:to_lang,
            sector:sector,
        },
        dataType: "json",
        success: function (res) {
            $(rate_per_word).val(res.rate_per_word);
            $(rate_per_minute).val(res.rate_per_minute);
        }
    });
}

function getAvailableLanCom(url, id, view) {
    $.ajax({
        url: url,
        type: "get",
        data: {
            "id": id,
        },
        dataType: "json",
        success: function (data) {
            var output = '<option value="">Select</option>';
            if (data.length > 0) {
                $.each(data, function (index, value) {
                    output += '<option value="' + value['id'] + '">' + value['title'] + '</option>';
                });
            } else {
                var output = '<option value="">No Data Available</option>';
            }
            $(view).html(output);
        },
    });
}

