 <?php
require 'php/_header.php';
?>
<!DOCTYPE html>
<html>
 <head>
  <Meta charset="utf-8">
	<title>  bweteta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Style-principal.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/contenu.css">
  <link rel="stylesheet" type="text/css" href="css/plusDinfos.css">
  
  <link rel="stylesheet" type="text/css" href="css/misenforme.css">
  <link rel="stylesheet" type="text/css" href="css/kivu_style.css">
  <link rel="stylesheet" type="text/css" href="css/css-plus.css">
  <link rel="stylesheet" type="text/css" href="css/mobileStyle.css">
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
          $QUERY=array();
          $QUERY= $DB->query("SELECT idM FROM addm");
          foreach ($QUERY as $q): ?>
          <?php if($QUERY): 
        
          $maisons=array(); 
          $maisons=$DB->query("SELECT * FROM imobiliers where id=".$q->idM." ");

          $album=array(); 
          $album=$DB->query("SELECT * FROM gallerie where id=".$q->idM." ");
          
          foreach ($maisons as $maison): ?>
          <?php if($maisons): ?>
            
              <div id="publication">
<!-- <div id="telephone">0993046718</div> -->
                                  <div id="publication_img">
                                   <div id="telephone">contact : <?php echo $maison->contact; ?></div>
                    <span id="bouttoid">  <?php echo $maison->prix; ?>$/Mois</span>
                    <?php echo'<img width="100%" height="100%" id="imomg" src="uploades/'.$maison->photo_princpl.'">';?>
                  </div>
                  <div id="publication_int" style="background:#00000f;display:block;color:#d9d9d9;
                                            display:grid;justify-content:center;align-items:center;font-family:calibri;">
<?php echo $maison->adresse; ?>
                  </div>
                </div>
                <h3>Details</h3>
                <span id="publicat_details">


<?php echo $maison->autresDetails; ?>
             <?php endif; ?>
          <?php endforeach ?>
            <!--   <h3>plus d'images</h3> -->
           <?php foreach ($album as $pucture): ?>
                  
          <?php if($album): ?>

          <div id="album" style="margin-top:20px;">

               

               

                  <?php echo'<img width="100%" height="100%" id="imomg" src="../uploades/'.$pucture->images.'">';?>
                
           
                
     
             
               
            </div>
             
                <?php endif; ?>
          <?php endforeach ?>



     <?php endif; ?>
    <?php endforeach ?>
          
    </div> <!-- fin list -->


     
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