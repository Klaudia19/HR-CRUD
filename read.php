<?php
    require_once "connect.php";
    $connection=@new mysqli($host, $db_user, $db_password, $db_name);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <title>CRUD EMPLOYEES</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
        
    </head>

    <body>

        <header>
            <h1><p class="main_header">Information about employees</p></h1>
        </header>

       <main class="container">
	    <h3>ID - NAME - LAST_NAME - EMAIL </h3>
            <?php
                if ($connection->connect_errno!=0)
				{
                echo "Error ";
                }
                else{               
                    $sql="SELECT * FROM employees";
                    if($results = @$connection->query($sql))
					{
                        while($row=mysqli_fetch_assoc($results))
						{
                            echo $row['employee_id']."  - <b>".$row['first_name']."</b> -  ".$row['last_name']." - ".$row['email']." "."</br>";
                    //$connection->close();
						}
                }
				}
                ?>
        </main>

    
       
    </body>
</html>