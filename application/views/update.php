<?php
$sql = "UPDATE `iNations`.`nation_info` SET `nation_collected_taxes` = '0' WHERE `nation_info`.`nation_collected_taxes` = '1' LIMIT 10";
$rs = mysql_query($sql);
$sql = "UPDATE `iNations`.`nation_info` SET `nation_paid_bills` = '0' WHERE `nation_info`.`nation_paid_bills` = '1' LIMIT 10";
$rs = mysql_query($sql);
$sql = "UPDATE `iNations`.`nation_info` SET `nation_developed_nuclear_weapon` = '0' WHERE `nation_info`.`nation_developed_nuclear_weapon` = '1' LIMIT 10";
$rs = mysql_query($sql);
?>