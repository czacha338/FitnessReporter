jQuery(document).ready(function (){
	jQuery.post("../php/users_get_data_single.php",{id:'user_avatar',dev:'../img/site/user.png'},function(data){jQuery("#user_avatar_small").attr("src", data);});
	jQuery.post("../php/users_get_data_single.php",{id:'user_avatar',dev:'../img/site/user.png'},function(data){jQuery("#user_avatar").attr("src", data);});
});

jQuery(window).load(function(){
	jQuery("#hideAll").css('display', 'none');
});

