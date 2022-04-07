<?php 
require '../template/partials/_top.tpl.php';
// SELECT question.title FROM question INNER JOIN qcm WHERE question.id_qcm = qcm.id;
?>

<div class="container">
    <h1>Intitulé du QCM</h1>
    <h2><?= $qcm->getTitle($_GET['id']);?></h2>
    <a href="/new-question.php?id=<?=$_GET['id']?>">Ajouter une question</a>
    <ol>
        <?php foreach($question as $q): ?>
            <li><?= $q->getTitle()?></li>
                <ol>
                    <?php foreach($answers as $answer):?>
                        <li><?=$answer->getAll()?></li>
                    <?php endforeach; ?>
                </ol>
            <?php endforeach; ?>
            <ol>
        
        </ol>    
    </ol>
    
    </div>

    <!-- <div class="container">
        <form action="" method="POST">
            <label>Ajouter une question</label>
            <input type="text" name="title" required/>
            <input type="submit" name="submit" value="Enregistrer" />
        </form>
    </div> -->
    
    
    
    
    <?php require '../template/partials/_bottom.tpl.php'; ?>
    
