<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;

//Get the user type
$user = JFactory::getUser();
$menu = Menu::getMenu($user->tipo);
BasicPageHelper::iniPage( $user->username, $menu);
PageHelper::initPage("Referidos 1.0", "Estadisticas de la plataforma"); 
?>

<?php

		/*PageHelper::initRow();
			GraphicButtonHelper::show("user", "30", "Usuarios", "index.php?option=com_ztadmin&task=userList", "Ver usuarios registrados", 3, "red"); 
			GraphicButtonHelper::show("warning-sign", "5", "Vencidos", "index.php?option=com_ztadmin&task=predictList", "Ver todos", 3, "blue"); 
			GraphicButtonHelper::show("folder-open", "3", "Sin asignar", "index.php?option=com_ztadmin&task=pointList", "Ver casos no asignados", 3, "green"); 
			GraphicButtonHelper::show("dashboard", "Ver", "Reportes", "index.php?option=com_ztadmin&task=matchList", "Ver reportes", 3, "yellow"); 
		PageHelper::endRow();
		
		PageHelper::separator();
		
		PageHelper::initRow();
			GraphicButtonHelper::show("check", "", "Revisi&oacute;n", "index.php", "Revisión indicadores",6); 
			GraphicButtonHelper::show("bar-chart", "Encuesta", "", "index.php", "Ver/Editar",6); 
		PageHelper::endRow();	
		*/
					
		/*PageHelper::initRow();
			PageHelper::span(6);
				PortletHelper::show("Promedio de notas", "Refrescar", "red");
					
				PortletHelper::end();
			PageHelper::endSpan();
			
			PageHelper::span(6);
				PortletHelper::show("Promedio de notas", "Refrescar");
					
				PortletHelper::end();
			PageHelper::endSpan();
		PageHelper::endRow();
		*/
		?>
		
		
		
				
<?php 
	BasicPageHelper::endPage(); 
	JsHelper::addJQueryFlot();
?>
	
<?php

	
	
	//Use the breadcrumb
	PageHelper::addInitialBreadcrumb("Referidos","index.php");
	//PageHelper::addBreadcrumb("Proyecto Polla Mundialista","index.php");
	PageHelper::addFinalBreadcrumb("Dashboard");
	
	//Limpia el breadcrumb
	//echo PageHelper::cleanBreadcrumb();
?>




