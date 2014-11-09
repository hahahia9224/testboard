<?PHP
	class testboardModel extends testboard
	{
		public function triggerModuleListInSitemap(&$arr)
		{
			array_push($arr, 'testboard');
		}
		function getTestboardList($args) // 게시판 글 목록 가져오는 함수
		{
			$output = executeQueryArray("testboard.getTestboardList", $args);
			if(!$output->data) $output->data = array();
			return $output;
		}
		function getTestboard($obj) // board_srl로 특정 글 정보를 가져오는 함수
		{
			$output = executeQueryArray("testboard.getTestboard", $obj);
			if(!$output->data) $output->data = array();
			return $output;
		}
	}
?>
