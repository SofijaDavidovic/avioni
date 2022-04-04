<?php
include 'inicijalizacija.php';

$tip = trim($_GET['tip']);
$sort = trim($_GET['sort']);

$podaci = $konekcija->pretrazi($tip, $sort);

?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Model</th>
            <th>Opis</th>
            <th>Tip</th>
            <th>Zemlja porekla</th>
        </tr>
    </thead>
    <tbody>
 <?php

foreach ($podaci as $avion){
    ?>
    <tr>
        <td><?= $avion->model ?></td>
        <td><?= $avion->opis ?></td>
        <td><?= $avion->nazivTipa ?></td>
        <td><?= $avion->naziv ?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>
