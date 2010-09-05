<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="picasaweb-albums" class="container-inline">
  <?php
    foreach ($albumList as $albumName){
        print $albumName. " <br/>";
    }
  ?>
</div>