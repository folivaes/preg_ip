<?php
function isTray($ip){
    //Caso seja um ip tray
    $lista_tray = array(
        //177.67.112.0/21
        '177\.67\.(112|113|114|115|116|117|118|119)\.',
        
        //177.67.120.0/21
        '177\.67\.(120|121|122|123|124|125|126|127|)\.',

        //138.122.172.0/22
        '138\.122\.(172|173|174|175|)\.'            
    );
    if (preg_match("/^(".implode($lista_tray, "|").")/", $ip)) {
        return true;
    }
    return false;
}

