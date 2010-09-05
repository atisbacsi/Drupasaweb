<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php

$imageTag = "<img style=\"width: $width px; height: $height px;\" src=\"$url\" alt=\"$title\" />";

?>
<div id="picasaweb" class="container-inline">
    <div class="photo">
        <div class="img">
            <div class="imgborder" <?php print "style=\"height: ".($height+100)."px; width: ".($width+4)."px;\""; ?>>
                <div class="title"><?php print $title; ?></div>
                <a href="<?php print $originalImageUrl ?>"><?php print $imageTag ?></a>
                <div class="desc"><?php print $description; ?></div>
            </div>
        </div>
    </div>
</div>
