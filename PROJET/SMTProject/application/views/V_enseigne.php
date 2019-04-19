<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Catégories</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/"); ?>images/favicon-64.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/"); ?>css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    	<div class="bg-contact3" style="background-image: url('<?php echo base_url("assets/"); ?>images/bg-02.jpg');">
            <div class="container-contact3">
                <div class="wrap-contact3">
						<!-- <img class="logo" src="images/ticket.png" width="400" height="187" alt="logo ticket"/> -->
                    <div class="contact3-form validate-form">
                        <a href="<?php echo site_url("C_login/logout"); ?>" ><img id="logoutlogo" src="<?php echo base_url("assets/"); ?>images/exit.png"/></a>
                        <div class="row">


                                <a href="<?php echo site_url("C_categorie"); ?>" id="shoplogo"><img src="<?php echo base_url("assets/"); ?>images/shopping-list.png"/></a>

                                <h2 class="title" id="titreCat">Enseigne</h2>

                                 <label for="inputcapture" id="labelinput"><img src="<?php echo base_url("assets/"); ?>images/photo-camera.png"/></label>
                                <input type="file" name="image" accept="image/*" capture id="inputcapture">



                        </div>
                        <div class="container">

                        <?php
                        $nbrrow = 0;
                        foreach ($enseignes as $enseigne) {

                            ?>
                            <?php if($nbrrow==0){
                             ?>
                            <div class="row">
                                <?php } ?>

                                <div id="ajust" class="col">
                                    <a id="" href=""><img class="ajustimg" src="<?php echo base_url("assets/"); ?>images/folder.png"/></a>;
                                    <h4 class="font"><?php echo $enseigne["nom"];?></h4>
                                </div>

                                <?php if($nbrrow==1){
                                $nbrrow = -1;
                                ?>
                            </div>
                                    <?php }
                                    $nbrrow++;
                                    ?>



                        <?php } ?>
                        </div>

                        <!--<input class="capture" type="file" name="image" accept="image/*" capture> -->

                    </div>
                </div>
            </div>
        </div>
	<div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="<?php echo base_url("assets/"); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url("assets/"); ?>vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url("assets/"); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url("assets/"); ?>vendor/select2/select2.min.js"></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url("assets/"); ?>js/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');

</script>

</body>
</html>