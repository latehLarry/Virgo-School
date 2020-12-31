<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Frontoffice extends Controller {

    public function index() {
        return view('welcome_message');
    }

    public function view($frontoffice = 'home') {
        if(!is_file(APPPATH . '/Views/frontoffice/' . $frontoffice . '.php')) {
            //show 404 page not found
            throw new \CodeIgniter\Exceptions\PageNotFoundException($frontoffice);
        }

        $data['title'] = ucfirst($frontoffice);

        echo view('templates/frontoffice-inc/header', $data);
        echo view('frontoffice/' . $frontoffice, $data);
        echo view('templates/frontoffice-inc/footer', $data);

    }
}