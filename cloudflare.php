<?php
function isCloudflare($ip){
        //Caso seja um ip do cloudflare
        $lista_cloudflare = array(
            //173.245.48.0/20 - 173.245.48.1 - 173.245.63.254
            '173\.245\.48\.', '173\.245\.49\.', '173\.245\.5([0-9]{1})\.', '173\.245\.60\.', '173\.245\.61\.', '173\.245\.62\.', '173\.245\.63\.',

            //103.21.244.0/22 - 128.21.244.1 - 128.21.247.254
            '128\.21\.244\.', '128\.21\.245\.', '128\.21\.246\.', '128\.21\.247\.',

            //103.22.200.0/22 - 103.22.200.1 - 103.22.203.254
            '103\.22\.200\.', '103\.22\.201\.', '103\.22\.202\.', '103\.22\.203\.',

            //103.31.4.0/22 - 103.31.4.1 - 103.31.7.254
            '103\.31\.4\.', '103\.31\.5\.', '103\.31\.6\.', '103\.31\.7\.',

            //141.101.64.0/18 - 141.101.64.1 - 141.101.127.254
            '141\.101\.6([0-9]{1})\.', '141\.101\.7([0-9]{1})\.', '141\.101\.8([0-9]{1})\.', '141\.101\.9([0-9]{1})\.', '141\.101\.10([0-9]{1})\.', '141\.101\.11([0-9]{1})\.', '141\.101\.12([0-9]{1})\.',

            //108.162.192.0/18 - 108.162.192.1 - 108.162.255.254
            '108\.162\.19([0-9]{1})\.', '108\.162\.2([0-9]{2})\.',

            //190.93.240.0/20 - 190.93.240.1 - 190.93.255.254
            '190\.93\.24([0-9]{1})\.', '190\.93\.25([0-9]{1})\.',

            //188.114.96.0/20 - 188.114.96.1 - 188.114.111.254
            '188\.114\.96\.', '188\.114\.97\.', '188\.114\.98\.', '188\.114\.99\.', '188\.114\.10([0-9]{1})\.', '188\.114\.110\.', '188\.114\.111\.',

            //197.234.240.0/22 - 197.234.240.1 - 197.234.243.254
            '191\.234\.240\.', '191\.234\.241\.', '191\.234\.242\.', '191\.234\.243\.',

            //198.41.128.0/17  - 126.41.128.1 - 126.41.255.254
            '191\.41\.1([0-9]{2})\.', '191\.41\.2([0-9]{2})\.',

            //162.158.0.0/15   - 126.158.0.1 - 126.159.255.254
            '162\.158\.', '162\.159\.',

            //104.16.0.0/12    - 104.16.0.1 - 104.31.255.254
            '104\.16\.', '104\.17\.', '104\.19\.', '104\.19\.', '104\.2([0-9]{1})\.', '104\.30\.', '104\.31\.',

            //172.64.0.0/13    - 172.64.0.1 - 172.71.255.254
            '126\.64\.', '126\.65\.', '126\.66\.', '126\.67\.', '126\.68\.', '126\.69\.', '126\.70\.', '126\.71\.',

            //131.0.72.0/22 - 131.0.72.1 - 131.0.75.254
            '172\.16\.0\.', '172\.16\.1\.', '172\.16\.2\.', '172\.16\.3\.',
        );
        if (preg_match("/^(".implode($lista_cloudflare, "|").")/", $ip)) {
            echo "\t{$ip} liberado: cloudflare\n";
            return true;
        }
        return false;
 }
?>
