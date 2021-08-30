<?php
require_once("registration_model.php");
if(isset($_POST["registeruser"])){
    $registrationObject = new Registration();
    $registrationObject->register_user();
}
?>


<?php include_once("headers/header_public.php"); ?>


<div class="contents">
<div class="col-lg-8 m-auto d-block">
        <form action="#" method="post" onsubmit="return validation()" class="bg-light">
            <table>
                <caption><h1>User Registration Form</h1></caption>
                <tr>
                    <td><label for="mobile_no">Mobile No: </label></td>
                    <td><input type="text" name="mobile_no" class="form-control" id="mobile_no" >
						<span id="mobileno" class="text-danger font-weight-bold"></span></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label></td>
                    <td><input type="password" name="password" class="form-control" id="password" >
						<span id="pass_word" class="text-danger font-weight-bold"></span></td>
                </tr>
                <tr>
                    <td><label for="full_name">Full_Name: </label></td>
                    <td><input type ="text" name="full_name" class="form-control" id="full_name" >
						<span id="fullname" class="text-danger font-weight-bold"></span></td>
                </tr>
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="text" name="email" class="form-control" id="email" >
						<span id="gmail" class="text-danger font-weight-bold"></span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit"  name="registeruser" value="    Register User    " /></td>
                </tr>
            </table>
        </form> 
        </div> 
</div>
 <script type= "text/javascript">
	         
			  function validation(){
			                
                            var mobile_no =document.getElementById('mobile_no').value.trim();
                            var password =document.getElementById('password').value.trim();
					        var full_name =document.getElementById('full_name').value.trim();
							var email =document.getElementById('email').value.trim();
							
							
							if(mobile_no == ""){
							    document.getElementById('mobileno').innerHTML=" ** Please fill the mobile_no";
								return false;
								
								}	
                            if(isNaN(mobile_no)){
							    document.getElementById('mobileno').innerHTML=" ** Use must be digit only";
								return false;
								
								}
							if(mobile_no.length!=10){
							    document.getElementById('mobileno').innerHTML=" **mobile_no must be 10 digits";
								return false;
								
								}
                            if(password == ""){
							    document.getElementById('pass_word').innerHTML=" ** Please fill the password";
								return false;
								
								}
							if((password.length <= 3) || (password.length > 20)){
								   document.getElementById('pass_word').innerHTML=" ** Password length must be greater then 3 ";
								return false;
								
								}		
							if(full_name == ""){
							    document.getElementById('fullname').innerHTML=" ** Please fill the user name";
								return false;
								
								}
							if((full_name.length < 1) || (full_name.length > 20)){
								   document.getElementById('fullname').innerHTML=" ** Please fill the full_name";
								return false;
								
								}
							if(!isNaN(full_name)){	
							         document.getElementById('fullname').innerHTML=" ** Only charecters are allowed";
								return false;
								}
								
							if(password == ""){
							    document.getElementById('pass_word').innerHTML=" ** Please fill the password";
								return false;
								
								}
							if((password.length <= 5) || (full_name.length > 20)){
								   document.getElementById('pass_word').innerHTML=" ** Password length must be greater then 5 ";
								return false;
								
								}	
								
								
							if(email == ""){
							    document.getElementById('gmail').innerHTML=" ** Please fill the email";
								return false;
								
								}
                             if(email.indexOf('@') <= 0 ){
							    document.getElementById('gmail').innerHTML=" ** @ is on invalid position";
								return false;
								
								}
                              if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.')){
							    document.getElementById('gmail').innerHTML=" ** . is on invalid position";
								return false;
								
								}								
					}
					
     </script>		


</body>
</html>