
<div>
    <h1>Delete Term</h1>
    <h2>Are you sure you want to delete <?= $model->term ?></h2>
    <form action="" method="POST">
        <input type="hidden" name="term" value="<?= $model->id ?>">
        <input type="submit" value="Delete">
    </form>
</div>