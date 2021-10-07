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
        <h1 id='contact-title'>Contact</h1>

        <div id="contact-adress
">
            <?php echo $adress1;?> </br>

  <?php echo $adress2;?> 
        
    </div>
    <a href="https://www.google.be/maps/place/Le+P%C3%B4le+Image+de+Li%C3%A8ge/@50.6322879,5.584186,16.65z/data=!4m9!1m2!2m1!1spole+image!3m5!1s0x47c0f0abf7d8c7d3:0xcafe05be0243b139!8m2!3d50.6328806!4d5.5877712!15sCgpwb2xlIGltYWdlkgEQY29ycG9yYXRlX29mZmljZQ">Itineraire <svg id="SvgjsSvg1001" width="50" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1002"></defs><g id="SvgjsG1008" transform="matrix(1,0,0,1,0,0)"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="svg-inline--fa fa-map-marker-alt fa-w-12" data-icon="map-marker-alt" data-prefix="fas" viewBox="0 0 384 512" width="25" height="25"><path fill="#ffc33b" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class="colorcurrentColor svgShape"></path></svg></g></svg></a>

    </div>
    <div id="contact-right">
    <div id="contact-mail"><?php echo $mail?> </div>
    <div id="contact-tel"><span id="tel-plus"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11">
  <g id="file-add" transform="translate(0.5 -2.5)">
    <line id="Line_570" data-name="Line 570" y2="10" transform="translate(5 3)" fill="none" stroke="#ffc33b" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1"/>
    <line id="Line_571" data-name="Line 571" x1="10" transform="translate(0 8)" fill="none" stroke="#ffc33b" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1"/>
  </g>
</svg></span><?php echo $tel?></div>

    </div>
</div>

</body>
</html>