<div>
    <form action="<?= $AddURL ?>" method="POST" class="text-center border border-light p-5">
        <?php
            foreach ($Add as $key => $value) {
                if ($key != 0) {
                    echo "<label><input class='form-control mb-4' type='text' name='".$value."' placeholder='".$value."'></label><br/>";
                }
            }
        ?>
        <input class="btn btn-info my-4" type="submit" value="Edit">
    </form>
</div>