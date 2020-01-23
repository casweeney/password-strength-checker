<style>

	#frmCheckPassword {background:#FAF8F8; padding:10px;}
 	.demoInputBox{padding:7px; border-radius:4px;}
 	#password-strength-status {padding: 5px 10px; color: #FFFFFF;}
 	.medium-password{background-color: #E4DB11;}
 	.weak-password{background-color: #FF6600;}
 	.strong-password{background-color: #12CC1A;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function checkPasswordStrength() {
	let number = /([0-9])/;
	let alphabets = /([a-zA-Z])/;
	let special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	
	if($('#password').val().length<6) {
		$('#password-strength-status').removeClass();
		$('#password-strength-status').addClass('weak-password');
		$('#password-strength-status').html("Weak (should be atleast 6 characters.)");
	} else {  	
	    if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('strong-password');
			$('#password-strength-status').html("Strong");
        } else {
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('medium-password');
			$('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
        } 
	}
}
</script>

<div name="frmCheckPassword" id="frmCheckPassword">
<label>Password:</label>
<input type="password" name="password" id="password" class="demoInputBox" onKeyUp="checkPasswordStrength();" />
<div id="password-strength-status"></div>
</div>