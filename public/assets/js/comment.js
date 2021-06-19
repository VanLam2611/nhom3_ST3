jQuery(document).ready(function($){
    // CREATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            title: jQuery('#title').val()
        };
        var state = jQuery('#btn-save').val();
        var type = "POST";
        var todo_id = jQuery('#todo_id').val();
        var ajaxurl = 'home/detail/1';
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var todo = '<h1>'  + data.content + '</h1>';
                if (state == "add") {
                    jQuery('#todo-list').append(todo);
                }
                jQuery('#myForm').trigger("reset");
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});