<?PHP
	class testboardModel extends testboard
	{
		public function triggerModuleListInSitemap(&$arr)
		{
			array_push($arr, 'testboard');
		}
		function getTestboardList($args)
		{
			$output = executeQueryArray("testboard.getTestboardList", $args);
            if(!$output->data) $output->data = array();
            return $output;
		}
		function getTestboard($obj)
		{
            $output = executeQueryArray("testboard.getTestboard", $obj);
            if(!$output->data) $output->data = array();
            return $output;
		}
	}
?>
