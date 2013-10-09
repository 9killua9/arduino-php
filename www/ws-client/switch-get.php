<?PHP 

/*
	Leandro Salar
*/
	
try
{

  $c = new SoapClient("../ws/switch.wsdl");
 
  $s = $c->get ();
	
  if ($s === true) 
	  echo ("true"); 
	else		
		if ($s === false) 	
			echo ("false");
		else		
			if ($s === null) 	
				echo ("null");
	
} 
catch (SoapFault $e)
{

  echo ($e);
	
}
	
?>