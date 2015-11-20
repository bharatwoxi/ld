<?php
/**
 * Created by Mr. Bharat Makwana.
 * User: woxiprogrammers
 * Date: 17/11/15
 * Time: 12:46 AM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class custom404 extends CI_Controller {

    public function index()
    {
        $this->load->view('header/main_header');
        $this->load->view('404/404');
        $this->load->view('footer/main_footer');
    }
}

/* End of file master.php */
/* Location: ./application/controllers/master.php */