<?php
    function createLinkList($path){
        $dir = scandir($path);

        echo "<ol>";
        foreach($dir as $item){
            $sub = explode(".",$item);
            if(is_dir($item) && substr($item,0,1) != "."){
                echo "<li>";
                echo $item;
                createLinkList($item);
                echo "</li>";
            }else if($sub[count($sub)-1] == "php"){
                echo "<li>";
                $uri = explode("/",$_SERVER["REQUEST_URI"]);
                if($uri[count($uri)-1] == $item){
                    echo $sub[0];
                }else{
                    echo "<a href='$path/$item'>$sub[0]</a>";
                }
                echo "</li>";
            }
        }
        echo "</ol>";
    }
    createLinkList(".");
    echo getcwd();
    echo "\n";
?>