<!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset=utf-8>
 	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,700,800" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="dist/app.css">
 	<title>Ospiti</title>
 </head>
 <body>

  <?php include 'prenotazioniDaMySQL.php'; ?>

  <!-- main_container - start -->
  <div id="main_container">

    <!-- page_content - start -->
    <div id="page_content">
      <?php //var_dump($tutteLePrenotazioni); ?>
      <table class="table">
        <thead>
            <?php foreach ($tutteLePrenotazioni[0] as $key => $value): ?>
              <th><?php echo $key; ?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>
          <?php foreach ($tutteLePrenotazioni as $prenotazione): ?>
            <tr>
              <?php foreach ($prenotazione as $key => $value): ?>
                <?php if ($key === 'ospite_id'): ?>
                  <td><a href="http://localhost/FEBBRAIO/db-ex-4/dettaglio-ospite.php?id=<?php echo $value; ?>"><?php echo $value; ?></a></td>
                <?php else: ?>
                  <td><?php echo $value; ?></td>
                <?php endif; ?>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div><!-- page_content - end -->
  </div><!-- main_container - end -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <?php if (getThePageName() === 'dettaglio-ospite.php'){ ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
    <script src="dist/app.js" charset="utf-8"></script>
  <?php } ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </body>
  </html>
