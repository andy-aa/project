<div>
    <form action="<?= $URL ?>" method="POST" class="text-center border border-light p-5">
        <?php
            foreach ($columnsNames as $name) {
                if ($name != 'id') {
                    if ($name == 'user_group_id') {
                        echo "<select name='user_group_id'>";

                        foreach ($userGroup as $id => $groupName) {
                            echo "<option value='$id'>$groupName</option>";
                        }

                        echo "</select>";
                    } else {
                        echo $name . "<br><label><input class='form-control mb-4' type='text' name='" 
                        . $name . "' value='"
                        .($editValues[$name] ?? '')."'></label><br/>";
                    }
                }
            }
        ?>
        <br><input class="btn btn-info my-4" type="submit" value="OK">
    </form>
</div>