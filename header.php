<?php
    class LinkList{

        public static function createLinkList($path){
            echo "<ol>";
            foreach(scandir($path) as $item){
                $sub = explode(".",$item);
                if(is_dir($item) && substr($item,0,1) != "."){
                    echo "<li>";
                    echo $item;
                    LinkList::getLinks($item);
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

    }     
?>