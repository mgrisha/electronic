<script type = "text/javascript">
function isEmptyValue(value){
    var pattern = /\S/;
    return ret = (pattern.test(value)) ? (true) : (false);
}
</script>
<form name = "searchForm" method = "post" action="<?php print SEFLink("index.php?option=com_jshopping&controller=search&task=result", 1);?>" onsubmit = "return isEmptyValue(jQuery('#jshop_search').val())">
<input type="hidden" name="setsearchdata" value="1">
<input type = "hidden" name = "category_id" value = "<?php print $category_id?>" />
<input type = "hidden" name = "search_type" value = "<?php print $search_type;?>" />
<button type="submit" class="button"><i class="fa fa-search" aria-hidden="true"></i></button>
<input type = "text" class = "inputbox" name = "search" id = "jshop_search" placeholder="Введите название товара" value = "<?php print $search?>" />
<?php if ($adv_search) {?>
<br /><a href = "<?php print $adv_search_link?>"><?php print _JSHOP_ADVANCED_SEARCH?></a>
<?php } ?>
</form>