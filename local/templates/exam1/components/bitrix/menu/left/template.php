<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="side-block side-menu">
<?
$menuColor = "red";
$propertyColor = $APPLICATION->GetPageProperty("color_menu_style");
if(!empty($propertyColor)){
	$menuColor = $propertyColor;
}

?>
	<div class="title-block <?=$menuColor;?>"><?=GetMessage("T_EXAM_MENU_TITLE")?></div>
	<div class="menu-block">
		<ul>
		<?
		foreach($arResult as $arItem):
			if($arItem["DEPTH_LEVEL"] > 1)
				continue;

		?>
			<?if($arItem["SELECTED"]):?>
				<li class="selected"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
		<?endforeach?>
	</ul>
	</div>
</div>
<?endif?>
