<div>
    <form action="<?= $EditURL ?>" method="POST" class="text-center border border-light p-5">
        <?php
            foreach ($edit as $key => $value) {
                if ($key != 'id') {
                    echo $key."<br><label><input class='form-control mb-4' type='text' name='".$key."' value='".$value."'></label><br/>";
                }
            }
        ?>
        <input class="btn btn-info my-4" type="submit" value="Edit">
    </form>
</div>