<?php
    function createLinkList(){
        $dir = scandir(".");

        echo "<ol>";
        foreach($dir as $item){
            $sub = explode(".",$item);
            if($sub[count($sub)-1] == "php"){
                echo "<li>";
                $path = explode("/",$_SERVER["REQUEST_URI"];
                if($path[count($path)-1] == $item){
                    echo $sub;
                }else{
                    echo "<a href='$item'>$sub[0]</a>";
                }
                echo "</li>";
            }
        }
        echo "</ol>";
    }
    createLinkList();
    
?>