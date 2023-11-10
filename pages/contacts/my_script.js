$(document).ready(function(){
    $("#form").submit(function() {
        var form_data = $(this).serialize(); 
        $.ajax({
            type: "POST",
            url: "telegram.php",
            data: form_data,
            success: swal({
                title: "Спасибо за заявку",
                icon: "success",
                timer: 2000
            })
        });
        $('#send_button').prop('disabled', true)
        event.preventDefault();
    });
});