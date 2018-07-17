<?php 
/**
* @version      4.9.2 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
?>
<?php if ($this->allow_review || $this->config->show_hits){?>
<div class="block_rating_hits">
    <?php if ($this->allow_review){?>
        <div class="review_mark">
            <?php print showMarkStar($product->average_rating);?>
        </div>
    <?php }?>
</div>
<?php } ?>