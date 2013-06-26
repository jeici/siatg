<?php
class Logeo extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('logeo_model');
        $this->load->library('session');
        
        
        
        
       
    }
    
    public function usuario(){
        
                                 
            $data['title']='SISTEMA DE ADMINISTARCION DE TRABAJOS DE GRADUACION';//esta variable se imprime en el 
            //header en el tag title
            $data['main_content']='form_logeo';
            $data['title']='Ingresar';
            
            $data['logeo']=0;
            $this->load->view('includes/templatelogeo',$data);

        
    }
    
    public function recibir_datos(){
        
              $this->form_validation->set_rules('username','Usuario','required|min_lenght[5]|max_lenght[20]');
              $this->form_validation->set_rules('password','Password','required');
              $this->form_validation->set_message('required', 'este campo es requerido');
       
            if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
            {
            $this->usuario();
            }
            else
            {
                $a1 = $this->input->post('username');
                $a2 = $this->input->post('password');
               $log= $this->logeo_model->obtener_logeo($a1,$a2);
               
               if($log)
               {
                   $sesion_data = array(
                                    'username' => $_POST['username'],
                                    'password' => $_POST['password']
                                        );
                    $this->session->set_userdata($sesion_data);
               
                $data['username'] = $this->session->userdata['username'];
                $data['password'] = $this->session->userdata['password'];
                
                   
                $this->load->view('login_success',$data); 
               }
               else
                {
                // si es erroneo, devolvemos un mensaje de error
                //$this->logeo_model->close();
                $this->load->view('login_error');
                }
           
        
            }
    }
    
    public function data()
    {
        if($this->session->userdata['username'] == TRUE)
        {
        echo $this->session->userdata['username'];
        echo "<br>";
        echo $this->session->userdata['password'];
        }
    }
   
   
    public function destroy()
    {
    //destruimos la sesión
    $this->logeo_model->close();
 
        echo "Sesión borrada"."<br>";
       
 
    }
   
   
    public function perfil()
    {
    //pagina restringida a usuarios registrados.
    $logged = $this->logeo_model->isLogged();
       
        if($logged == TRUE)
        {
        echo "Tienes permiso para ver el contenido privado";
        }
        else
        {
        //si no tiene permiso, abrimos el formulario para loguearse
        $this->load->view('form_logeo');
        }
    }
}
/*class Logeo extends CI_Controller
{
 
    function __construct()
    {
    parent:: __construct();
    $this->load->model('logeo_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    }
   
    function index()
    {
 
   
        if(!isset($_POST['username']))
        {
        $this->load->view('form_logeo'); //si no recibimos datos por post, cargamos la vista del formulario
        }
        else
        {
        //definimos las reglas de validación
       
        $this->form_validation->set_rules('username','Usuario','required|min_lenght[5]|max_lenght[20]');
        $this->form_validation->set_rules('password','Password','required');
       
            if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
            {
            $this->load->view('form_logeo');
            }
            else
            {
            $isValidLogin = $this->logeo_model->getLogin($_POST['username'],$_POST['password']); //pasamos los valores al modelo para que compruebe si existe el usuario con ese password
           
                if($isValidLogin)
                {
                // si existe el usuario, registramos las variables de sesión y abrimos la página de exito
               
                    $sesion_data = array(
                                    'username' => $_POST['username'],
                                    'password' => $_POST['password']
                                        );
                    $this->session->set_userdata($sesion_data);
               
                $data['username'] = $this->session->userdata['username'];
                $data['password'] = $this->session->userdata['password'];
                   
                $this->load->view('login_success',$data);
                }
                else
                {
                // si es erroneo, devolvemos un mensaje de error
                $this->load->view('login_error');
                }
            }
       
       
        }
       
       
    }
   
   
   
 
    function data()
    {
        if($this->session->userdata['username'] == TRUE)
        {
        echo $this->session->userdata['username'];
        echo "<br>";
        echo $this->session->userdata['password'];
        }
    }
   
   
    function destroy()
    {
    //destruimos la sesión
    $this->login_model->close();
 
        echo "Sesión borrada"."<br>";
       
 
    }
   
   
    function perfil()
    {
    //pagina restringida a usuarios registrados.
    $logged = $this->login_model->isLogged();
       
        if($logged == TRUE)
        {
        echo "Tienes permiso para ver el contenido privado";
        }
        else
        {
        //si no tiene permiso, abrimos el formulario para loguearse
        $this->load->view('login');
        }
    }
   
   
 
   
 
}*/

?>