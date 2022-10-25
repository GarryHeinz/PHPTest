<?php
    function createLinkList($path){
        $dir = scandir($path);

        echo "<ol>";
        foreach($dir as $item){
            $sub = explode(".",$item);
            echo "<li>";
            if(is_dir($item) && substr($item,0,1) != "."){
                echo $item;
                createLinkList($item);
            }else if($sub[count($sub)-1] == "php"){
                $uri = explode("/",$_SERVER["REQUEST_URI"]);
                if($uri[count($uri)-1] == $item){
                    echo $sub[0];
                }else{
                    echo "<a href='$item'>$sub[0]</a>";
                }
            }
            echo "</li>";
        }
        echo "</ol>";
    }
    createLinkList(".");
    
?>