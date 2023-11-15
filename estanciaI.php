<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Software Management Exam</title>
</head>
<body>

        <?php
            // Título grande en PHP
            echo '<div class="container mt-5">';
            echo '<h1 class="display-4 text-center">Software Management Exam</h1>';
        ?>

<div class="container mt-5">
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nombre">nombre:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Enter your name">
      </div>
      <div class="form-group col-md-6">
        <label for="apellido">Last Name:</label>
        <input type="text" class="form-control" id="apellido" placeholder="Enter your last name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="form-group col-md-6">
        <label for="telefono">Phone:</label>
        <input type="tel" class="form-control" id="telefono" placeholder="Enter your phone number">
      </div>
    </div>
    <div class="form-group">
      <label for="mensaje">Message:</label>
      <textarea class="form-control" id="mensaje" rows="4" placeholder="Write your message"></textarea>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="suscripcion">
        <label class="form-check-label" for="suscripcion">
        Subscribe to the newsletter
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
