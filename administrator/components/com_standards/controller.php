<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * General Controller of Standards component
 */
class StandardsController extends JController
{
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) 
	{
		// set default view if not set
 
		$input = JFactory::getApplication()->input;
		$controller->execute($input->getCmd('task'));
		$input->set('view', $input->getCmd('view', 'Standards'));
 
		// call parent behavior
		parent::display($cachable);
	}
}