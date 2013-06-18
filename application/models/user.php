
<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

Class User extends CI_Controller
{
     function __construct(){
		parent::__construct();
                //echo "entro aqui";
		$this->load->database();
                //echo "entro aqui";
	}
 function login($username, $password)
 {
     
     echo "entro aqui";
     printf($username);
     printf($password);
     $sql = "select nick, clave from login where nick = 'jonathan' and clave = 'jonathan'";
        //$sql = "Select prc_sesion_login(?,?);";
     //$query = $this->db->query($sql,array($username,$password));
     $query = $this->db->query($sql);
   if($query -> num_rows() == 1)
   {
        echo 'en el if';
     return $query->result();
   }
   else
   {
     return false;
     echo 'en el else';
   }
   
   echo 'a fuera';
 }
}
?>

