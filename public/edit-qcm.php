<?php

if(isset($_GET['id']))
{

    $message = "";

    // Récupère les données de la question dont l'id est == à $_GET['id']
    require '../app/Manager/QuestionManager.php';
    $questionManager = new QuestionManager();
    $question = $questionManager->getAllQcm($_GET['id']);
    // $questionManager = $manager->insert($_POST['title'], $_POST['id_qcm']);

    require '../app/Manager/QcmManager.php';
    $qcmManager = new QcmManager();
    $qcm = $qcmManager->get($_GET['id']);

    require '../app/Manager/AnswerManager.php';
    $answerManager = new AnswerManager();
    $answers = $answerManager->getAll();
    // $answers = $answerManager->get($_GET['id']);





    // if(isset($_POST['submit']))
    // {
    //     try
    //     {
    //         $formErrors = [];
    //         if(empty($_POST['title']))
    //             $formErrors[] = "Le titre est obligatoire";

    //         if(count($formErrors) > 0)
    //             throw new Exception(implode("<br />", $formErrors));

    //         $qcmManager->update($_GET['id'], $_POST['title']);
    //         header('Location: /index.php');
    //     }
    //     catch(Exception $e)
    //     {
    //         $message = $e->getMessage();
    //     }
        
    // }

    require '../template/edit-qcm.tpl.php';
}