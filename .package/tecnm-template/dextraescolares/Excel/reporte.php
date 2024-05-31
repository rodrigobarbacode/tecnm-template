<?php
    require('Classes/PHPExcel.php');
	require_once "../clases/conexion.php";
	$c = new conectar();
    $conexion = $c->conexion();

    $consulta = "SELECT actividades.noControl, alumno.paterno, alumno.materno, alumno.nombre, extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente, actividades.Estatus
	from actividades 
	INNER JOIN alumno on actividades.noControl = alumno.noControl 
	INNER JOIN extraescolar on actividades.IdExtraescolar = extraescolar.Id";
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
	$objDrawing->setWidth(380);
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
	$objPHPExcel->getActiveSheet()->setCellValue('D7', 'Horario');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
    $objPHPExcel->getActiveSheet()->setCellValue('E7', 'Docente');
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