<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");
//date_default_timezone_set('America/Tijuana');
	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
	$ttipo = mysqli_real_escape_string($con,(strip_tags($_REQUEST['ttipo'], ENT_QUOTES)));
	$stats = mysqli_real_escape_string($con,(strip_tags($_REQUEST['stats'], ENT_QUOTES)));
	$date = mysqli_real_escape_string($con,(strip_tags($_REQUEST['date'], ENT_QUOTES)));
	$tables="quejas";
	$campos="*";
	$sWhere=" folio LIKE '%".$query."%' AND tipo LIKE '%".$ttipo."%' AND estatus LIKE '%".$stats."%' AND fecha_hora_queja LIKE '%".$date."%'" ;
	$sWhere.=" order by quejas.id desc";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>No.</th>
						<th class='text-center'>Usuario </th>
						<th class='text-center'>Folio </th>
						<th class='text-center' >Tipo </th>
						<th class='text-center'>Fecha de Elaboración</th>
						<th class='text-center'>Reporte</th>
						<th class='text-center'>Estatus</th>
						<th class='text-center'>Fecha de Atencion</th>
						<th class='text-center'>Respuesta</th>
						<th class='text-center'>Revisor</th>
						<th class='text-center'>Atender</th>
						
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)  ){	
							$q_id=$row['id'];
							$q_user=$row['usuario'];	
							$q_folio=$row['folio'];
							$q_tipo=$row['tipo'];
							$q_horac=$row['fecha_hora_queja'];
							$q_reporte=$row['reporte'];
							$q_status=$row['estatus'];	
							$q_horaa=$row['fecha_hora_atendida'];
							$q_resprevisor=$row['respuesta_revisor'];		
							$q_revisor=$row['revisor'];						
							$finales++;
						?>	
						<tr class="<?php echo $text_class;?>">

							<td class='text-center'><?php echo $q_id;?></td>
							<td class='text-center'><?php echo $q_user;?></td>
							<td class='text-center'><?php echo $q_folio;?></td>
							<td class='text-center' ><?php echo $q_tipo;?></td>
							<td class='text-center' ><?php echo $q_horac;?></td>
							<td class='text-center'><textarea><?php echo $q_reporte;?></textarea></td>
							<td class='text-center' ><?php echo $q_status;?></td>
							<td class='text-center' ><?php echo $q_horaa;?></td>
							<td class='text-center' ><textarea><?php echo $q_resprevisor;?></textarea></td>
							<td class='text-center' ><?php echo $q_revisor;?></td>

							
							<td class='text-center'>
								<a href="#"  data-target="#editregistroModal" class="edit" data-toggle="modal" data-folio='<?php echo $q_folio;?>' data-tipo="<?php echo $q_tipo?>" data-fecha="<?php echo $q_horac?>" data-reporte="<?php echo $q_reporte?>" data-estatus="<?php echo $q_status;?>" data-id="<?php echo $q_id; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
							<!-- <a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?php echo $q_id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>-->
							<td>
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";
									echo paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          
		  
