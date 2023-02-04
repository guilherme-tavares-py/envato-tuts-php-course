
<div>
    <h1>Edit a Term</h1>
    <form action="" method="POST">
        <input type="hidden" name="original-term" value="<?= $model->id ?>">
        <label for="term">Term:</label><br>
        <input type="text" name="term" id="term" value="<?= $model->term; ?>"/><br>
        <label for="definition">Definition:</label><br>
        <textarea name="definition" id="definition"><?= $model->definition; ?></textarea><br>
        <input type="submit" name="newTerm" value="Edit">
    </form>
</div>