<?php
$ch = curl_init("http://169.55.213.102/api/map/addpin");
$key = "SCta}*XTV1R6SCta}*XTV1R6";

$request_param = array("userid"=>"1744",
"title"=>"Tailgate",
"pin"=>"Tailgate",
"tags"=>"Team Name",
"longitude"=>"125.323544",
"latitude"=>"43.817072",
"detail"=>"Tailgate"
);
foreach($_REQUEST as $name => $value) {
  $encoded .= urlencode($name).'='.urlencode($value).'&';
}

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Authkey: SCta}*XTV1R6SCta}*XTV1R6',
	    'X-Apple-Store-Front: 143444,12'
	    ));
        curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
	curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);       
        curl_close($ch);
	$result = json_decode($output, true);
	echo json_encode(array("status"=>$result['status'], "message"=> $result['message']));
	exit;
?>