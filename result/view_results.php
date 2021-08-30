<?php include_once("../headers/header_user.php"); ?>
<html>
<head>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
function myfun(f,s,t)
{
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Quiz"
	},
	subtitles: [{
		text: "Marks",
		fontSize: 16
	}],
	axisY: {
		prefix: "Marks:",
		scaleBreaks: {
			customBreaks: [{
				startValue: 10000,
				endValue: 35000
			}]
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "Marks_obtained:#,##0.00",
		dataPoints: [
			{ label: "Last", y: f},
			{ label: "Second Last", y: s },
			{ label: "Thirs Last", y: t }
			
		]
	}]
});
chart.render();

}
}
</script>
</head>
<body>
<?php
require_once("../quiz/quiz_model.php");
if(isset($_POST["startQuizBtn"]))
{
    $quizObject = new Quiz();
    $mcq_ids = $quizObject->get_mcq_ids();
    shuffle($mcq_ids);
    $min = 0;
    $max = (count($mcq_ids)-1)-10;
    $random_index = rand($min, $max);
    $mcq_ids = array_slice($mcq_ids, $random_index, 10);
    $mcq_ids = implode(",",$mcq_ids);
    $mcqs = $quizObject->get_mcqs($mcq_ids);
    shuffle($mcqs);

    $_SESSION["quiz"] = $mcqs;
    $_SESSION["current_mcq_no"] = 0; // array index starts from 0;
    header("location: ../quiz/quiz.php");
    exit;
}
require_once("result_model.php");
$resultObject = new Result();
$results = $resultObject->get_results_by_user($_SESSION["mobile_no"]);
?>


<div class="contents">
<br>
<form method="post" action="#">
 <center><input type="submit" name="startQuizBtn" value="Start New Quiz" /></center>
</form>
<table cellpadding='10px' align="center" width="30%" border="1">
    <caption><h1>Results for <?php echo $_SESSION["mobile_no"]; ?></h1></caption>
        <tr>
            <th>Date Submitted</th>
            <th>Marks Obtained</th>
        </tr>
    <?php
    if(isset($results))
    {
        foreach($results as $result)
        {
        ?>
            <tr>
                <td><?php echo $result["date"]; ?></td>
                <td><?php echo $result["marks_obtained"]; ?></td>
            </tr>
        <?php 
        } // end foreach
    } // end if
    ?>
</table>
</div>
<?php
$conn = new mysqli("localhost","root","","quizapplicationdb");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{


}
//$sql = "SELECT TOP 3 marks_obtained FROM results where mobile_no=". $_SESSION["mobile_no"]." ORDER BY resultid DESC";
$sql="select marks_obtained from results where mobile_no='". $_SESSION["mobile_no"]."' ORDER BY resultid DESC limit 3";
$result = $conn->query($sql);
$check=1;
$f=0;
$s=0;
$t=0;
  while($row = $result->fetch_assoc()) 
  {
  if($check==1)
  {
      $f=$row["marks_obtained"];
      }
    if($check==2)
    {
        $s=$row["marks_obtained"];;
        }
      if($check==3)
      {
          $t=$row["marks_obtained"];;
          }
 
$check++;
  }



$conn -> close();

if($f || $s || $t) {
    echo "<script>myfun($f,$s,$t);</script>";
}

?>

</body>
</html>