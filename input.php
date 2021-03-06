<?php
	session_start();
	require 'login_tools.php';
	
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Warrior Pen</title>
    <link rel="stylesheet" href="css/normalize.css">
   <link href='http://fonts.googleapis.com/css?family=Marck+Script%7COpen+Sans:400italic,700italic,800italic,700,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
  </head>
  <body class="mainBody">
    <header id="top" class="main-header">
      <h1>For the Greek Warrior</h1>
      <img class="arrow" src="img/arrow.svg" alt="Down arrow">
    </header>
    <div class=buttonFix>
      <nav>
       <ul>    
         <li><a href="login.php"><img src="img/loginbutton.png" alt="Logout"  class="loginButton"></a><li><em><?php print_r ($_SESSION['first_name']);?></em>
         <li><a href="input.php" class="selected"><img src="img/loginbutton.png" alt="Workout Input Form" class="loginButton"></a><li>
         <li><a href="reports.php"><img src="img/loginbutton.png" alt="Database Reports" class="loginButton"></a><li>
         <li><a href="nutrition_database.php"><img src="img/loginbutton.png" alt="Nutrition Input Form" class="loginButton"></a><li>
       </ul>
      </nav>
     </div>
      <div class="fcontainer">
      <form action= "info.php" method="post" id="myform" >
      	<h2> Workout Input</h2> <br>
      	<div class="head_section">
      	  <span> Please complete all of the fields.</span><br><br>
      	  <label for="Date" class="flabels">
      	   <span> Workout Date:</span>
      	  </label>
      	  <input type="date" name="date" id="fdate" placeholder="2016/12/31"><br><br>     	  
      	  <label for="Workout_Day" class="flabels">
      	    <span>Workout Day: </span>
      	  </label>
      	    <select id="fworkout_day" name="workout_day" class="ownlevel">
      	      <option>(none)</option>
      	      <option>Workout A</option>
      	      <option>Workout B</option>
      	    </select>
      	  <br><br>
      	</div>
      	<div class="key_l">
      	 <label for="Key_Lift" class="flabels" id="flabels">
      	    <span>Key Lift: </span> 
      	 </label>
      	 <select name=key_lift1 id="fkey_lift1">
      	   <option>(none)</option>
      	   <option>Incline Bench Press</option>
      	   <option>Sumo Deadlifts</option>
      	 </select>      	 
      	 <label for="Weight" class="flabels">
      	    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weight (lbs): </span>
      	 </label>
      	    <input type="number" name="weight1" id="fweight1" class="fweight" placeholder=000.0>
      	    <input type="number" name="weight2" id="fweight2" class="fweight" placeholder=000.0>
      	    <input type="number" name="weight3" id="fweight3" class="fweight" placeholder=000.0> 
      	    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>    	    
      	    <span class="rep_label">Reps : &nbsp;</span>
      	    <input type="number" name="reps1" id="freps1" class="freps" placeholder=0>
      	    <input type="number" name="reps2" id="freps2" class="freps" placeholder=0>
      	    <input type="number" name="reps3" id="freps3" class="freps" placeholder=0>
      	    <br><br>
      	 <label for="Key_Lift" class="flabels">
      	    <span>Key Lift: </span>
      	 </label>
      	    <select name="key_lift2" id="fkey_lift2">
      	      <option>(none)</option>
      	      <option>Shoulder Press</option>
      	      <option>Weighted Chins</option>
      	    </select>      	 
      	 <label for="Weight_(lbs)" class="flabels">
      	    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weight (lbs): </span>
      	 </label>
      	    <input type="number" name="weight4" id="fweight4" class="fweight" placeholder=000.0>
      	    <input type="number" name="weight5" id="fweight5" class="fweight" placeholder=000.0>
      	    <input type="number" name="weight6" id="fweight6" class="fweight" placeholder=000.0>
      	    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
      	    <span class="rep_label">Reps : &nbsp;</span>
      	    <input type="number" name="reps4" id="freps4" class="freps" placeholder=0>
      	    <input type="number" name="reps5" id="freps5" class="freps" placeholder=0>
      	    <input type="number" name="reps6" id="freps6" class="freps" placeholder=0>
      	</div>
      	<div class="sec_lift">
      	 <label for="Secondary_Lift" class="flabels">
      	    <span>Secondary Lift </span>
      	 </label>
      	    <select name="secondary_lift1" id="fsecondary_lift1">
      	      <option>(none)</option>
      	      <option>Lateral Raises</option>
      	      <option>Bentover Flyes</option>
      	    </select>     	
      	 <label for="Weight" class="flabels">
      	    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weight (lbs): </span>
      	 </label>
            <input type="number" name="weight7" id="fweight7" class="fweight" placeholder=00.0> 
            <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>   	
      	    <span class="rep_label">Reps : &nbsp; </span>    
      	    <input type="number" name="reps7" id="freps7" class="freps" placeholder=0>
      	    <input type="number" name="reps8" id="freps8" class="freps" placeholder=0>
      	    <input type="number" name="reps9" id="freps9" class="freps" placeholder=0>     	   
      	 <br><br>
      	 <label for="Secondary_Lift" class="flabels">
      	    <span>Secondary Lift </span>
      	 </label>
      	    <select name="secondary_lift2" id="fsecondary_lift2">
      	      <option>(none)</option>
      	      <option>Skull Crushers</option>
      	      <option>Barbell Curls</option>
      	    </select>      	 
      	 <label for="Weight" class="flabels">
      	    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Weight (lbs): </span>
      	 </label>
      	    <input type="number" name="weight8" id="fweight8" class="fweight" placeholder=00.0>  
      	    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>  	
      	    <span class="rep_label">Reps : &nbsp;</span>   
      	    <input type="number" name="reps10" id="freps10" class="freps" placeholder=0>
      	    <input type="number" name="reps11" id="freps11" class="freps" placeholder=0>
      	    <input type="number" name="reps12" id="freps12" class="freps" placeholder=0>     	 
      	    <br><br>
      	</div>
      	<label>    
      	<input name="Save" type="submit" id="jsbutton" value="Save">
      	</label>
      </form>
     </div>
     <div class="main-footer">
      <footer>
       <a href="http://twitter.com/natasha_marie_o"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://facebook.com/greek_esposa"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015-2016 Natasha Osborne.</p>
        <a href="privacy.html">Privacy Policy</a>
      </footer>
      </div>
   </body>
</html>
<?php

 $date = $key_lift1 = $weight1 = $weight2 = $weight3 = $reps1 = $reps2 = $reps3 = $key_lift2 = $weight4 = $weight5 = $weight6 = $reps4 = $reps5 = $reps6 = "";
 $secondary_lift1 = $weight7 = $reps7 = $reps8 = $reps9 = $secondary_lift2 = $weight8 = $reps10 = $reps11 = $reps12 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["date"])) {
       $dateErr = "Date is required";
   } else {
   $date = test_input($_POST["date"]);
}

   if (empty($_POST["workout_day"])) {
       $dateErr = "Workout Day is required";
   } else {
   $date = test_input($_POST["date"]);
}
     if (empty($_POST["key_lift1"])) {
       $dateErr = "Key Lift is required";
   } else {
   $key_lift1 = test_input($_POST["key_lift1"]);
   
   }
   
   if (empty($_POST["weight1"])) {
       $dateErr = "Weight is required";
   } else {
       $weight1 = test_input($_POST["weight1"]);
   
 }
   if (empty($_POST["weight2"])) {
       $dateErr = "Weight is required";
   } else {
       $weight2 = test_input($_POST["weight2"]);
   
 }
    if (empty($_POST["weight3"])) {
       $dateErr = "Weight is required";
   } else {
       $weight = test_input($_POST["weight3"]);
   
 }
   if (empty($_POST["reps1"])) {
       $dateErr = "Reps are required";
   } else {
       $reps1 = test_input($_POST["reps1"]);
   
 }
   
   if (empty($_POST["reps2"])) {
       $dateErr = "Reps are required";
   } else {
       $reps2 = test_input($_POST["reps2"]);
   
 }
   
   if (empty($_POST["reps3"])) {
       $dateErr = "Reps are required";
   } else {
       $reps3 = test_input($_POST["reps3"]);
   
 }
   
  if (empty($_POST["key_lift2"])) {
       $dateErr = "Key Lift is required";
   } else {
   $key_lift2 = test_input($_POST["key_lift2"]);
   
   }
   
   if (empty($_POST["weight4"])) {
       $dateErr = "Weight is required";
   } else {
       $weight4 = test_input($_POST["weight4"]);
   
 }
   
   if (empty($_POST["weight5"])) {
       $dateErr = "Weight is required";
   } else {
       $weight5 = test_input($_POST["weight5"]);
   
 }
   
   if (empty($_POST["weight6"])) {
       $dateErr = "Weight is required";
   } else {
       $weight6 = test_input($_POST["weight6"]);
   
 }
   
   if (empty($_POST["reps4"])) {
       $dateErr = "Reps are required";
   } else {
       $reps4 = test_input($_POST["reps4"]);
   
 }
   
   if (empty($_POST["reps5"])) {
       $dateErr = "Reps are required";
   } else {
       $reps5 = test_input($_POST["reps5"]);
   
 }
   
   if (empty($_POST["reps6"])) {
       $dateErr = "Reps are required";
   } else {
       $reps6 = test_input($_POST["reps6"]);
   
 }
  
  if (empty($_POST["secondary_lift1"])) {
       $dateErr = "Secondary Lift is required";
   } else {
   $secondary_lift1 = test_input($_POST["secondary_lift1"]);
   
   }
   
   if (empty($_POST["weight7"])) {
       $dateErr = "Weight is required";
   } else {
       $weight7 = test_input($_POST["weight7"]);
   
 }
   if (empty($_POST["reps7"])) {
       $dateErr = "Reps are required";
   } else {
       $reps7 = test_input($_POST["reps7"]);
   
 }
 
  if (empty($_POST["reps8"])) {
        $dateErr = "Reps are required";
    } else {
        $reps8 = test_input($_POST["reps8"]);
   
  }
  
  if (empty($_POST["reps9"])) {
       $dateErr = "Reps are required";
   } else {
       $reps9 = test_input($_POST["reps9"]);
   
 }
  
   if (empty($_POST["secondary_lift2"])) {
       $dateErr = "Secondary Lift is required";
   } else {
   $secondary_lift2 = test_input($_POST["secondary_lift2"]);
   
   }
   
   if (empty($_POST["weight8"])) {
       $dateErr = "Weight is required";
   } else {
       $weight8 = test_input($_POST["weight8"]);
   
   if (empty($_POST["reps10"])) {
       $dateErr = "Reps are required";
   } else {
       $reps10 = test_input($_POST["reps10"]);
   
 }
   
   if (empty($_POST["reps11"])) {
       $dateErr = "Reps are required";
   } else {
       $reps11 = test_input($_POST["reps11"]);
   
 }
   
   if (empty($_POST["reps12"])) {
       $dateErr = "Reps are required";
   } else {
       $reps12 = test_input($_POST["reps12"]);
   
 }
   
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
