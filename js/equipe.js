$(document).ready(function(){
	$("#pedagogica").hide();
	$("#administrativa").hide();

    $("#link-pedagogico").click(function(){
        $("#pedagogica").toggle('slow');
        $("#administrativa").hide();
    });
    $("#link-administrativo").click(function(){
        $("#administrativa").toggle('slow');
        $("#pedagogica").hide();         
    });
});

