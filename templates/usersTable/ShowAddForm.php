<div>
    <form action="<?= $AddURL ?>" method="POST" class="text-center border border-light p-5">
        <?php
            foreach ($ColumnsNames as $name) {
                if ($name != 'id') {
                    if ($name == 'user_group_id') {
                        echo "<select name='user_group_id'>";

                        foreach ($description as $id => $groupName) {
                            echo "<option value='$id'>$groupName</option>";
                        }

                        echo "</select>";
                    } else {
                        echo $name . "<br><label><input class='form-control mb-4' type='text' name='" . $name . "'></label><br/>";
                    }
                }
                
            }
        ?>
        <input class="btn btn-info my-4" type="submit" value="Add">
    </form>
</div>