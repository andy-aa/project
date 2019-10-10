<?php

echo "<div class='w-50'>";
echo "<table class='table table-striped table-dark'>";

foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>"; 