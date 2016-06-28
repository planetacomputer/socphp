<?php
function loadFile($xml, $xsl)
{
	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	$xslDoc = new DOMDocument();
	$xslDoc->load($xsl);

	$proc = new XSLTProcessor();
	$proc->importStyleSheet($xslDoc);
	echo $proc->transformToXML($xmlDoc);
}

function updateFile($xml)
{
	$xmlLoad = simplexml_load_file($xml);
	$postKeys = array_keys($_POST);

	foreach($xmlLoad->children() as $x)
	{ 
		  foreach($_POST as $key=>$value)
		  { 
			if($key == $x->attributes())
			{ 
			  $x->value = $value;
			}
		  }
	} 

	$xmlLoad->asXML($xml);
	loadFile($xml,"tool_updated.xsl");
}

if($_SERVER['REQUEST_METHOD']=='GET')
{
  loadFile("tool.xml", "tool.xsl");
}
else
{
  updateFile("tool.xml");
}
?>