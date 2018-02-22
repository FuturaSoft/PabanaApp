<?php
namespace App\Controller;

use Pabana\Core\Configuration;
use Pabana\Mvc\Controller;
use Pabana\Routing\Router;

class Index extends Controller
{
    public function index()
    {
        $this->Html->Head->Title->append('Accueil');
        $sOperatingSystem = php_uname('s') . ' ' . php_uname('r') . ' ' . php_uname('v');
        $this->View->setVar('sOperatingSystem', $sOperatingSystem);
        $sTmpPath = APP_ROOT . DS . 'data' . DS . 'tmp';
        $bTmpWritable = is_writable($sTmpPath);
        $this->View->setVar('bTmpWritable', $bTmpWritable);
        $arsAvailableDriver = \PDO::getAvailableDrivers();
        $this->View->setVar('arsAvailableDriver', $arsAvailableDriver);
        $sControllerName = Router::getController();
        $this->View->setVar('sControllerName', $sControllerName);
        $sActionName = Router::getAction();
        $this->View->setVar('sActionName', $sActionName);
        $sControllerPath = APP_ROOT . DS . 'src' . DS . 'Controller' . DS . $sControllerName . '.php';
        $this->View->setVar('sControllerPath', $sControllerPath);
        $sViewPath = APP_ROOT . DS . 'src' . DS . 'View' . DS . $sControllerName . DS . $sActionName . '.php';
        $this->View->setVar('sViewPath', $sViewPath);
    }

    public function config()
    {
        $this->Html->Head->Css->appendFile('overload_phpinfo.css');
        $this->Html->Head->Title->append('Configuration de ' . $_GET['type']);
        $arsConfiguration = Configuration::readAll();
        $this->View->setVar('arsConfiguration', $arsConfiguration);
    }
}
