<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


    public function cekAdmin()
    {
        if(!isset($_SESSION['admin'])){
            
            redirect(base_url('admin/auth/login'),'refresh');
            
        }
    }

    public function cekUser()
    {
        if(!isset($_SESSION['user'])){
            
            redirect(base_url('auth/login'),'refresh');
            
        }
    }
    
    

}

/* End of file MY_Controller.php */
