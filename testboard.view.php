<?PHP
    class testboardView extends testboard
    {
        function init()
        {
        }

        function dispTestboardList()
        {
            $args->page = Context::get('page');

            $oTestboardModel = &getModel('testboard'); // testboard 모델을 가져옴
            $output = $oTestboardModel->getTestboardList($args); // 모델에서 구현한 List함수 사용

            Context::set('testboard_list', $output->data); // 게시판 값들을 testboard_list 변수에 저장
            Context::set('total_count', $output->total_count);
            Context::set('total_page', $output->total_page);
            Context::set('page', $output->page);
            Context::set('page_navigation', $output->page_navigation);
            $this->setTemplatePath($this->module_path.'tpl');
            $this->setTemplateFile('testboard_list');

        }
        
        function dispTestboardWriteform()
        {
            $args->page = Context::get('page');
            $this->setTemplatePath($this->module_path.'tpl');
            $this->setTemplateFile('writeform');
        }
        
        function dispTestboarddetailView()
        {
            $args->page = Context::get('page');
            $oTestboardModel = &getModel('testboard');
            $obj = Context::getRequestVars();

            $output = $oTestboardModel->getTestboard($obj);

            if(!$output->data)
            {
                return new Object(-1, 'document is not exists');
            }

            Context::set('testboard', $output->data[0]); // 게시판 값 testboard 변수에 저장
            $this->setTemplatePath($this->module_path.'tpl');
            $this->setTemplateFile('detailView');
        }
        
        function dispTestboardDelete()
        {
            $args->page = Context::get('page');
            $obj = Context::getRequestVars();
            $oTestboardModel = &getModel('testboard');

            $output = $oTestboardModel->getTestboard($obj);
            
            if(!$output->data)
            {
                return new Object(-1, 'document is not exists'); // board_srl로 찾았을 때 문서가 없을 때
            }

            Context::set('testboard', $output->data[0]); // 게시판 값 testboard 변수에 저장
            $this->setTemplatePath($this->module_path.'tpl');
            $this->setTemplateFile('testboard_delete');
        }
    }
?>