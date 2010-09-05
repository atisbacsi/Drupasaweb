<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="picasaweb-photolist" class="container-inline">
    <div class="photolist">
        <?php
        foreach ($photoList as $photoEntry){

            $link = $photoPath."/".$albumId."/".$photoEntry["id"];
            $thumbImage = "<img src=\"".$photoEntry["thumbnailUrl"]."\" align=\"top\">";
            $thumbLink = str_replace("placeHOLDER",$thumbImage,l("placeHOLDER",$link));
            ?>
        <div class="listImg">
            <div class="listImgborder" <?php print "style=\"height: ".($height+30)."px; width: ".($width+4)."px;\""; ?>>
                <?php print $thumbLink; ?>
                <div class="listDesc"><?php print l($photoEntry["title"],$link); ?></div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>
