jQuery(document).ready(function (){
	jQuery.post("../php/users_get_data_single.php",{id:'user_avatar',dev:'../img/site/user.png'},function(data){
		jQuery("#user_avatar_small").attr("src", data);
		jQuery("#user_avatar").attr("src", data);
	});
	jQuery.post("../php/users_get_data_single.php",{id:'user_name',dev:'N/A'},function(data){jQuery("#user_name").html(data);});
	jQuery.getScript("../externals/moment/moment-with-locales.min.js", function()
	{
		jQuery.post("../php/get_single_data_from_last_report.php",{id:'params_submission_date'},function(data){
		 if(data != null){
			var date = moment(data).format('DD.MM.YYYY');
			jQuery("#last_report_date").html(date);
			}
		});
		

	});

	
});

jQuery(window).load(function(){
	jQuery("#hideAll").css('display', 'none');
});

