<?php 
    require("config.php"); 
    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = "CALL selectUser(?)"; 
        
        try{ 
            $stmt = $db->prepare($query); 
            $stmt->bindParam(1, $_POST['username'] , PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 
            $result = $stmt->execute(); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: secret.php"); 
            die("Redirecting to: secret.php"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 

          <form class="navbar-form navbar-right" action="index.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Username" name="username" class="form-control" value="<?php echo $submitted_username; ?>"/>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" value="" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" value="Login" /> 
          </form>



  