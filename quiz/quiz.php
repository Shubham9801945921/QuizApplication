
<?php include_once("../headers/header_user.php"); ?>

<?php
if(isset($_POST["submitmcq"]))
{
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    
    if($current_mcq_no <= 9) {
        $submitted_mcq_no = $current_mcq_no - 1;
        $submitted_mcq = $_SESSION["quiz"][$submitted_mcq_no];
        if(isset($_POST["answer"])) {
            if($_POST["answer"] == $submitted_mcq["correctanswer"]){
                $_SESSION["answers"][$submitted_mcq_no] = 1;
            } else{
                $_SESSION["answers"][$submitted_mcq_no] = 0;
            }
        } else {
            $_SESSION["answers"][$submitted_mcq_no] = 0;        
        } 
        $_SESSION["current_mcq_no"] = $current_mcq_no + 1;
    } else {
        $submitted_mcq_no = $current_mcq_no - 1;
        $submitted_mcq = $_SESSION["quiz"][$submitted_mcq_no];
        if(isset($_POST["answer"])) {
            if($_POST["answer"] == $submitted_mcq["correctanswer"]){
                $_SESSION["answers"][$submitted_mcq_no] = 1;
            } else{
                $_SESSION["answers"][$submitted_mcq_no] = 0;
            }
        } else {
            $_SESSION["answers"][$submitted_mcq_no] = 0;        
        } 
        header("location: result.php");
        exit;
    }
} else {
    $current_mcq_no = $_SESSION["current_mcq_no"];
    $current_mcq = $_SESSION["quiz"][$current_mcq_no];
    $_SESSION["current_mcq_no"] = $current_mcq_no + 1;
}


?>
<!-- <html>

  <head>

    <title>My little countdown timer</title>

    <script type="text/javascript">

        var clock = 10;
        var countdownId = 0;
        function start() {

            //Start clock
            countdownId = setInterval("countdown()", 1000);
        }
        function countdown(){
            if(clock > 0){
                clock = clock - 1;
                document.getElementById('cdDiv').innerHTML = clock;
            }
            else {
			alert('sorry, The answer is');
                //Stop clock
                clearInterval(countdownId);
            }
        }
    </script>
  </head>
           <body onload="start()">
                    <div id="cdDiv">10</div>
           </body>
</html> -->

<div class="contents">
    <form action="quiz.php" method="POST" >
    <h2>Question: <?php echo $current_mcq_no + 1; ?>/10</h2>
    <h1><?php echo $current_mcq["statement"] ?></h1>
    <input type="radio" name="answer" value="1"/><?php echo $current_mcq["answer1"]?><br/><br/>
    <input type="radio" name="answer" value="2"/><?php echo $current_mcq["answer2"] ?><br/><br/>
    <input type="radio" name="answer" value="3"/><?php echo $current_mcq["answer3"] ?><br/><br/>
    <input type="radio" name="answer" value="4"/><?php echo $current_mcq["answer4"] ?><br/><br/>
    <input type="submit" name="submitmcq" value="   Submit Answer   " />
    </form>
</div>

