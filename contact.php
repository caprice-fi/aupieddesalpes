

<?php include('./layout/header.php'); ?>


<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
	
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				
				</div>
			</body>
		</html>
		';

		mail("helene.fitteduval@gmail.com", "CONTACT ", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>

    <div class='container  center txt-justify fs-18 line-h pb-4 '>
       <h1 class=' mt-2 mb-0  fs-45'>Informations de contact</h1>
        

    
        <div class=" pt-2  fs-18">
            
                <p class="color-2">Les séances à domicile sont proposées sur les vallées aux alentours de Moutiers:</p> 
                <ul>
                    <li class='list'>Toute la Tarentaise jusqu' à Albertville</li>
                    <li class='list'> Haute Tarentaise jusqu'à Bourg saint Maurice</li>
                    <li class='list'> Vallée de Bozel jusqu'à Bozel et Montagny</li>
                    <li class='list'>Les 3 vallées : Courchevel, Méribel, Les Ménuires</li>
                </ul>
        </div>
     </div>

<div class=" center container d-flex  pb-5 ">
		<div class=" fs-18">
			<p><strong>Guilaine Parraud</strong></p>
			<p><strong>06 01 28 04 01</strong></p>
		</div>



		<form method="POST" action=""  class=" center p-1 b-1 ">
            <div class="mt-1 fs-18 ">
                <label class="d-inline w-90" for="name">NOM</label>
                <input  class="  h-30p pl-1 box-s b-1 color-6 " type="text" name="nom"  placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?> "/>
            </div>

            <div class="mt-1 fs-18">
                <label class=" d-inline w-90" for="mail">MAIL</label>
                <input type="email" class="  h-30p pl-1 box-s b-1  color-6 " name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
            </div>


            <div class="mt-1 fs-18">
                <label class="d-inline w-90" for="msg">MESSAGE</label>
                <textarea name="message"  class="pl-1 pt-1 v-align  box-s b-1 color-6 " id="msg" cols="30" rows="10"  placeholder='Votre message ...'><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
            </div>
                
            <div>
                <button class=" bg color-4 pointer b-none  b-radius  pt-1 pr-2 pb-1 pl-2 d-block center mt-1" type='submit' name="mailform" >ENVOYER</button>
            </div>
     </form>
</div>



<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
  
<form action=""  method="post">
	<div class="g-recaptcha" data-sitekey=""></div>
	<input type="submit" value="submit">
</form>
  



		<?php
		if(isset($msg))
		{
			echo $msg;
		}
        ?>
        


    


        



<?php include('./layout/footer.php'); ?>


