<?php
require_once("registration_model.php");
if(isset($_POST["loginuser"])){
    $mobile_no = $_POST["mobile_no"];
    $password = $_POST["password"];
    $registrationObject = new Registration();
    $registrationObject->signin_user($mobile_no, $password);
}
?>


<?php include_once("headers/header_public.php"); ?>


<div class="contents">

    <form action="index.php" method="post" onsubmit="return validation()">
        <table >
            <caption><h1>Login Form</h1></caption>
            <tr>
                <td><label for="mobile_no">Mobile No: </label></td>
                <td><input type="text" name="mobile_no" class="form-control" id="mobile_no" >
						<span id="mobileno" class="text-danger font-weight-bold"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password" class="form-control" id="password" >
						<span id="pass_word" class="text-danger font-weight-bold"></span></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="loginuser" value="    Login    " /></td>
            </tr>
        </table>
    </form>
</div>

   <script type= "text/javascript">
	         
			  function validation(){
			                
                            var mobile_no =document.getElementById('mobile_no').value.trim();
                            var password =document.getElementById('password').value.trim();


                            
							if(mobile_no == ""){
							    document.getElementById('mobileno').innerHTML=" ** Please fill the mobile_no";
								return false;
								
								}
                             if(mobile_no.length!=10){
							    document.getElementById('mobileno').innerHTML=" **mobile_no must be 10 digits";
								return false;
								
								}   


                               if(password == ""){
							    document.getElementById('pass_word').innerHTML=" ** Please fill the correct password";
								return false;
								
								}  
                           }
              </script>
</body>
</html>