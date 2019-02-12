$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
            return false; 
        }
    );
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(msg) {
            if(msg=="true"){
                $('#result_form').html('User added');
                $("#hide").toggle();
            }
            else if(msg=="user"){
                alert('User with this email is already taken');
            
            }else {
                alert('Error');
            }
            
            
        },
        error: function() { 
            alert('Error occurs!');
        }
    });
}