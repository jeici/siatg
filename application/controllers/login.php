
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form'));
   //$this->load->view('login_view');
   $data['main_content']='login_view';
    
   $this->load->view('includes/templatelogin',$data);
 }

}

?>

