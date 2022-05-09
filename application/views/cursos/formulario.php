
<body>
    <?php
  echo  form_open('/cursos/recibirdatos');

    $nombre = array(
        'name' => 'nombre',
        'placeholder'=>'Escribe tu nombre', 
    );
    $videos = array(
        'name' => 'videos',
        'placeholder'=>'Cantidad de videos del curso', 
    );
   echo form_label('Nombre: ','nombre');
    ?>
    
       
         <?php echo form_input($nombre); ?>
         <br>
                 <br>
       <?php      
   echo form_label('Numero de videos: ','videos');
    ?>

 
        <?php echo form_input($videos); ?>

  
    <br>
    <?php
  echo form_submit('','subir curso');
  echo form_close();
    ?>
</body>
</html>