<?php
namespace App\Controller;

use Pabana\Mvc\Controller;

class Error extends Controller
{
    public function index()
    {
    	$this->Html->Head->Title->append('Erreur ' . $_GET['code']);
    }
}
?>