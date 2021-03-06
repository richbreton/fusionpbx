<?php

	//application details
		$apps[$x]['name'] = "Traffic Graph";
		$apps[$x]['uuid'] = "99932b6e-6560-a472-25dd-22e196262187";
		$apps[$x]['category'] = "System";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Uses SVG to show the network traffic.";
		$apps[$x]['description']['es-cl'] = "Utiliza SVG para mostrar el tráfico de red";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "Affiche le traffique Réseau via SVG.";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Utiliza SVG para mostrar o tráfego de rede.";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "traffic_graph_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "05ac3828-dc2b-c0e2-282c-79920f5349e0";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

?>
