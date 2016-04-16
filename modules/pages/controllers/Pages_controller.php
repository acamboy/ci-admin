<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_controller extends Base_Controller {

    public function index() {

        $this->template
            ->build('page_view');
    }
}

/* End of file Pages_controller.php */
/* Location: ./applications/admin/modules/pages/controllers/Pages_controller.php */