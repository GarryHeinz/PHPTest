<?php
   
   class MyFirstClass{

        var $isOpen = false;

        function start($str){
            if(!$isOpen){   
                echo "<html>";
                $isOpen = true;
            }
            echo $str;
        }

        function end(){
            if($isOpen){
                echo "</html>";
                $isOpen = false;
            }
        }
   }

   $class = new MyFirstClass();
   $class->start("hallo");
   $class->start("Hallo 1");
   $class->start("Moingorno");
   $class->end();
?>  
<html>
    <h1>Überschrift</h1>
    <p>Hier ist mein Text</p> 
</html>