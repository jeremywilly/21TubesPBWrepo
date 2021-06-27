<?php
class View
{
    public static function createViewHome($view) {      //gaperlu param?
        
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