<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Save My Ticket</title>
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
            <form class="contact3-form validate-form">
                <img class="logo" src="<?php echo base_url("assets/"); ?>images/ticket.png" width="400" height="187" alt="logo ticket"/>


                <div class="wrap-contact3-form-radio">
                    <div class="contact3-form-radio m-r-42">
                        <input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
                        <label class="label-radio3" for="radio1">
                            Connexion
                        </label>
                    </div>

                    <div class="contact3-form-radio">
                        <input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
                        <label class="label-radio3" for="radio2">
                            Inscription
                        </label>
                    </div>
                </div>

                <div class="wrap-input3 validate-input" data-validate="Le login est requis">
                    <input class="input3" type="text" name="login" placeholder="Votre login..">
                    <span class="focus-input3"></span>
                </div>

                <div class="wrap-input3 validate-input" data-validate="Le mot de passe est requis">
                    <input class="input3" type="text" name="mdp" placeholder="Votre mot de passe..">
                    <span class="focus-input3"></span>
                </div>

                <!--<label class="check">
                        <input id="custom" type="checkbox" checked="checked" name="remember"> Rester connecté
                </label>-->

                <!--<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input3" type="text" name="email" placeholder="Your Email">
                    <span class="focus-input3"></span>
                </div>-->

                <div class="wrap-input3 input3-select">
                    <div class="validate-input" data-validate="Le pseudo est requis">
                        <input class="input3" type="text" name="pseudo" placeholder="Votre pseudo..">
                    </div>
                    <span class="focus-input3"></span>
                </div>

                <!--<div class="wrap-input3 input3-select">
                    <div>
                        <select class="selection-2" name="budget">
                            <option>Budget</option>
                            <option>1500 $</option>
                            <option>2000 $</option>
                            <option>3000 $</option>
                        </select>
                    </div>
                    <span class="focus-input3"></span>
                </div>-->

                <!--<div class="wrap-input3 validate-input" data-validate = "Message is required">
                    <textarea class="input3" name="message" placeholder="Your Message"></textarea>
                    <span class="focus-input3"></span>
                </div>-->

                <div class="container-contact3-form-btn">
                    <button class="contact3-form-btn">
                        Connexion
                    </button>
                </div>
                <div class="container-contact3-form-btn">
                    <button class="contact4-form-btn">
                        Inscription
                    </button>
                </div>
            </form>
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
