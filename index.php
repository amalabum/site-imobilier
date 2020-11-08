 <?php
require 'php/_header.php';
?>
<!DOCTYPE html>
<html>
 <head>
  <Meta charset="utf-8">
	<title>Imoblilier</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Style-principal.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/contenu.css">
  <link rel="stylesheet" type="text/css" href="css/list_maisons.css">
  
  <link rel="stylesheet" type="text/css" href="css/misenforme.css">
  <link rel="stylesheet" type="text/css" href="css/kivu_style.css">
  <link rel="stylesheet" type="text/css" href="css/mobileStyle.css">
  <link rel="stylesheet" type="text/css" href="css/css-plus.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
 </head>
 <body>
 	<div id="all">
     <?php
         require 'html/head.php';
     ?>
      <?php
         require 'html/contacts.php';
     ?>
 
 
    <div id="all_contenu">

    

        <div id="list">
          <?php
          $eleves=array(); 
          $eleves=$DB->query("SELECT * FROM imobiliers  order by id desc ");
          // var_dump($eleves);
          foreach ($eleves as $eleve): ?>
          <?php if($eleves): ?>
            
            <div id="publication">
                                          <?php echo"<a  href='php/add.php?add=$eleve->id'>" ?>
                     <input
                    type="SUBMIT" id="plus" name="gg" value="Plus" title="Cliquez pour voir plus d'infos"></a> <div id="publication_img">
                  <span id="bouttoid">  <?php echo $eleve->prix; ?>$/Mois</span>
                  <?php echo'<img width="100%" height="100%" id="imomg" src="uploades/'.$eleve->photo_princpl.'">';?>
                </div>
                <div id="publication_int" style="background:#dd4900;display:block;color:#ffffff;
                display:flex;justify-content:center;align-items:center;font-family:Lucida Sans, arial;">
                        
              <div>
              <?php echo $eleve->adresse; ?></div> <div></div>
         
            </div>
                
     
                <div id="publication_details">
            
                </div>
               
            </div>

             <?php endif; ?>
          <?php endforeach ?><br>
        </div>


     
    </div>
    
      <?php
         require 'html/footer.php';
     ?>
 		 
  </div>  <!--  fin all 2 --> 
   		

	   <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
       <script type="text/javascript" src="js/jquery.hislide.js"></script>
       <script type="text/javascript">
             document.getElementById("Smenu").style.display="none";
              $('#menu').click(function(){
              // $('.open').doubleclick(function(){
               $('#Smenu').animate({width:"toggle"});
                //alert($('p:first').html());
              
            });
            $('.contactn').click(function(){
              // $('.open').doubleclick(function(){
               $('#rechercheLAncer').animate({width:"toggle"});
                //alert($('p:first').html());icone_menu
              
            });
              $('#menu').click(function(){
              $('#rechercheLAncer').hide("slow");
            });
       
              
       </script>

 </body>
</html>