<?php 
    require("config.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) 
        { die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("Invalid E-Mail Address"); } 
         
        // Check if the username is already taken
        $query = "CALL selectUser(?)"; 
        
        try { 
            $stmt = $db->prepare($query); 
			 $stmt->bindParam(1, $_POST['username'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = "CALL selectEmail(?)";
         
        try { 
            $stmt = $db->prepare($query); 
			$stmt->bindParam(1, $_POST['email'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = "CALL insertUser(?,?,?,?)"; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        
        try {  
            $stmt = $db->prepare($query); 
			$stmt->bindParam(1, $_POST['username'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(2, $password , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(3, $salt , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
			$stmt->bindParam(4, $_POST['email'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000);
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        header("Location: index.php"); 
        die("Redirecting to index.php"); 
    } 
?>

   <form action="register.php" method="post"> 
        <label>Username:</label> 
        <input type="text" name="username" value="" /> 
        <label>Email: <strong style="color:darkred;">*</strong></label> 
        <input type="text" name="email" value="" /> 
        <label>Password:</label> 
        <input type="password" name="password" value="" /> <br /><br />
        <p style="color:darkred;">* You may enter a false email address if desired. This demo database does not store addresses for purposes outside of this tutorial.</p><br />
        <input type="submit" class="btn btn-info" value="Register" /> 
    </form>
      