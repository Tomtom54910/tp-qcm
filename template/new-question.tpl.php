<?php require '../template/partials/_top.tpl.php'; ?>
<div class="container">
    <h2><?= $qcmTitre->getTitle($_GET['id']);?></h2>
    <ol>
        <?php foreach ($questions as $question): ?>
            <li><?= $question->getTitle() ?></li>
            <?php endforeach ?>
    </ol>
    <form action="" method="POST">
        <label>Intitulé de la question</label>
        <input type="text" name="title" required/>
        <input type="number"  name="id_qcm" value='<?= $_GET['id']?>'required/>

        <input type="submit" name="submit" value="Enregistrer" />

        
    </form>
    <?php if(!empty($message)): ?>
    <div class="alert">
        <?= $message ?>
    </div>
    <?php endif; ?>
</div>

<?php require '../template/partials/_bottom.tpl.php'; ?>
