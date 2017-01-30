/**
 * Created by Admin on 27.01.2017.
 */
window.onload = function() {

    // $('#gmetrix_account_save').click(function () {
    //     $.ajax({
    //         type: "POST",
    //         url: "/ajax/generate_pdf",
    //         data: {val: $('#gmetrix_account_data').html()}
    //     }).done(function (msg) {
    //         console.log($.parseJSON(msg));
    //         $('#send-to-mail').css('display', 'block');
    //         file = baseName($.parseJSON(msg));
    //         console.log(file);
    //         window.open($.parseJSON(msg), '_blank');
    //     });
    // });

    $( "#gmetrix_account_data" ).on( "submit", function( event ) {
        event.preventDefault();
        var data= $( this ).serialize();
        $.ajax({
            type: "POST",
            url: "/ajax/gmetrix_account_save",
            data: {val: data}
        }).done(function (msg) {
            console.log(msg);
            // $('#send-to-mail').css('display', 'block');
            // file = baseName($.parseJSON(msg));
            // console.log(file);
            // window.open($.parseJSON(msg), '_blank');
        });
    });
}

