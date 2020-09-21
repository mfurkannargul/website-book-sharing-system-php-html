<?php 

$veri = file_get_contents("https://www.hepsiburada.com/bir-omur-nasil-yasanir-ilber-ortayli-p-HBV00000HRTAR");
# echo strip_tags($veri);
preg_match_all('@<span itemprop="name" class="product-name" data-bind="markupText: \'productName\'">(.*?)</span>@si',$veri,$baslik);

print_r($baslik[0][0]);

?>