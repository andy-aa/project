<div>
    <form action="<?= $AddURL ?>" method="POST" class="text-center border border-light p-5">
        <?php
            foreach ($ColumnsNames as $name) {
                if ($name != 'id') {
                    echo "<label><input class='form-control mb-4' type='text' name='".$name."' placeholder='".$name."'></label><br/>";
                }
            }
        ?>
        <input class="btn btn-info my-4" type="submit" value="Edit">
    </form>
</div>