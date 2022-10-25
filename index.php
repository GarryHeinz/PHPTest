<?php

    function endsWith( $haystack, $needle ) {
        $length = strlen( $needle );
        if( !$length ) {
            return true;
        }
        return substr( $haystack, -$length ) === $needle;
    }

    function createLinkList(){
        $dir = scandir(".");

        echo "<ol>";
        foreach($dir as $item){
            if(endsWith($item,".php")){
                echo "<li>";
                echo "$item";
                echo "</li>";
            }
        }
        echo "</ol>";
    }
    
    createLinkList();
    

?>