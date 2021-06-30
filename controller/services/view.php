<?php
class View
{
    public static function createViewH($view) {      //gaperlu param?
        ob_start();                     
        include 'view/'.$view;          
        $content = ob_get_contents();   
        ob_end_clean();

        ob_start();                         
        include 'view/layout/layout.php';   
        $include = ob_get_contents();
        ob_end_clean();                     
        return $include;                    
    }

    public static function createViewCheck($view, $condition) {      //gaperlu param?
        $conditions = array();

        if($condition == "invalid email") {     //blm bisa nyimpan lebi dari 1
            // $conditions[0] = 'invalidemail';
            array_push($conditions, 'email');
        }
        if($condition === "password didn't match") {
            array_push($conditions, 'password');    
        }
        if($condition === "someone's already use that") {
            array_push($conditions, 'same');    
        }
        if($condition === "invalid email or password") {
            array_push($conditions, 'wrong email or password');    
        }

        ob_start();                     
        include 'view/'.$view;          
        $content = ob_get_contents();   
        ob_end_clean();

        ob_start();                         
        include 'view/layout/layout.php';   
        $include = ob_get_contents();
        ob_end_clean();                     
        return $include;                    
    }
    

    public static function createView($view, $param) {
        foreach ($param as $key => $value) {    //dia ngeloop array $param 
            $$key = $value;
        }

        ob_start();                     //ngubah ke string
        include 'view/'.$view;          
        $content = ob_get_contents();   //trs ubh ke string, dan maskin ke $content
        ob_end_clean();

        ob_start();                         
        include 'view/layout/layout.php';   
        $include = ob_get_contents();
        ob_end_clean();                     
        return $include;                    
    }
}

?>