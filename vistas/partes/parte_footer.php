

<!--Scripts de Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<!--Script de Materialize-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Mi script -->
<script>

    document.addEventListener('DOMContentLoaded', function() {

        //Parallax//
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);

        //Sidenav//
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);

        //Dropdown Trigger//
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);

    });
    
</script>

<!-- Mis estilos -->
<style>

    .gradient{
        background: #1c92d2;
        background: -webkit-linear-gradient(to right, #1c92d2, #f2fcfe);
        background: linear-gradient(to right, #1c92d2, #f2fcfe);
    }

    .randylogo{
        width: 70px; 
    }
    
</style>

</body>
</html>