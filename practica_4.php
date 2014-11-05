
<html>
	<head>
		<title>Arreglos en php</title>
	</head>
		
    <body>
      <form>
	     <table>
		 
        <tr>
		
		<?php
		$productos = array("id_1" => "1","Product_1" =>"tortillas","Precio_1" =>"12");
		?>
		
		<td><?php echo $productos ['id_1']; ?>  </td>
		<td><?php echo $productos ['Product_1']; ?></td>
		<td><?php echo $productos ['Precio_1']; ?>  </td>
		<td> <a href="Edit.html">Editar</a> <a href="Delect.html">Eliminar</a></td> 
		<td>                                  
		</td>
		</tr>

		<tr>
		
		<?php
		$productos = array("id_2" => "2","Product_2" =>"frijoles","Precio_2" =>"22",);
		?>
		
		<td><?php echo $productos ['id_2']; ?>  </td>
		<td><?php echo $productos ['Product_2']; ?></td>
		<td><?php echo $productos ['Precio_2']; ?>  </td>
		<td> <a href="Edit.html">Editar</a> <a href="Delect.html">Eliminar</a></td> 
		<td>                                  
		</td>
		</tr>
						
		<?php
		$PRODUCTOS = array("id_3" => "3","Product_3" =>"tomates","Precio_3" =>"8",);
		?>
		
		<td><?php echo $productos ['id_3']; ?>  </td>
		<td><?php echo $productos ['Product_3']; ?></td>
		<td><?php echo $productos ['Precio_3']; ?>  </td>
		<td> <a href="Edit.html">Editar</a> <a href="Delect.html">Eliminar</a></td> 
		<td>                                  
		</td>
		</tr>	
		
		<?php			
		$productos = array("id_4" => "4","Product_4" =>"fresas","Precio_4" =>"45");
		?>		
		
		<td><?php echo $productos ['id_4']; ?>  </td>
		<td><?php echo $productos ['Product_4']; ?></td>
		<td><?php echo $productos ['Precio_4']; ?> </td>
		<td> <a href="Edit.html">Editar</a> <a href="Delect.html">Eliminar</a></td> 
		<td>                                  
		</td>                           
		</tr>	
		
		<?php		
		$productos = array("id_5" => "5","Product_5" =>"Agua","Precio_5" =>"24",);
		?>
					
		<td><?php echo $productos ['id_5']; ?>  </td>
		<td><?php echo $productos ['Product_5']; ?></td>
		<td><?php echo $productos ['Precio_5']; ?> </td>
		<td> <a href="Edit.html">Editar</a> <a href="Delect.html">Eliminar</a></td> 
		<td>                                  
		</td>                 
		</tr>										
		</tr>	
		
	 </table>
	</form>
	
   </body>
   </html>