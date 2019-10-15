<?php

$paginationHTML="<nav aria-label='Page navigation example'><ul class='pagination'>";
for ($i=1; $i <= $pageCount; $i++) { 
    $paginationHTML.= '<li class="page-item"><a class="page-link" href="'.$paginationLink.$i.'">'.$i.'</a></li>';
}
$paginationHTML.="</ul></nav>";

echo $paginationHTML;

echo "<div class='container'><div class='row justify-content-center'>";
echo "<table class='table table-striped table-dark'>";

foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='?t=usergroup&a=ShowEditForm&id=".$row['id']."' class='btn btn-warning'>Edit</a></td>";
    echo "<td><a href='?t=usergroup&a=Delete&id=".$row['id']."' class='btn btn-danger'>Delete</a></td></tr>";
}
echo "</table>";
echo "<a href='?t=usergroup&a=ShowAddForm' class='btn btn-success'>Add new</a>";
echo "</div></div>"; 
echo $paginationHTML;