<?php

require_once 'database.php';


class Article{
    
    public function fetchall(){
        global $dbc;
        $sql="select * from article";
      //  $object=$dbc->exec($sql);
        $sql_prepared=$dbc->prepare($sql);
        $sql_prepared->execute();
       return $object=$sql_prepared->fetchall();
//        echo '<pre />';
//        print_r($object);
//        echo '</pre />';
        /*echo '<pre>';
        print_r(get_class_methods($dbc)); 
        echo '</pre>';*/
        }
        
    public function fetch_data($article_id){
        global $dbc;
        $query="select * from article where article_id=?";
        $sql_prepared=$dbc->prepare($query);
        $sql_prepared->bindValue(1,$article_id);
        $sql_prepared->execute();
        return $sql_prepared->fetch();
    }
}



$article=new Article;
?>
