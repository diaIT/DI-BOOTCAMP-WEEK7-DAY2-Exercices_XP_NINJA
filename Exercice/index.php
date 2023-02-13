

<!--Creation de la table-->
<table width="400px" border="1px" cellspacing="0px">
	<?php 
      echo "Chess Board";
      $value=0;
     //Cette boucle génére une cologne de table
      for ($col=0; $col <8; $col++) { 
     	echo "<tr>";
     	$value=$col;
        //Cette boucle génére une ligne de table
     	for($row=0;$row<8;$row++){
     		if ($value%2==0) {
     			//Si la valueur est paire, un fond noir est généré.
     			echo "<td height=40px width=20px bgcolor=black></td>";
     			$value++;

               //Sinon la valueur est paire, un fond noir est généré.
     		}else{
     			echo " <td height=40px width=20px bgcolor=white></td>";
     			$value++;
     		}
     	}
     	  echo "<tr>";

      }
	 ?>
   </table>
