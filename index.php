<?php
   
   class MyFirstClass{

        var $isOpen = false;

        function start($str){
            if(!$this->isOpen){   
                echo "<html>";
                $this->isOpen = true;
            }
            echo $str;
        }

        function end(){
            if($this->isOpen){
                echo "</html>";
                $this->isOpen = false;
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