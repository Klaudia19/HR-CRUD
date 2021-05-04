<?php 

if(isset($_POST['first_name'])){

require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password,$db_name);
    
   if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}
	else{
		
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$hire_date = $_POST['hire_date'];
	$job_id = $_POST['job_id'];
	$salary = $_POST['salary'];
		
		
	if($polaczenie->query("INSERT INTO employees (employee_id, first_name, last_name, email,  hire_date, job_id, salary) VALUES ('$id','$first_name','$last_name', '$email', '$hire_date', '$job_id','$salary')")){
		echo '<span style="color:red">Add new employee</span>';
	}
		     $polaczenie->close();
	}  	
}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>CRUD EMPLOYEES</title>
	
</head>

<body>

<h1> Add new employess </h1>

<div id = "container">

<form  method="post">

          ID:
          <input type="number" name="id">
          
          FIRST_NAME:
          <input type="text" name="first_name">
         
         LAST_NAME:
          <input type="text" name="last_name">
          
          EMAIL:
          <input type="text" name="email"> 
          
          HIRE_DATE:
          <input type="text" name="hire_date">
          
          JOB_ID:
          <input type="text" name="job_id">
          
          SALARY:
          <input type="text" name="salary">
          
          <input type="submit" value="add employees" />
</form>


</div>

</body>
</html>