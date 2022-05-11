<body>
    <?php
if($cursos){
    foreach($cursos->result() as $curso){
?>
  <ul>
      <li><a href="<?php echo $curso->ID; ?>"><?php echo $curso->NOMBRE; ?></a></li>
  </ul>
  
  
  <?php }}else{
      echo "<h1>Error en la aplicacion </h1>";
  } ?>
 <a href="index.php/codigo/nuevo">Nuevo</a>
<body>
    
</body>
</html>