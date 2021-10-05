<?php 

// Template Name: contact
get_header(); 

?>
<?php 
  $name = get_field('nom', 'options');
  $tel= get_field('telephone', 'options');
  $mail =get_field('mail', 'options');
  $adress1 = get_field('adresse', 'options');
  $adress2 = get_field('adresse_2', 'options');
  ?> 
<div id="contact">
    <div id="contact-left">
        <h1 id='contact'>contact</h1>

    <p>
            <?php echo $adress1;?> </br>
            <?php echo $adress2;?> 
        
    </p>
    <button>Itinéraire </button>

    </div>
    <div id="contact-right">
   
         <?php echo $mail?> </br>
        <?php echo $tel?>

    </div>
</div>

</body>
</html>