<div>
    <form action="<?= $EditURL ?>" method="POST" class="text-center border border-light p-5">
        <?php

        foreach ($edit as $fieldName => $value) {
            if ($fieldName != 'id') {
                if ($fieldName == 'user_group_id') {
                    echo "<select name='user_group_id'>";

                    foreach ($description as $id => $groupName) {
                        echo "<option value='$id' ".($value == $id ? 'selected' : '').">$groupName</option>";
                    }

                    echo "</select>";
                } else {
                    echo $fieldName . "<br><label><input class='form-control mb-4' type='text' name='" . $fieldName . "' value='" . $value . "'></label><br/>";
                }
            }
        }
        ?>
        <input class="btn btn-info my-4" type="submit" value="Edit">
    </form>
</div>

123