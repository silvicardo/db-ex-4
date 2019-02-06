<!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset=utf-8>
 	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,700,800" rel="stylesheet">
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="dist/app.css">
 	<title>dettaglio-ospite</title>
 </head>
 <body>

  <!-- main_container - start -->
  <div id="main_container">

    <!-- page_content - start -->
    <div id="page_content">

      <table id="tabella_ospite" class="table" data-id="<?php echo $_GET['id']; ?>">
        <thead>
              <th>id</th>
              <th>name</th>
              <th>lastname</th>
              <th>date_of_birth</th>
              <th>document_type</th>
              <th>document_number</th>
              <th>created_at</th>
              <th>updated_at</th>
        </thead>
        <tbody id='dati_ospite'>

        </tbody>
      </table>

    </div><!-- page_content - end -->
  </div><!-- main_container - end -->

  <script id="ospite_template" type="text/x-handlebars-template">
    <tr >
      <td>{{id}}</td>
      <td>{{name}}</td>
      <td>{{lastname}}</td>
      <td>{{dateOfBirth}}</td>
      <td>{{documentType}}</td>
      <td>{{documentNumber}}</td>
      <td>{{createdAt}}</td>
      <td>{{updatedAt}}</td>
    </tr>
  </script>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <?php include 'functions.php'; ?>
  <?php if (getThePageName() === 'dettaglio-ospite.php'){ ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
    <script src="dist/app.js" charset="utf-8"></script>
  <?php } ?>

  </body>
  </html>
