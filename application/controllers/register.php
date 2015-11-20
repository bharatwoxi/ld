<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Mr. Bharat Makwana.
 * User: woxiprogrammers
 * Date: 19/11/15
 * Time: 12:36 AM
 */

class Register extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        echo "Register Logic Here";
        echo "<br/><a href='master'> LogOut </a>";
    }
}