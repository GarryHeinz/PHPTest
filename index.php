<?php
    function createLinkList(){
        $dir = scandir(".");

        echo "<ol>";
        foreach($dir as $item){
            if(str_ends_with($item,".php")){
                echo "<li>";
                echo "$item";
                echo "</li>";
            }
        }
        echo "</ol>";
    }
 
    

?>