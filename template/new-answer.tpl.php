<?php require '../template/partials/_top.tpl.php';?>
<div class="container">
    <form action="" method="POST">
        <label>
            <?php foreach($questions as $question):
                echo $question->getTitle()?>
        </label>
        <ol>
        <?php foreach($answers as $answer):?>
        <li><input type="text" value="<?=$answer->getText()?>" name="text" required/></li>
        <?php endforeach; ?>
        <li><input type="text" name="addAnswer" id="addAnswer" placeholder="Ajouter une réponse"></li>
        </ol>
        <input type="submit" name="submit" value="Enregistrer" />
            <?php endforeach;  ?>
            <select name="id_qcm">
                <?php foreach($qcms as $qcm): ?>
                    <option value="<?= $qcm->getId() ?>"><?= $qcm->getTitle() ?></option>
                    <?php endforeach; ?>
                </select>
            </form>
            <?php if(!empty($message)): ?>
                <div class="alert">
                    <?= $message ?>
                </div>
                <?php endif; ?>
            </div>
            <?php var_dump($_POST); exit; ?>

<?php require '../template/partials/_bottom.tpl.php'; ?>

<!-- SELECT * FROM `answer` 
INNER JOIN question
INNER JOIN qcm
WHERE answer.id_question = question.id AND qcm.id = question.id_qcm -->


