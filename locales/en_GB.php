<?php
/*
 * @version $Id: setup.php,v 1.2 2006/04/02 14:45:27 moyo Exp $
 ---------------------------------------------------------------------- 
 GLPI - Gestionnaire Libre de Parc Informatique 
 Copyright (C) 2003-2008 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org/
 ----------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file: AL-Rubeiy Hussein
// Purpose of file:
// ----------------------------------------------------------------------

$title="Tree View";

$LANG['plugin_treeview']['title'][0] = "".$title."";

$LANG['plugin_treeview']['profile'][0] = "Rights management";
$LANG['plugin_treeview']['profile'][1] = "$title";
$LANG['plugin_treeview']['profile'][3] = "Use the tree";
$LANG['plugin_treeview']['profile'][4] = "List of profiles already configured";

$LANG['plugin_treeview']['setup'][1] = "Install $title plugin 1.1";
$LANG['plugin_treeview']['setup'][2] = "Setup of plugin ".$title."";
$LANG['plugin_treeview']['setup'][3] = "Update $title to version 1.1";
$LANG['plugin_treeview']['setup'][4] = "Uninstall $title plugin 1.1";
$LANG['plugin_treeview']['setup'][5] = "Warning, the uninstallation of the plugin is irreversible.<br> You will loose all the data.";
$LANG['plugin_treeview']['setup'][6] = "Display";
$LANG['plugin_treeview']['setup'][7] = "Yes";
$LANG['plugin_treeview']['setup'][8] = "No";
$LANG['plugin_treeview']['setup'][9] = "Target for all the nodes";
$LANG['plugin_treeview']['setup'][10] = "Should folders be links";
$LANG['plugin_treeview']['setup'][11] = "Nodes can be highlighted";
$LANG['plugin_treeview']['setup'][13] = "Tree is drawn with lines";
$LANG['plugin_treeview']['setup'][14] = "Tree is drawn with icons";
$LANG['plugin_treeview']['setup'][16] = "Only one node within a parent<br>can be expanded at the same time.";
$LANG['plugin_treeview']['setup'][17] = "New window";
$LANG['plugin_treeview']['setup'][18] = "You cannot use this plugin on helpdesk";
$LANG['plugin_treeview']['setup'][20] = "The central console";
$LANG['plugin_treeview']['setup'][21] = "Item name";
$LANG['plugin_treeview']['setup'][22] = "Location name";
$LANG['plugin_treeview']['setup'][23] = "Name";
$LANG['plugin_treeview']['setup'][24] = "Inventory number";
$LANG['plugin_treeview']['setup'][25] = "Short name";
$LANG['plugin_treeview']['setup'][26] = "Long name";
$LANG['plugin_treeview']['setup'][27] = "Comment";
$LANG['plugin_treeview']['setup'][28] = "Instructions";
$LANG['plugin_treeview']['setup'][29] = "FAQ";
$LANG['plugin_treeview']['setup'][30] = "Merci de vous placer sur l'entit้ racine (voir tous)";
$LANG['plugin_treeview']['setup'][31] = "Launch the plugin Treeview with GLPI launching";
$LANG['plugin_treeview']['setup'][32] = "Warning : If there are more than one plugin which be loaded at startup, then only the first will be used";

$LANG['plugin_treeview']['warning'][0] = "freport plugin does not exist";

?>