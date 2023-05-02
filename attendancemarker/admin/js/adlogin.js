$(document).ready(function(){
    $error3 = $('<center><h2> Invalid Username or Password <h2><center>');
    $error4 = $('<center><h2> Please enter field<h2><center>');
	$load = $('<center><img src = "pics/spin.gif" height = "100px" width = "100px" /></center>');
$('#login_admin').click(function(){
	$error3.remove();
		$("#username").focus(function(){
		$("#username_warning").removeClass('has-feedback error');
		$('#username_warning').find('span').remove();
	});
		$('#password').focus(function(){
		$('#password_warning').removeClass('has-feedback error');
		$('#password_warning').find('span').remove();
	});
	$username = $('#username').val();
	$password = $('#password').val();
		if($username == "" && $password == ""){
			$('#username_warning').addClass('has-feedback error');
			$('<span></span>').appendTo('#username_warning');
			$('#password_warning').addClass('has-feedback error');
			$('<span></span>').appendTo('#password_warning');
			$error4.appendTo('#result');
		}else{
			$load.fadeIn().appendTo('#result');
			$(this).attr('disabled', 'disabled');
			$error4.remove();
			setTimeout(function(){
				$load.remove();
				$.post('adlogin.php', {username: $username, password: $password},
					function(result){
						if(result == 'success'){
							window.location = 'home.php';
						}else{
							$error3.fadeIn().appendTo('#result');
							$('#login_admin').removeAttr('disabled');
						}
					}
				);
			},5000);
		}
	})
			}	
		)
	

