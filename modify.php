<?php
    function control($value){
        $value = htmlspecialchars($value);
        $value = trim($value);
        return $value;
    }

    require ('Database.php');
    $db = Database::connect();

    $idchambre=$_GET["id"];
    $data=$db->prepare("SELECT * from chambre where idchambre=? ");
    $data->execute(array($idchambre));
    $data=$data->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST["submit"])){
        $numchambre =control($_POST["numchambre"]); 
        $typechambre =control($_POST["typechambre"]); 
        $prixbynight =control($_POST["prixbynight"]); 
        $statut=control($_POST["statut"]); 
        
        $save = $db->prepare ("UPDATE chambre SET numchambre=?, typechambre=?, prixbynight=?, statut=? WHERE idchambre= ?");
        $result = $save->execute(array($numchambre, $typechambre, $prixbynight, $statut,$idchambre )); 

        if($result){
            echo "Effectué";
            header("location:index.php");
        } else {
            echo "Échec";
        }
    }
?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>Hotelier - Hotel HTML Template</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">

    <meta content="" name="description">



    <!-- Favicon -->

    <link href="img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  



    <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->

    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />



    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

</head>



<body>

    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->

       
        <!-- Spinner End -->



        <!-- Header Start -->

        <?php include('header.php')?>

        <!-- Header End -->





        <!-- Page Header Start -->

        <!-- Page Header End -->





        <!-- Forms Start -->

       

        <!-- Forms End -->


  

        <!-- Team Start -->
        <style>
    .container {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top:20px;
        width: 50%; /* Définit la largeur de la div container à 50% */
    }

    
    label {
        margin-bottom: 5px;
        margin-top:5px;
    }
</style>
        <div class="container py-5 pb-5 ">

        
    <div class=" fadeInUp" data-wow-delay="0.1s">
    <form action="" method="post">
            <div class="form-group">
                <label for="numchambre">Numero : </label>
                <input type="text" class="form-control" id="num" name="numchambre" aria-describedby="" placeholder="Numéro de chambre" value="<?=$data["numchambre"]?>" required>
            </div>
            <div class="form-group">
                <label for=" typechambre">Type : </label>
                <input type="text" class="form-control" id=" typee" name="typechambre" aria-describedby="" placeholder="Type de chambre" value="<?=$data["typechambre"]?>" required>
            </div>
            <div class="form-group">
                <label for="prixbynight">Prix/nuit : </label>
                <input type="text" class="form-control" id="prix" name="prixbynight" aria-describedby="" placeholder="Prix/nuit" value="<?=$data["prixbynight"]?>" required>
            </div>
            <div class="form-group">
                <label for="statut">Statut</label> 
                <input type="text" class="form-control" id="statut" name="statut" aria-describedby="" placeholder="Statut de la chambre" value="<?=$data["statut"]?>" required>
            </div>

            <input type="submit" name="submit" value="enregistrer" class="btn btn-primary text-center mt-2">
           
        </form>
</div>
        </div>

       
        <!-- Team End -->





        <!-- Newsletter Start -->

        

        <!-- Newsletter Start -->

        



        <!-- Footer Start -->

       

        <!-- Footer End -->





        <!-- Back to Top -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>



    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>

    <script src="lib/counterup/counterup.min.js"></script>

    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="lib/tempusdominus/js/moment.min.js"></script>

    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>

    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>



    <!-- Template Javascript -->

    <script src="js/main.js"></script>

</body>



</html>