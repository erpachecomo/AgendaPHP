<?php

	require_once('jpgraph/jpgraph.php');
	require_once ('jpgraph/jpgraph_pie.php');


	$data = getContactos('select count(*), `tipo` from `contacto` group by `tipo`;','count(*)');
	$legends = getContactos('select count(*), `tipo` from `contacto` group by `tipo`;','tipo');


	$graph = new PieGraph(500,500);
	$graph->SetShadow();

	$graph->title->Set("Estadisticas de mi agenda");

	$p1 = new PiePlot($data);
	$p1->SetLegends($legends);
	$graph->SetColor('#C5CAE9');
	$graph->Add($p1);
    $graph->Stroke();

	function getContactos($query,$field){
    	    $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "agenda";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = mysqli_query ($conn, $query,MYSQLI_USE_RESULT) or trigger_error($conn->error."[$query]");;

            while ($R = $result->fetch_assoc())
                        {
                            $ret[]=$R[$field];
                        }

            $result->close();
            $conn->close();
            return $ret;
    	}
?>
