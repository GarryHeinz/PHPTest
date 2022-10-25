<?php
    function createLinkList(){
        $dir = scandir(".");

        echo "<ol>";
        foreach($dir as $item){
            $sub = explode(".",$item);
            if($sub[count($sub)-1] == "php"){
                echo "<li>";
                echo "<a href='$item'>$sub[0]</a>";
                echo "</li>";
            }
        }
        echo "</ol>";
        var_dump($_SERVER);
    }
    createLinkList();
    
?>