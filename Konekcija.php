<?php

class  Konekcija{

    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root','','avioni');
        $this->konekcija->set_charset('utf8');
    }

    public function vratiSve($imeTabele)
    {
        $upit = 'SELECT * FROM ' . $imeTabele;

        $rezultati = [];

        $rezultujucaTabela = $this->konekcija->query($upit);

        while ($red = $rezultujucaTabela->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function pretrazi($tip, $sortiranje)
    {
        $upit = 'SELECT * FROM avion a join zemlja_porekla zp on a.zemljaPoreklaID = zp.zemljaPoreklaID join tip t on a.tipID = t.tipID ';

        if($tip != 'SVI_TIPOVI'){
            $upit .= ' WHERE a.tipID = ' . $tip;
        }

        $upit .= ' ORDER BY a.model ' . $sortiranje;

        $rezultati = [];

        $rezultujucaTabela = $this->konekcija->query($upit);

        while ($red = $rezultujucaTabela->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function unesiAvion($model, $opis, $tip, $zemljaPorekla)
    {
        $upit = "INSERT INTO avion VALUES (null, '$model', '$opis',  $zemljaPorekla, $tip)";

        return $this->konekcija->query($upit);
    }

    public function izmeniModel($avionID, $model)
    {
        $upit = "UPDATE avion SET model = '$model' WHERE id = $avionID";

        return $this->konekcija->query($upit);
    }

    public function obrisiAvion($avionID)
    {
        $upit = "DELETE FROM avion WHERE id = $avionID";

        return $this->konekcija->query($upit);
    }
}