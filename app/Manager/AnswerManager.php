<?php

require '../app/Entity/Answer.php';
require_once '../app/Manager/Manager.php';

class AnswerManager extends Manager
{
    public function getAll()
    {
        $sql = 'SELECT * FROM answer';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $questions = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($questions as $question)
        {
            $result[] = (new Answer())->hydrate($question);
        }

        return $result;
        // var_dump($result);

    }

    public function get(int $id) : Answer
    {
        $sql = 'SELECT * FROM `answer` ';
        $req = $this->getPdo()->prepare($sql);
        $req->execute(['id' => $id]);
        $repQuestions = $req->fetchAll(PDO::FETCH_ASSOC);
        $result[] = (new Answer())->hydrate($repQuestions);
        

        return $result;
        // var_dump($result);

    }

    public function insert(string $text) : int
    {
        $sql = "INSERT INTO answer ('text') VALUES (:'text')";
        $req = $this->getPdo()-prepare($sql);
        $req->execute([
            'text' => $text,
        ]);

        return $this->getPdo()->lastInsertId();
    }
}