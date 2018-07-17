<div id = "jshop_module_cart">
  <p>
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span>товаров:</span>
    <a href = "<?php print SEFLink('index.php?option=com_jshopping&controller=cart&task=view', 1)?>" class="cart_link">
      <?php print $cart->count_product?>
    </a>
  </p>
</div>