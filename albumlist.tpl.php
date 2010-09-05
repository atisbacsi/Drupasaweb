<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="picasaweb-albumlist" class="container-inline">
    <div class="photolist">
        <?php
        foreach ($albumList as $photoEntry){

            $link = $albumPath."/".$photoEntry["id"];
            if ($photoEntry["portrait"]){
                $thumbImage = "<img src=\"".$photoEntry["thumbnailUrl"]."\" align=\"top\">";
            } else {
                $thumbImage = "<img src=\"".$photoEntry["thumbnailUrl"]."\" align=\"top\">";
            }
            $thumbLink = str_replace("placeHOLDER",$thumbImage,l("placeHOLDER",$link));
            ?>
        <div class="listImg">
            <div class="listImgborder" <?php print "style=\"height: ".($size+30)."px; width: ".($size+4)."px;\""; ?>>
                <?php print $thumbLink; ?>
                <div class="listDesc"><?php print l($photoEntry["title"],$link); ?></div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>
