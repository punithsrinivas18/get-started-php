<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$price = get_price($name);
	
	if(empty($price))
	{
		response(NULL);
	}
	else
	{
	 response($price);
	}	
}
else
{
	response(NULL);
}

function response($data)
{
	header("HTTP/1.1 ");
	
	echo $data;
	
}
function get_price($name)
{
	$products = [
		"Registration_fee"=>10,
		"Famous_Five"=>15,
		"Secret_Seven"=>12,
		"Dark_Fantasy"=>25,
		"Online_learning"=>30		
	];
	
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}


