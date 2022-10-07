<div class ="row">
 
 <table class="table ml-3">
			   <thead class="thead-dark p-2">
				  <tr>
					 <th>Id</th>
					 <th>Nom</th>
					 <th>Action</th>
				  </tr>
			   </thead>
		    <tbody>		   	 
                <?php
				foreach($listeEmploye as $ligne){
					 echo "<tr>
							 <td>".$ligne['id']."</td>
							 <td>".$ligne['nom']."</td>
							 
							 <td>
							 
								<a href=index.php?ctl=employe&action=supprimer&id=".$ligne['id']."><img src='./vue/images/remove.png' height=15 width=15></a>
					
							 </td> 
						   </tr>";		
				}
				?>
		    </tbody>
  </table>   
        		  
</div>

