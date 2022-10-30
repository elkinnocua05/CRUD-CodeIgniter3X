<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Editar usuario</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Editar los datos del usuario: <?php echo $FIRTS_NAME; ?></h1>
        <form action="<?php echo base_url(); ?>usuario/update/<?php echo $ID; ?>" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre completo</label>
                        <input type="text" name="fullName" class="form-control <?php echo form_error('fullName') ? 'is-invalid':'' ; ?>" placeholder="Nombre completo" value="<?php echo $FIRTS_NAME; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('fullName'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellido</label>
                        <input type="text" name="lastName" class="form-control <?php echo form_error('lastName') ? 'is-invalid':'' ; ?>" placeholder="Apellido" value="<?php echo $LAST_NAME; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('lastName'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ; ?>" aria-describedby="emailHelp" placeholder="Correo eléctronico" value="<?php echo $EMAIL; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Genero</label>
                        <input type="text" name="gender_user" class="form-control <?php echo form_error('gender_user') ? 'is-invalid':'' ; ?>" placeholder="Genero" value="<?php echo $GENDER; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('gender_user'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefóno</label>
                        <input type="text" name="gender_phone" class="form-control <?php echo form_error('gender_phone') ? 'is-invalid':'' ; ?>" placeholder="Telefóno" value="<?php echo $TELEPHONE; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('gender_phone'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Edad</label>
                        <input type="text" name="gender_age" class="form-control <?php echo form_error('gender_age') ? 'is-invalid':'' ; ?>" placeholder="Edad" value="<?php echo $AGE; ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('gender_age'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>