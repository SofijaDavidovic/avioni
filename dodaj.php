
<?php
include 'inicijalizacija.php';

$tipovi = $konekcija->vratiSve('tip');
$zemlje = $konekcija->vratiSve('zemlja_porekla');
$poruka = "";

if(isset($_POST['dodaj'])){
    $model = trim($_POST['model']);
    $opis = trim($_POST['opis']);
    $tip = trim($_POST['tip']);
    $zemlja = trim($_POST['zemlja']);

    if($konekcija->unesiAvion($model, $opis, $tip, $zemlja)){
        header("Location: index.php");
    }else{
        $poruka = "Doslo je do greske prilikom cuvanja aviona";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Avioni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
  <?php include 'header.php' ?>
  <section id="maincontent">
    <div class="container">
        <h1 style="color: red"><?php echo $poruka ?></h1>
      <div class="row">
        <h1>Forma za dodavanje</h1>
          <form method="post" action="">
              <label for="model">Model</label>
              <input type="text" class="form-control" name="model" id="model">

              <label for="opis">Opis</label>
              <textarea rows="5" class="form-control" name="opis" id="opis">

              </textarea>

              <label for="tip">Tip</label>
              <select name="tip" id="tip" class="form-control">
                  <?php
                foreach ($tipovi as $tip){
                  ?>
                    <option value="<?= $tip->tipID?>"><?= $tip->nazivTipa?></option>
                <?php
                }
                  ?>
              </select>

              <label for="zemlja">Zemlja porekla</label>
              <select name="zemlja" id="zemlja" class="form-control">
                  <?php
                  foreach ($zemlje as $zemlja){
                      ?>
                      <option value="<?= $zemlja->zemljaPoreklaID?>"><?= $zemlja->naziv?></option>
                      <?php
                  }
                  ?>
              </select>
              <hr/>
              <button type="submit" class="btn btn-large btn-rounded btn-color" name="dodaj">Dodaj </button>

          </form>

      </div>

      <div class="row">
        <div class="span12">
          <div class="blank10"></div>
        </div>
      </div>

  </section>

<?php include 'footer.php'; ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <script src="assets/js/custom.js"></script>


</body>

</html>
