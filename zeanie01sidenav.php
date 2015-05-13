<!-- START SUBNAV SYSTEM -->
<?php
function Get_Short_Menu_Title($Submenu,$MaxLen,$Space) {
	$Org_Submenu_Title_Len = strlen($Submenu);
	$Submenu_MaxTitle_Len = $MaxLen;
	if ($Org_Submenu_Title_Len >= $Submenu_MaxTitle_Len) {
		$Submenu_Title_Len_New = $Submenu_MaxTitle_Len - 3;
		$subMenuparenttitle = str_repeat('&nbsp;', $Space).substr($Submenu,0,$Submenu_Title_Len_New).'...';
	} else {
		$subMenuparenttitle = str_repeat('&nbsp;', $Space).$Submenu;
	}
	return $subMenuparenttitle;
}

$Submenu_Space = 0;
$Submenu_Space_Inc = 1;
$Submenu_MaxChars = 20;
$Show_Articles_In_Submenu = true;

if ($this->level() != 0) {
	$Org_Submenu_Title_Len = strlen($this->parent->title());
	$Submenu_MaxTitle_Len = $Submenu_MaxChars - ($Submenu_Space + $Submenu_Space_Inc);
	$subMenuparenttitle = Get_Short_Menu_Title($this->parent->title(),$Submenu_MaxTitle_Len,$Submenu_Space + $Submenu_Space_Inc);
	echo "<a class='btn' href='".$this->parent->url()."' title='".$this->parent->title()."'>".$subMenuparenttitle."</a><br />";
	$Submenu_Space = $Submenu_Space + $Submenu_Space_Inc;
}

$Org_Submenu_Title_Len = strlen($this->title());
$Submenu_MaxTitle_Len = $Submenu_MaxChars - ($Submenu_Space + $Submenu_Space_Inc);
$subMenuparenttitle = Get_Short_Menu_Title($this->title(),$Submenu_MaxTitle_Len,$Submenu_Space + $Submenu_Space_Inc);
echo "<a class='btn' href='".$this->url()."' title='".$this->title()."'>".$subMenuparenttitle."</a><br />";
$Submenu_Space = $Submenu_Space + $Submenu_Space_Inc;
if (count($this->children()) > 0) {
	if ($this->title() == 'Articles' && $Show_Articles_In_Submenu == True) {
		foreach($this->children() as $subMenu):
		$Org_Submenu_Title_Len = strlen($subMenu->title);
		$Submenu_MaxTitle_Len = $Submenu_MaxChars - ($Submenu_Space + $Submenu_Space_Inc);
		$subMenuparenttitle = Get_Short_Menu_Title($subMenu->title,$Submenu_MaxTitle_Len,$Submenu_Space + $Submenu_Space_Inc);
		echo "<a class='btn' href='".$subMenu->url()."' title='".$subMenu->title."'>".$subMenuparenttitle."</a><br />";
		endforeach;
	} elseif ($this->title() == 'Articles' && $Show_Articles_In_Submenu == False) {
		// Do nothing
	} else {
		foreach($this->children() as $subMenu):
		$Org_Submenu_Title_Len = strlen($subMenu->title);
		$Submenu_MaxTitle_Len = $Submenu_MaxChars - ($Submenu_Space + $Submenu_Space_Inc);
		$subMenuparenttitle = Get_Short_Menu_Title($subMenu->title,$Submenu_MaxTitle_Len,$Submenu_Space + $Submenu_Space_Inc);
		echo "<a class='btn' href='".$subMenu->url()."' title='".$subMenu->title."'>".$subMenuparenttitle."</a><br />";
		endforeach;
	}
}
?>
<!-- END SUBNAV SYSTEM -->