<?php

require '../app/Manager/QcmManager.php';
$qcmManager = new QcmManager();
$qcms = $qcmManager->getAll();

require '../app/Manager/QuestionManager.php';
$questionManager = new QuestionManager();
$questions = $questionManager->getAll();

require '../app/Manager/AnswerManager.php';
$answerManager = new AnswerManager();
$answers = $answerManager->getAll();

$message = "";

if(isset($_POST['submit']))
{
    if(!empty($_POST['text']))
    {
        require '../app/Manager/AnswerManager.php';
        $manager = new AnswerManager();
        $qcmId = $manager->insert($_POST['text']);

        if($qcmId)
        {
            header('Location: /new-answer.php'); die;
        }
        else
        {
            $message = "Une erreur s'est produite lors de l'enregistrement";
        }
    }
    else
    {
        $message = "Le titre est obligatoire";
    }
}


require '../template/new-answer.tpl.php';