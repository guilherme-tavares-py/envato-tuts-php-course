
<div>
    <h1><?= $view_bag['heading'] ?></h1>
    <form action="" method="GET">
        <input type="text" name="search" id="search">
        <input type="submit">
    </form>
    <table class="table table-striped">

        <?php foreach($model as $item) : ?>

            <tr>
                <td><a href="detail.php?term=<?= $item->id ?>"><?= $item->term ?></a></td>
                <td><?= $item->definition ?></td>
            </tr>

        <?php endforeach; ?>


    </table>
</div>