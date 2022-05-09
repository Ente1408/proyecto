
<body>
    <?php
  echo  form_open('/cursos/actualizar2/'.$id);

    $nombre = array(
        'name' => 'nombre',
        'placeholder'=>'Escribe tu nombre', 
        'value'=>$curso->result()[0]->NOMBRE
    );
    $videos = array(
        'name' => 'videos',
        'placeholder'=>'Cantidad de videos del curso', 
        'value'=>$curso->result()[0]->VIDEOS
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
  echo form_submit('','Actualizar');
  echo form_close();
    ?>
</body>
</html>