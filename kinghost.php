<?php
function isKinghost($ip){
        //Caso seja um ip kinghost
        $lista_kinghost = array(
            //189.38.80.0/20
            '189\.38\.80\.', '189\.38\.81\.', '189\.38\.82\.', '189\.38\.83\.', '189\.38\.84\.', '189\.38\.85\.', '189\.38\.86\.', '189\.38\.87\.', '189\.38\.88\.', '189\.38\.89\.', '189\.38\.90\.', '189\.38\.91\.', '189\.38\.92\.', '189\.38\.93\.', '189\.38\.94\.', '189\.38\.95\.',
            
            //187.1.128.0/24
            '187\.1\.128\.', '187\.1\.129\.', '187\.1\.130\.', '187\.1\.131\.', '187\.1\.132\.', '187\.1\.133\.', '187\.1\.134\.', '187\.1\.135\.', '187\.1\.136\.', '187\.1\.137\.', '187\.1\.138\.', '187\.1\.139\.', '187\.1\.140\.', '187\.1\.141\.', '187\.1\.142\.', '187\.1\.143\.',

            //177.12.160.0/20
            '177\.12\.160\.', '177\.12\.161\.', '177\.12\.162\.', '177\.12\.163\.', '177\.12\.164\.', '177\.12\.165\.', '177\.12\.166\.', '177\.12\.167\.', '177\.12\.168\.', '177\.12\.169\.', '177\.12\.170\.', '177\.12\.171\.', '177\.12\.172\.', '177\.12\.173\.', '177\.12\.174\.', '177\.12\.175\.',

            //177.185.192.0/20
            '177\.185\.192\.', '177\.185\.193\.', '177\.185\.194\.', '177\.185\.195\.', '177\.185\.196\.', '177\.185\.197\.', '177\.185\.198\.', '177\.185\.199\.', '177\.185\.200\.', '177\.185\.201\.', '177\.185\.202\.', '177\.185\.203\.', '177\.185\.204\.', '177\.185\.205\.', '177\.185\.206\.', '177\.185\.207\.',

            //191.6.192.0/19
            '191\.6\.192\.', '191\.6\.193\.', '191\.6\.194\.', '191\.6\.195\.', '191\.6\.196\.', '191\.6\.197\.', '191\.6\.198\.', '191\.6\.199\.', '191\.6\.200\.', '191\.6\.201\.', '191\.6\.202\.', '191\.6\.203\.', '191\.6\.204\.', '191\.6\.205\.', '191\.6\.206\.', '191\.6\.207\.', '191\.6\.208\.', '191\.6\.209\.', '191\.6\.210\.', '191\.6\.211\.', '191\.6\.212\.', '191\.6\.213\.', '191\.6\.214\.', '191\.6\.215\.', '191\.6\.217\.', '191\.6\.218\.', '191\.6\.219\.', '191\.6\.220\.', '191\.6\.221\.', '191\.6\.222\.', '191\.6\.223\.',

            //Rede interna
            '10\.',
        );
        if (preg_match("/^(".implode($lista_kinghost, "|").")/", $ip)) {
            echo "\t{$ip} liberado: kinghost\n";
            return true;
        }
        return false;
}
?>
