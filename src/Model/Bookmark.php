<?php
namespace App\Model;

use Pabana\Mvc\Model;

class Bookmark extends Model
{
    public function create($sName, $sUrl)
    {
        $sInsert = "INSERT INTO t_bookmark(bok_name, bok_url)
        VALUES('" . addslashes($sName) . "', '" . addslashes($sUrl) . "')";
        return $this->Connection->exec($sInsert);
    }

    public function getById($nBokId)
    {
        $sSelectById = "SELECT bok_id, bok_name, bok_url
        FROM t_bookmark
        WHERE bok_id = " . $nBokId;
        $oStatById = $this->Connection->query($sSelectById);
        $armById = $oStatById->fetch();
        if(!empty($armById)) {
            return $armById;
        } else {
            return false;
        }
    }

    public function getList()
    {
        $sSelectList = "SELECT bok_id, bok_name, bok_url
        FROM t_bookmark
        ORDER BY bok_id";
        $oStatList = $this->Connection->query($sSelectList);
        $armList = $oStatList->fetchAll();
        if(!empty($armList)) {
            return $armList;
        } else {
            return false;
        }
    }

    public function modify($nId, $sName, $sUrl)
    {
        $sUpdate = "UPDATE t_bookmark
        SET bok_name = '" . addslashes($sName) . "', bok_url = '" . addslashes($sUrl) . "'
        WHERE bok_id = " . $nId;
        return $this->Connection->exec($sUpdate);
    }

    public function delete($nId)
    {
        $sDelete = "DELETE FROM t_bookmark
        WHERE bok_id = " . $nId;
        return $this->Connection->exec($sDelete);
    }
}