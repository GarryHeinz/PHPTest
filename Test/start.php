<?php
   include '../header.php';
   LinkList::createLinkList("..");
   class MyFirstClass{

        var $isOpen = false;

        function start($str){
            if(!$this->isOpen){   
                echo "<html>\n";
                $this->isOpen = true;
            }
            echo "$str <br>\n";
        }

        function end(){
            if($this->isOpen){
                echo "</html>\n";
                $this->isOpen = false   ;
            }
        }
   }

   $class = new MyFirstClass();
   $class->start("hallo");
   $class->start("Hallo 1");
   $class->start("Moingorno");
   $class->end();
?>  