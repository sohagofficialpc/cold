<?php


include ("simple_html_dom.php");



$websiteUrl = "https://www.coldwellbanker.com/mn/eden-prairie/agents/hussein-abdulaziz/aid-P00200000Fyy2HcTCqCNFAJbf2dU84frQKc7Zul8";

$citypageurl = file_get_html($websiteUrl);


echo $citypageurl->find('h1[class="MuiTypography-root MuiTypography-h4 css-1al89ke"]', 0)->plaintext;





?>