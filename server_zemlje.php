<?php
include 'inicijalizacija.php';

$zemlje = $konekcija->vratiSve('zemlja_porekla');

foreach ($zemlje as $zemlja){
    ?>
    <option value="<?= $zemlja->zemljaPoreklaID?>"><?= $zemlja->naziv?></option>
<?php
}