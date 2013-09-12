<?php
session_start();

require_once '../includes/database.php';
echo $_SESSION['logged_in'];

if(isset($_SESSION['logged_in'])){
    //display index
    echo 'success';
}else{
    //display login
    
    if(isset($_POST['submit'])){
        
        $username=$_POST['username'];
         $password=md5($_POST['password']);
        
        $query="select * from users where user_name=? && password=?";
        $prepared=$dbc->prepare($query);
        $prepared->bindValue(1, $username);
        $prepared->bindValue(2, $password);
        $prepared->execute();
        
       $num=$prepared->rowCount();
        
        if($num==1){
            
            $_SESSION['logged_in']=true;
            header('location: index.php');
            
            exit();
        }else{
            echo 'login in fail';
            
        }
    }
 ?>   
 <html>
    <head>
        <title>Blog</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" />
    </head>
    <body>
        <div id="heading">
            <h1>TechBug :: ADMIN</h1>
        </div>
        <div id="container">
            <form method="Post" action="index.php">
                <label for="username">Username:</label>
                <input type="text" name="username" />
                <br />
                 <label for="password">Password:</label>
                <input type="password" name="password" />
                <br />
                <input type="submit" name="submit" value="Login" />
            </form>
        </div>
        
        
        
    </body>
    
</html>   
    
    
<?php    
}
?>


