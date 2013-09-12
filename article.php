<?php

    require_once 'includes/article.php';
    require_once 'includes/database.php';
    
    
    if(isset($_GET['id'])){
       $id=$_GET['id'];
       $data=$article->fetch_data($id);
       //print_r($data);
       
?>

<html>
    <head>
        <title>Blog</title>
        <link type="text/css" rel="stylesheet" href="stylesheet/style.css" />
    </head>
    <body>
        <div id="heading">
            <h1>TechBug :: BLOG </h1>
        </div>
        <div id="container">
            <?php
           
                echo '<p>';
                echo 'Title:'. $data['article_title'].'<br />';
                echo 'Content:'. $data['article_content'].'<br />';
                    
                echo '</p>';
            
            
            ?>
            
        </div>
        
        
        
    </body>
    
</html>


       
<?   
    }else{
        header('Location:index.php');
        exit();
    }

?>
