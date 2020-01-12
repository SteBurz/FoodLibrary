<!doctype html>
<html lang="de">

    <?php include "components/htmlHead.php";?>

    <body id="home" class="container">
        <?php
            if ( isset($_SESSION['user']) ) {
                include ('components/isLoggedIn.php');
            } else {
                include ('components/loginScreen.php');
            }

        ?>
        <script>console.log("Session: <?php printf($_SESSION['user']) ?>")</script>
        <script src="js/jQuery-3.4.1.js" rel="script"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="js/bootstrap.min.js" rel="script"></script>
        <script src="js/app.js" rel="script"></script>
    </body>
</html>