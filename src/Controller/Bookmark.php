<?php
namespace App\Controller;

use Pabana\Mvc\Controller;

class Bookmark extends Controller
{
	public function index()
	{
		$this->Html->Head->Title->append('Exemple "Bookmark"');
		$oBookmark = $this->Model->get('Bookmark');
		$armBookmarkList = $oBookmark->getList();
		$this->View->setVar('armBookmarkList', $armBookmarkList);
	}

	public function createForm()
	{
		$this->Html->Head->Title->append('Ajouter un marque page');
	}

	public function create()
	{
		$this->Layout->setAutorender(false);
		$this->View->setAutorender(false);
		$sName = htmlentities(trim($_POST['name']));
		$sUrl = htmlentities(trim($_POST['url']));
		if (empty($sName)) {
			header('Location: /sample/bookmark/create-form/error/empty_name');
			exit();
		} else if (empty($sUrl)) {
			header('Location: /sample/bookmark/create-form/error/empty_url');
			exit();
		} else if (!filter_var($sUrl, FILTER_VALIDATE_URL))  {
			header('Location: /sample/bookmark/create-form/error/unvalid_url');
			exit();
		}
		$oBookmark = $this->Model->get('Bookmark');
		$oBookmark->create($sName, $sUrl);
		header('Location: /sample/bookmark');
		exit();
	}

	public function modifyForm()
	{
		$this->Html->Head->Title->append('Modifier un marque page');
		$nId = htmlentities(trim($_GET['id']));
		if (empty($nId)) {
			header('Location: /sample/bookmark');
			exit();
		} 
		$this->View->setVar('nId', $nId);
		$oBookmark = $this->Model->get('Bookmark');
		$armBookmark = $oBookmark->getById($nId);
		$this->View->setVar('armBookmark', $armBookmark);
	}

	public function modify()
	{
		$this->Layout->setAutorender(false);
		$this->View->setAutorender(false);
		$nId = htmlentities(trim($_GET['id']));
		$sName = htmlentities(trim($_POST['name']));
		$sUrl = htmlentities(trim($_POST['url']));
		if (empty($nId)) {
			header('Location: /sample/bookmark');
			exit();
		} else if (empty($sName)) {
			header('Location: /sample/bookmark/modify-form/' . $nId . '/error/empty_name');
			exit();
		} else if (empty($sUrl)) {
			header('Location: /sample/bookmark/modify-form/' . $nId . '/error/empty_url');
			exit();
		} else if (!filter_var($sUrl, FILTER_VALIDATE_URL))  {
			header('Location: /sample/bookmark/modify-form/' . $nId . '/error/unvalid_url');
			exit();
		}
		$oBookmark = $this->Model->get('Bookmark');
		$oBookmark->modify($nId, $sName, $sUrl);
		header('Location: /sample/bookmark');
		exit();
	}

	public function deleteForm()
	{
		$this->Html->Head->Title->append('Supprimer un marque page');
		$nId = htmlentities(trim($_GET['id']));
		if (empty($nId)) {
			header('Location: /sample/bookmark');
			exit();
		} 
		$this->View->setVar('nId', $nId);
		$oBookmark = $this->Model->get('Bookmark');
		$armBookmark = $oBookmark->getById($nId);
		$this->View->setVar('armBookmark', $armBookmark);
	}

	public function delete()
	{
		$this->Layout->setAutorender(false);
		$this->View->setAutorender(false);
		$nId = htmlentities(trim($_GET['id']));
		if (empty($nId)) {
			header('Location: /sample/bookmark');
			exit();
		}
		$oBookmark = $this->Model->get('Bookmark');
		$oBookmark->delete($nId);
		header('Location: /sample/bookmark');
		exit();
	}
}