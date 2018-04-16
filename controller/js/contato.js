$(document).ready(function(){
	$("#form-contato").submit(function(){
        var googleResponse = jQuery('#g-recaptcha-response').val();
        if (!googleResponse) {
            $("<div class='form-group'><div class='alert alert-danger' role='alert'>Por favor, confirme que você não é um robô.</div></div>").insertAfter("#captcha");
            return false;
        } else {            
            return true;
        }
    });
	
});
