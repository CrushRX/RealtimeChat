$( document ).ready(function() {
    $("#send").click(
        function(){
            sendAjaxForm('messages-window', 'sendForm', 'sendMail.php');
            return false; 
        }
    );
    $("#dagger").click(
        function(){
            
        }
    );
});


 $(document).scrollTop($("messages-window").height());


function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize()
    });
}

function show()
{
    $.ajax({
        url: "showMessages.php", 
        cache: false,
        success: function(html){
            $("#messagesi").html(html);
        }
    });
}

function deleteMessage(idForm)
{
    $.ajax({
        url: "deleteMessages.php",
        type: 'POST',
        cache: false,
        data: {id: idForm}
    });
}

$(document).ready(function(){
    show();
    setInterval('show()',1000);
});


