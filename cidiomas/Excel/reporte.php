<?php
    require('Classes/PHPExcel.php');
	require_once "../clases/conexion.php";
	$c = new conectar();
    $conexion = $c->conexion();

    $consulta = "SELECT cursos.noControl, alumno.paterno, alumno.materno, alumno.nombre, grupos.Nombre, grupos.Nivel,grupos.Horario, cursos.Estatus
	from cursos 
	INNER JOIN alumno on cursos.noControl = alumno.noControl 
	INNER JOIN grupos on cursos.idGrupo = grupos.idGrupo";
    $result =  mysqli_query($conexion,$consulta);
    
    $fila = 8;
    $gdImage = imagecreatefrompng('data:image/png;base64,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');//Logotipo

    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getProperties()->setCreator("BrandonDeveloper")->setDescription("Reporte de Alumnos");


    //Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Alumnos");
	
	$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
	$objDrawing->setName('Logotipo');
	$objDrawing->setDescription('Logotipo');
	$objDrawing->setImageResource($gdImage);
	$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
	$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
	$objDrawing->setHeight(300);
	$objDrawing->setWidth(420);
	$objDrawing->setCoordinates('A1');
	$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>13
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
    ));
    
	$style = array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
	$styleTitulo = array( 'alignment' => array( 'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
	'font' => array(
		'size' =>22,
		),); 
	
	$objPHPExcel->getActiveSheet()->getStyle('A1:F5')->applyFromArray($estiloTituloReporte);
    $objPHPExcel->getActiveSheet()->getStyle('A7:F7')->applyFromArray($estiloTituloColumnas);
    //$objPHPExcel->getStyle("B6:D6")->applyFromArray($style);
	
	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'REPORTE DE ALUMNOS');
    $objPHPExcel->getActiveSheet()->mergeCells('A6:F6')->getStyle("A6:F6")->applyFromArray($styleTitulo);
    $objPHPExcel->getActiveSheet()->getStyle('A:F')->applyFromArray($style);
    //$objPHPExcel->getActiveSheet()->getStyle('A')->applyFromArray($style);


	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A7', 'No.Control');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Nombre');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('C7', 'Grupo');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('D7', 'Nivel');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
    $objPHPExcel->getActiveSheet()->setCellValue('E7', 'Horario');
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
    $objPHPExcel->getActiveSheet()->setCellValue('F7', 'Estatus');

    //Recorremos los resultados de la consulta y los imprimimos
	while($ver = mysqli_fetch_row($result)){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $ver[0]);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $ver[1]." ".$ver[2]." ".$ver[3]);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $ver[4]);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $ver[5]);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $ver[6]);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $ver[7]);
		$fila++; //Sumamos 1 para pasar a la siguiente fila =SI(E2=0,G2,(G2*E2))
	}
	
    $fila = $fila-1;
    
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Alumnos.xlsx"');
	header('Cache-Control: max-age=0');
    
    $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$writer->save('php://output');

?>