<?php include_once "partes/parte_head.php"; ?>

<div class="container-fluid section">

    <div class="container mt-5" style="border-style: solid; border-color: grey;">

        <div class="row mt-5">

            <h2 class="text-center" style="color: grey;">
                Login <i class="fa fa-user-circle" aria-hidden="true"></i>
            </h2>

        </div>

        <div class="row mb-5">

            <form method="post">

                <div class="input-field s12 mb-5">
                    <input maxlength="30" id="nombreUsuario" type="text" class="validate" required>
                    <label for="nombreUsuario">Nombre de Usuario <i class="fa fa-user-o" aria-hidden="true"></i></label>
                </div>

                <div class="input-field s12 mb-5">
                    <input maxlength="30" id="password" type="password" class="validate" required>
                    <label for="password">Contraseña <i class="fa fa-key" aria-hidden="true"></i></label>
                </div>

                <!-- <button type="submit" name="btnIngresar" class="form-control btn-large blue-grey darken-1 waves-effect waves-light">Ingresar <i class="fa fa-sign-in" aria-hidden="true"></i></button> -->
                
                <a href="principal.php" class="form-control btn-large blue-grey darken-1 waves-effect waves-light" style="color: white;">
                    Ingresar <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>

            </form>

        </div>
        
    </div>

</div>

<?php include_once "partes/parte_footer.php" ?>