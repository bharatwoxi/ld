<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Mr. Bharat Makwana.
 * User: woxiprogrammers
 * Date: 16/11/15
 * Time: 11:58 PM
 */
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['user_role'] = $session_data['user_role'];
            $data['firstname'] = $session_data['firstname'];
            $data['lastname'] = $session_data['lastname'];
            $data['created_at'] = $session_data['created_at'];

            if ($session_data['user_role'] == 'admin') {
                $this->load->view('header/admin_header');
                $this->load->view('admin/home_view', $data);
                $this->load->view('footer/admin_footer');
            } else if ($session_data['user_role'] == 'sponsor') {
                $this->load->view('sponsor/home_view', $data);
            } else if ($session_data['user_role'] == 'advertiser') {
                $this->load->view('advertiser/home_view', $data);
            } else if ($session_data['user_role'] == 'player') {
                $this->load->view('player/home_view', $data);
            }

        } else {
            //If no session, redirect to login page
            redirect('master', 'refresh');
	    }
    }
  
    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }
}

/* End of file home.php */
/* Location: ./application/controller/home.php */
