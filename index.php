<?php
    require_once 'includes/database.php';
    require_once 'includes/article.php';
    
    
    
    //$article=new Article;
    
    $articles=$article->fetchall();
    
//    echo '<pre>';
//    print_r($articles);
//    echo '</pre>';
    
    
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
               foreach($articles as $article){
                   echo '<p>';
                   echo 'Title:<a href=article.php?id='.$article['article_id'].'>'.$article['article_title'].'</a><br />';
                   echo 'Article:'.$article['article_content'].'<br />';
                   echo '</p>';
               }
                
               
            
            ?>
            
            <a href="#">article goes heres</a>
        </div>
        
        
        
    </body>
    
</html>
