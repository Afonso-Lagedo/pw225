ROLA

<a href="?pagina=teste2">CU teste2</a>



<a href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table style="border: 1px solid #000; width:100% " >
	<thead>
		<tr>
			<th>Nome </th>
			<th>OBS</th>
			
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo'<tr><td>'.$linha['nome'].'</td>';
				echo'<td>'.$linha['obs'].'</td>	';
			?>
		<?php
			}
		
		?>
	</tbody>
</table>