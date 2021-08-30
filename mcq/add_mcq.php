<?php
require_once("mcq_model.php");
if(isset($_POST["addmcq"])){
    $mcqObject = new MCQ();
    $mcqObject->add_mcq();
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="contents">
<h1>Add MCQ Form</h1>

<form name="answer" action="#" method="post" onsubmit="return validation()">
    <label for="statement">Statement:</label>
    <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="statement" size="100" id="statement" /> <span id="question" class="text-danger font-weight-bold"></span>
    
	<br/>
    <br/>
	

    <label for="answer1">Answer1: </label><input type="text" name="answer1" size="50" id="answer1"/><span id="ans1" class="text-danger font-weight-bold"></span>
    <br/>IsCorrect? <input type="radio" name="correctanswer" value="1" />
    <br/>
    <br/>
    <label for="answer2">Answer2: </label><input type="text" name="answer2" size="50" id="answer2"/><span id="ans2" class="text-danger font-weight-bold"></span>
    <br/>IsCorrect? <input type="radio" name="correctanswer" value="2"/>
    <br/>
    <br/>
    <label for="answer3">Answer3: </label><input type="text" name="answer3" size="50" id="answer3"/><span id="ans3" class="text-danger font-weight-bold"></span>
    <br/>IsCorrect? <input type="radio" name="correctanswer" value="3"/>
    <br/>
    <br/>
    <label for="answer4">Answer4: </label><input type="text" name="answer4" size="50" id="answer4"/> <span id="ans4" class="text-danger font-weight-bold"></span>
    <br/>IsCorrect? <input type="radio" name="correctanswer" value="4"/>
    <br/>
    <br/>
	    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="addmcq" value="    Add MCQ    " />
	</form>
</form>
</div>

 <script type= "text/javascript">
                
	         
			  function validation(){
			                var statement=document.getElementById('statement').value.trim();
                            var answer1 =document.getElementById('answer1').value.trim();
                            var answer2 =document.getElementById('answer2').value.trim();
					        var answer3 =document.getElementById('answer3').value.trim();
							var answer4 =document.getElementById('answer4').value.trim();
                            

                       if(statement == ""){
							    document.getElementById('question').innerHTML=" ** Please add the question";
								return false;
								
								}	
						if(answer1 == ""){
							    document.getElementById('ans1').innerHTML=" ** Please fill the answer1.";
								return false;
								
								}
                        if((answer1 === answer2) && (answer1 === answer3) && (answer1 === amswer4)) {
                                     document.getElementById('ans1').innerHTML=" ** Please fill the diff. option.";
								      return false;
                        }
                                          
                          
                        if(answer2 == ""){
							    document.getElementById('ans2').innerHTML=" ** Please fill the answer2.";
								return false;
								
								}	
                        if((answer2 === answer1) && (answer2 === answer3) && (answer2 === amswer4)) {
                                     document.getElementById('ans2').innerHTML=" ** Please fill the diff. option.";
								      return false;
                        }        	     	
                        
                         if(answer3 == ""){
							    document.getElementById('ans3').innerHTML=" ** Please fill the answer3.";
								return false;
								
								}	
                       if((answer3 === answer1) && (answer3 === answer2) && (answer3 === amswer4)) {
                                     document.getElementById('ans3').innerHTML=" ** Please fill the diff. option.";
								      return false;
                        }
                        if(answer4 == ""){
							    document.getElementById('ans4').innerHTML=" ** Please fill the answer4.";
								return false;
								
								}	
                        if((answer4 === answer1) && (answer4 === answer2) && (answer4 === amswer3)) {
                                     document.getElementById('ans4y').innerHTML=" ** Please fill the diff. option.";
								      return false;
                        }
                                        
                }
				     
</script>				
</body>
</html>