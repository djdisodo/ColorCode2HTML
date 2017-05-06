<?php
function color( $string ) {
     $string = '<span>' . $string;
     $string = str_replace( '§0', '</span><span style="color:black">', $string );
     $string = str_replace( '§1', '</span><span style="color:blue">', $string );
     $string = str_replace( '§2', '</span><span style="color:green">', $string );
     $string = str_replace( '§3', '</span><span style="color:blue">', $string );
     $string = str_replace( '§4', '</span><span style="color:red">', $string );
     $string = str_replace( '§5', '</span><span style="color:purple">', $string );
     $string = str_replace( '§6', '</span><span style="color:orange">', $string );
     $string = str_replace( '§7', '</span><span style="color:gray">', $string );
     $string = str_replace( '§8', '</span><span style="color:black">', $string );
     $string = str_replace( '§9', '</span><span style="color:blue">', $string );
     $string = str_replace( '§a', '</span><span style="color:green">', $string );
     $string = str_replace( '§b', '</span><span style="color:blue">', $string );
     $string = str_replace( '§c', '</span><span style="color:red">', $string );
     $string = str_replace( '§d', '</span><span style="color:pink">', $string );
     $string = str_replace( '§e', '</span><span style="color:yellow">', $string );
     $string = str_replace( '§f', '</span><span style="color:white">', $string );
     $string = str_replace( '§d', '</span><span style="color:pink">', $string );
     $string = str_replace( '§k', '', $string );  //how can i do this
     $string = str_replace( '§d', '</span><span style="color:pink">', $string );
     $string = str_replace( '§l', '', $string );
     $string = str_replace( '§o', '', $string );
     $string = str_replace( '§r', '</span><span>', $string );
     return $string .'</span>';
}
?>
