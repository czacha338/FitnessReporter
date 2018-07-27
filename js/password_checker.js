function checkPasswordMatch() {
	jQuery(function ($) {
    var password = $("#pass").val();
    var confirmPassword = $("#pass_retype").val();

    if (password != confirmPassword){
		$("#pass").removeClass("is-valid");
		$("#pass_retype").removeClass("is-valid");
        $("#pass").addClass("is-invalid");
		$("#pass_retype").addClass("is-invalid");
	}
    else{
		$("#pass").removeClass("is-invalid");
		$("#pass_retype").removeClass("is-invalid");
        $("#pass").addClass("is-valid");
		$("#pass_retype").addClass("is-valid");
	}
	});
}

jQuery(function ($) {
$(document).ready(function () {
   $("#pass, #pass_retype").keyup(checkPasswordMatch);
});
});