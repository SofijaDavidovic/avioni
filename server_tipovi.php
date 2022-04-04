<?php
include 'inicijalizacija.php';

$tipovi = $konekcija->vratiSve('tip');

?>
    <option value="SVI_TIPOVI">Svi tipovi</option>
<?php

foreach ($tipovi as $tip){
    ?>
    <option value="<?= $tip->tipID?>"><?= $tip->nazivTipa?></option>
<?php
}