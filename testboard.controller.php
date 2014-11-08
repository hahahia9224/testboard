<?PHP
    class testboardController extends testboard
    {
        function procTestboardWritePage()
        {
            $obj = Context::getRequestVars();
            $obj->board_srl = getNextSequence();
            if(Context::get('is_logged')){
            	$logged_info = Context::get('logged_info');
            	$obj->writer = $logged_info->user_id;
            }
            $obj->reg_date = date("YmdHis");
            $output = executeQuery("testboard.insertTestboard", $obj);
        }
        function procTestboardDeletePage()
        {
            $obj = Context::getRequestVars();
            $output = executeQuery('testboard.deleteTestboard', $obj);

        }
    }
?>