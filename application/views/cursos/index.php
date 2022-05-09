<body>
    <?php
//     for($i=0;$i<4;$i++){
//     print_r($cursos->result()[$i]);
//     echo "<br>";

// }    


if($cursos){
    foreach($cursos->result() as $curso){
?>
  <ul>
      <li><a href="<?php echo $curso->ID; ?>"><?php echo $curso->NOMBRE; ?></a></li>
  </ul>
  
  
  <?php }}else{
      echo "<h1>Error en la aplicacion </h1>";
  } ?>
<body>
    
</body>
</html>