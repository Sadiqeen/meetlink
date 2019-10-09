$(function () {

    setInterval(function () {
        check_message_qt();
    }, 5000);

    $(".link-body").linkify();

    $("#form_message").submit(function (event) {
        event.preventDefault();
        if (empty_user_name()) {
            $("#user_name").addClass("border border-danger");
            $('#error_user_name').text('กรุณาป้อนชื่อผู้ใช้');
        } else {
            remove_error();
            send_message();
        }
    });

});

function empty_user_name() {
    if ($('#user_name').val() == '') {
        return true;
    } else {
        return false;
    }
}

function remove_error() {
    if ($('#error_user_name').text('') != '') {
        $("#user_name").removeClass("border border-danger");
        $('#error_user_name').text('');
    }
}

function send_message() {
    $('#smbt').prop('disabled', true);
    $.ajax({
        method: 'POST',
        url: send_message_link,
        dataType: "json",
        data: {
            'room_name': room_name,
            'user_name': $('#user_name').val(),
            'message': $('#message').val(),
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    }).done(function (data) {
        if (data == 1) {
            $('#message').val('');
            $('#smbt').prop('disabled', false);
            check_message_qt();
        } else {
            $('#message').val('');
            $('#smbt').prop('disabled', false);
            console.log(data);
        }
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log(jqXHR + ajaxOptions + thrownError);
    });
}

function check_message_qt() {
    $.ajax({
        url: count_message,
        type: "post",
        data: {
            'room_name': room_name,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        datatype: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        if (data != qt_link) {
            qt_link = data;
            get_message();
        }
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log(jqXHR + ajaxOptions + thrownError);
    });
}

function get_message() {
    $.ajax({
        method: 'POST',
        url: get_massage,
        dataType: "json",
        data: {
            'room_name': room_name,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    }).done(function (data) {
        fill_links(data);
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log(jqXHR + ajaxOptions + thrownError);
    });
}

function fill_links(data) {
    $("div").remove("#link-message");
    for (let index = 0; index < data.length; index++) {
        $('#link_box').append(
            '<div class="card" id="link-message">' +
                '<div class="card-header"></div>' +
                '<div class="card-body text-dark">' +
                    '<h6>' + data[index]['link'] + '</h6>' +
                    '<hr><small>' + data[index]['name'] + ' | create at ' + data[index]['created_at'] + '</small>' +
                '</div>' +
            '</div>'
            );
    }
}
