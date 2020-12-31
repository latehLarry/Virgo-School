<?php 
/**
 * Class Frontoffice.
 *
 * @category Virgo-School
 *
 * @package Virgo-School
 * @author  virgotech llc
 * @license contact us lvirgotech@gmail.com
 * @link    https://github.com/latehLarry/Virgo-School.git
 */

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