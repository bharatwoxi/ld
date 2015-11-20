<?php
/**
 * Created by Mr. Bharat Makwana.
 * User: woxiprogrammers
 * Date: 16/11/15
 * Time: 11:58 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('header/main_header');
        $this->load->view('login_view');
        $this->load->view('footer/main_footer');
    }

    function register() {
        $this->load->view('header/main_header');
        $this->load->view('register_view');
        $this->load->view('footer/main_footer');
    }

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */