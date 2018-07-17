<?php 
/**
* @version      4.9.1 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');

$in_row = $this->config->product_count_related_in_row;
?>
<?php if (count($this->related_prod)){?>
    <div class="jshop_list_product">
        <div class = "row jshop list_related">
            <?php foreach($this->related_prod as $k=>$product) : ?>        
                <?php if ($k % $in_row == 0) : ?>
                    <div>
                <?php endif; ?>
            
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sblock">
                    <div class="jshop_related block_product">
                        <?php include(dirname(__FILE__)."/../".$this->folder_list_products."/".$product->template_block_product);?>
                    </div>
                </div>

                <?php if ($k % $in_row == $in_row - 1) : ?>
                    <div class = "clearfix"></div>
                    </div>
                <?php endif; ?>
                
            <?php endforeach; ?>
            
            <?php if ($k % $in_row != $in_row - 1) : ?>
                <div class = "clearfix"></div>
                </div>
            <?php endif; ?>
        </div>
    </div> 
<?php }?>