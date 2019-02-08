<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Au Pied Des Alpes</title>
</head>


<body>
<?php include('header.php'); ?>


  <div class='w-1200p  center txt-justify fs-18 line-h pb-4 '>
       <h1 class=' mt-2 mb-0  fs-45'>Informations de contact</h1>
        

    
        <div class=" pt-1 fs-18">
            
                <p><strong>Les séances à domicile sont proposées sur les vallées aux alentours de Moutiers:</strong></p> 
                <ul>
                    <li class='list'>Toute la Tarentaise jusqu' à Albertville</li>
                    <li class='list'> Haute Tarentaise jusqu'à Bourg saint Maurice</li>
                    <li class='list'> Vallée de Bozel jusqu'à Bozel et Montagny</li>
                    <li class='list'>Les 3 vallées : Courchevel, Méribel, Les Ménuires</li>
                </ul>
        </div>
     </div>


<div class=" center w-1200p d-flex  pb-5 ">

    <div class=" fs-18">
        <p><strong>Guilaine Parraud</strong></p>
        <p><strong>06 01 28 04 01</strong></p>
    </div>



    <form action="" class=" w-400p w-400 center p-1 b-1  ">

        <div class="mt-1 ">
            <label class="d-inline w-90" for="name">NOM</label>
            <input class="  h-30p pl-1 w-300 box-s b-1 color-6 " placeholder="Votre nom" type="text" id="name" name="user_name" required>
        </div>

            <div class="mt-1 ">
                <label class="d-inline w-90" for="mail">MAIL</label>
                <input class="  h-30p pl-1 w-300 box-s b-1  color-6 "  placeholder="Votre e-mail"type="email" id="mail" name="user_mail" required>
            </div>
            
        <div class="mt-1">
            <label class="d-inline w-90" for="msg">MESSAGE</label>
            <textarea class="  pl-1 pt-1 v-align w-300 box-s b-1 color-6 " placeholder='Votre message ...' name="message" id="msg" cols="30" rows="10" required></textarea>
        </div>


        <div>
            <button class=" bg color-0 pointer b-none pt-1 pr-2 pb-1 pl-2 d-block center mt-1"type="submit">ENVOYER</button>
        </div>

    </form>
</div>


</main>





<?php include('footer.php'); ?>




</body>
</html>