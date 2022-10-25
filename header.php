<?php
    function createLinkList($path){
        $dir = scandir($path);

        echo "<ol>";
        foreach($dir as $item){
            if(is_dir($item)){
                echo "Directory $item";
            }
            $sub = explode(".",$item);
            if($sub[count($sub)-1] == "php"){
                echo "<li>";
                $uri = explode("/",$_SERVER["REQUEST_URI"]);
                if($uri[count($uri)-1] == $item){
                    echo $sub[0];
                }else{
                    echo "<a href='$item'>$sub[0]</a>";
                }
                echo "</li>";
            }
        }
        echo "</ol>";
    }
    createLinkList(".");
    
?>