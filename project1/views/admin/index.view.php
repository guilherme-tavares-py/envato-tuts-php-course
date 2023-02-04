
<div>
    <h1><?= $view_bag['heading'] ?></h1>
    <a href="create.php">Create a New Term</a>
    <table class="table table-striped">

        <?php foreach($model as $item) : ?>

            <tr>
                <td><a href="edit.php?term=<?= $item->id ?>">Edit</a></td>
                <td><?= $item->term ?></a></td>
                <td><?= $item->definition ?></td>
                <td><a href="delete.php?term=<?= $item->id ?>">Delete</a></td>
            </tr>

        <?php endforeach; ?>


    </table>
</div>