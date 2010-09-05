<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
    <script language="javascript">
        <!--
        function displayPhoto(url, title, desc){
		$("#pwPhotoTitle").html(title);
		$("#pwPhotoDesc").html(desc);
		$("#pwPhoto").attr("src",url);
        }
        -->
    </script>
    <div class="browserDesc">
        <span id="pwPhotoTitle"><?php print $photoList[0]["title"];?></span>
    </div>
    <div id="picture" class="browserImg">
        <div class="browserImgborder">
            <img id="pwPhoto" src="<?php print $photoList[0]["url"];?>" />
        </div>
    </div>
    <div class="browserDesc">
        <span id="pwPhotoDesc"><?php print $photoList[0]["desc"];?></span>
    </div>

    <div id="container" style="position:relative;overflow-x:scroll;height:180px">
        <div id="gallery" style="position:absolute;left:0;top:0;white-space: nowrap">
                <?php
                foreach ($photoList as $photoEntry){
                    $link = "displayPhoto(\"".$photoEntry["url"]."\",\"".$photoEntry["title"]."\",\"".$photoEntry["desc"]."\")";
                    $thumbImage = "<img onclick='$link' src=\"".$photoEntry["thumbnailUrl"]."\" align=\"top\">";
                    $thumbLink = str_replace("placeHOLDER",$thumbImage,l("placeHOLDER",$link));
                    print $thumbImage." ";
                }
                ?>
        </div>
    </div>
