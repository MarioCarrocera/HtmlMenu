<?php
$base='ontime/';
include_once($base."OnTime.php");
class html extends OnTime {
	private $page    ='none';	
	private $headfix =array();	
	private $headmeta =array();	
	private $headlink =array();	
	private $headletter =array();	
	private $headcss =array();	
	private $BodyText =array();	
	private $BodyTextS = '';	
	private $BodyNumber = 0;	
	private $errortaxt ='';	

function SetPage($CurPage){
	$this->page = $CurPage;
	$this->headfix[0] = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';     
	$this->headfix[1] = '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
	$this->headfix[2] = '<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />';
	$this->headlink["font-awesome.min"] = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';    
}
function SetMeta($definition){
    $read = $this->ShwCntIn($definition,$this->page );
	$this->headmeta['icon'] = '<link rel="shortcut icon" href="'.$read['icon'].'" />';
	$this->headmeta['head'] = "<title id='Description'>".$read['head']."</title>";
	$this->headmeta['description'] = '<meta name="description" content="'.$read['description'].'" />';
	$this->headmeta['keyword'] = '<meta name="keywords" content="'.$read['keyword'].'" />';
	$this->headmeta['author'] = '<meta name="author" content="'.$read['author'].'" />';	
}
function SetGoogle($definition){
    $read = $this->ShwCntIn($definition,$this->page );
 	foreach ($read as $clave => $valor) { if ($valor=='google')
		$this->headletter[$clave] = "<link href='https://fonts.googleapis.com/css?family=".$clave."' rel='stylesheet'>";
	}
}     

function SetCss($definition){
    $read = $this->ShwTbl($definition,$this->page );
 	foreach ($read as $clave => $valor) { 
 		$make='';
	 	foreach ($valor as $prop => $value) {
	 		if ($prop!='Name'){
		 		if (substr($prop,0,2)!='%%'){
		 			if (array_key_exists ( '%%'.$prop , $valor )){
			 			$make .=  $prop.':'. $valor[ '%%'.$prop].';';
	 				} else {
		 				$make .=  $prop.':'. $value.';';	 				
	 				}
				}
			}
		}
		if  ($clave=='Body'){
			$this->headcss[$clave] = $clave.'{'. $make. '}';
		} else {
			$this->headcss[$clave] = '.'.$clave.'{'. $make. '}';				
		} 
	}
}

function SetLayOut($definition){
    $read = $this->ShwTbl($definition,$this->page );
    $this->BodyTextS ='';	
 	foreach ($read as $clave => $valor) { 
		$this->BodyTextS .= '<div id="'.$valor['Name'].'" class="'.$valor['CssClass'].'">';
		if (isset($valor['Content'])){
		    $readc = $this->ShwTbl($valor['Content'],$this->page );
		 	foreach ($readc as $clavec => $valorc) {
		 		$toeval='$temp1=$this->'.$valorc['Fuction'].'(';
		 		$pri = 0;
			 	foreach ($valorc['Parameter'] as $Pdesc => $Ptype) {
					if ($pri!=0){
				 		$toeval .= ",";	 			
					}
					$pri=1;
				 	$toeval .= "'".$Pdesc."'";	 		
				}	 		
		 		$toeval .= ');';
		 		eval($toeval);
			 	foreach ($temp1 as $deploy => $data) {
			 		$toeval2='$temp2=$this->'.$valorc['Deploy'].'(array(';
			 		$pri = 0;
				 	foreach ($data as $Pdesc => $Ptype) {
						if ($pri!=0){
					 		$toeval2 .= ",";	 			
						}
						$pri=1;
				 		$toeval2 .= "'".$Pdesc."' => '".$Ptype."'";	 		
					}	 		
		 			$toeval2 .= '));';
			 		eval($toeval2);
				}		 		
		 	} 
		}
		$this->BodyTextS .= '</div>';		
	}
}

function Getheader(){
	$string = '<head>';
	foreach ($this->headfix as $clave=>$valor) $string.=$valor;
	foreach ($this->headmeta as $clave=>$valor) $string.=$valor;
	foreach ($this->headfix as $clave=>$valor) $string.=$valor;
	foreach ($this->headletter as $clave=>$valor) $string.=$valor;
	$string .= '<style>';
	foreach ($this->headcss as $clave=>$valor) $string.=$valor;		
	$string .= '</style>';     
	$string .= '</head>';
	echo $string;
}

function GetLayout(){
	$string = '<body>';
	$string .= $this->BodyTextS;
	$string .= '</body>';
	echo $string;
}

function aref($data){
	$line='<a title="'.$data['title'].'" href="'.$data['href'].'">'.$data['HtmlContent'].'</a>';
	$this->BodyTextS .= $line;		
}



}

?>			