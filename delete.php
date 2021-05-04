<?php
    if (isset($_POST['email']))
	{
        require_once "connect.php";
        $connection=@new mysqli($host, $db_user, $db_password, $db_name);

        if ($connection->connect_errno!=0){
            echo "Error ";
        }
        else{

            $email=$_POST['email'];
            if ($connection->query("DELETE FROM employees WHERE email='$email'"))
			{
				echo '<span style="color:red"> Delete '.$email.'</span>';
			}

            $connection->close();
        }
    }
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
            <h2><p class="main_header">DELETE EMPLOYEE </p></h2>
        </header>

       <main class="container">

            <form method="post">
                <h3>Write name email to delete</h3>

                Email:
                <input type="text" name="email">
               <input type="submit" value="delete" />
            </form>
          
       </main>

    
       
    </body>
</html>