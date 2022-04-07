<?php

require '../app/Entity/QCM.php';
require_once '../app/Manager/Manager.php';

class QcmManager extends Manager
{

    public function getAll()
    {
        $sql = 'SELECT * FROM qcm';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $qcms = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($qcms as $qcm)
        {
            $result[] = (new QCM())->hydrate($qcm);
        }

        return $result;
    }

    public function insert(string $title) : int
    {
        $sql = "INSERT INTO qcm (title) VALUES (:title)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'title' => $title,
        ]);

        return $this->getPdo()->lastInsertId();
    }

    public function get(int $id) : QCM
    {
        $sql = "SELECT * FROM qcm WHERE id = :id";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        
        $qcm = (new qcm())->hydrate($result);

        return $qcm;
    }

    // public function getQcqR(int $id)
    // {
    //     $sql = "SELECT question.title FROM question INNER JOIN qcm WHERE question.id_qcm = $id";
    //     $req = $this->getPdo()->prepare($sql);
    //     $req->execute();
    //     $result = $req->fetch(PDO::FETCH_ASSOC);
        
    //     $qcmQ = (new qcm())->hydrate($result);

    //     return $this;
    // }

}