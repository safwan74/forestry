<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<div class="footer-div">
       <?php echo views_embed_view('calendar', 'block_1'); ?>
</div>
<div class="footer-div">
       <?php echo views_embed_view('up_coming_events', 'block'); ?>
</div>
<div class="footer-div">
<p>SAF NW OFFICE 4033 SW CANYON RD. PORTLAND, OR 97221 | PHONE: 503.224.8046 | FAX: 503.226.2515 | INFO@FORESTRY.ORG | COPYRIGHT (C) 2012 FORESTRY.ORG</p>
<div style="position:relative; float: right; padding-right: 25%; margin-top: 50px;">
<a href="<?php
if (strpos($url,'washington-state') !== false) {
    echo "https://www.facebook.com/WSSAF1";
} 

elseif (strpos($url,'oregon') !== false) {
    echo "https://www.facebook.com/Oregon-Society-of-American-Foresters-142371965814882/";
} 

elseif (strpos($url,'inland-empire') !== false) {
    echo "https://www.facebook.com/Inland-Empire-Society-of-American-Foresters-225824837485799/";
}

elseif (strpos($url,'alaska') !== false) {
    echo "https://www.facebook.com/AKSAF/1";
} 
else {
    echo "https://www.facebook.com";
}
   ?>"><img src="/sites/all/images/facebook.png"></a>
    
<a href="<?php 
if (strpos($url,'oregon') !== false) {
    echo "https://twitter.com/Oregon_SAF";
}

elseif (strpos($url,'alaska') !== false) {
    echo "https://twitter.com/AlaskaSAF1";
} 

else{
    echo "https://twitter.com";
}

?>">
    <img src="/sites/all/images/twitter.png"></a>
</div>
    
</div>

