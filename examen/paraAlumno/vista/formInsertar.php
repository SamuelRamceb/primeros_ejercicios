<?php include('../controller/main.php'); ?>
 <br/>
 <form name="formInsertar" action="../controller/insertar.php" method="POST">
     <table>
         <tr>
             <th>Nombre</th>
             <th>Energía (Kcal)</th>
             <th>Proteina (g)</th>
             <th>H. de carbono (g)</th>
             <th>Fibra (g)</th>
             <th>Grasa total (g)</th>
         </tr>
         <tr>
             <td>
               <input type="text" name="nombre" value="" required/>
             </td>
             <td>
               <input type="text" name="energia" value="" required/>
             </td>
             <td>
               <input type="text" name="proteina" value="" required/>
             </td>
             <td>
               <input type="text" name="hc" value="" required/>
             </td>
             <td>
               <input type="text" name="fibra" value="" required/>
             </td>
             <td>
               <input type="text" name="grasa" value="" required />
             </td>
         </tr>

     </table>
     <input type="submit" value="insertar" name="insertar" />
 </form>
 * Los valores deben referirse a 100 g del alimento

