<?php
    class LinkList{
        public static $cwd = null;

        public static function createLinkList(){
             if(LinkList::$cwd == null){
                //$path = explode("/",getcwd());
                //LinkList::$cwd = "/" . $path[count($path)-1] . "/";  
                LinkList::$cwd = "."; 
            }
            echo LinkList::$cwd;
            LinkList::getLinks(LinkList::$cwd);
        }

        private static function getLinks($path){
            $dir = scandir($path);
    
            echo "<ol>";
            foreach($dir as $item){
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
   
    LinkList::createLinkList();    
?>