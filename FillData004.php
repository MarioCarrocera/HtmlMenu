<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');


echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";

$demo->DddChgFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'lookin','content'=>'UPoss', 'in'=>'page')));
$demo->RcdChgIn('Css','position', array('FldEmp'=>TRUE));

echo "********** <br> Activate Table feature in page  <br> ********** <br> <br>";


$demo->DddAddFld('background-image', array('FldTpe'=>'S','FldDsc'=>'Css Bacground image'));

$demo->RcdAddIn('Css','background', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','background-image', array('FldEmp'=>TRUE));

$inside = 'page';

$table='overflow';
$demo->CrtBscIn($table,'overflow values ',$inside);
$demo->AnnInAdd($table,'b',$inside);
$demo->UpnCntIn('visible',"Default. The overflow is not clipped. The content renders outside the element's box",$table, $inside);
$demo->UpnCntIn('hidden',"The overflow is clipped, and the rest of the content will be invisible",$table, $inside);
$demo->UpnCntIn('scroll',"The overflow is clipped, and a scrollbar is added to see the rest of the content",$table, $inside);
$demo->UpnCntIn('auto',"Similar to scroll, but it adds scrollbars only when necessary",$table, $inside);


$demo->DddAddFld('overflow', array('FldTpe'=>'S','FldDsc'=>'Css overflow With of the element','FldVld'=>array('Name'=>'lookin','content'=>'overflow', 'in'=>'page')));
$demo->RcdAddIn('Css','overflow', array('FldEmp'=>TRUE));

$table = 'MainCss';
$demo->CrtFtrTbl($inside);
$demo->CrtTblIn($table, 'Main CSS sample file', 'Css' , $inside);
$demo->AnnInAdd($table,'t',$inside);


$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>'12','SzUnit'=>'px')),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'OutSideup', array('Name'=>'Before Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'), 'font-family'=> 'Windows','background-color'=>'transparent'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'Main', array('Name'=>'Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'block',  'font-family'=> 'Body','background-color'=>'transparent'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'OutSideDown', array('Name'=>'After Main Screen', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'100','SzUnit'=>'vh'),'display'=>'none', 'font-family'=> 'Windows','background-color'=>'transparent'),$inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'Header', array('Name'=>'Allways in the upper', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'), 'height'=>array('SzNumber'=>'6','SzUnit'=>'vh'),'display'=>'block','top'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed',  'font-family'=> 'Windows','background-color'=>'transparent' ), $inside);
$demo->ot_show($demo->errvalid);


$demo->UpsTblIn($table , 'Footer', array('Name'=>'Allways in the bottom', 'width'=>array('SzNumber'=>'100','SzUnit'=>'%'),'bottom'=>array('SzNumber'=>'1','SzUnit'=>'px'), 'position'=>'fixed' , 'overflow'=> 'hidden',  'background-color'=> 'marron') , $inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'Footer a', array('Name'=>'Allways in the bottom each item inside', 'float'=>'left', 'display'=>'block', 'color'=>'beige', 'text-align'=>'center','text-decoration'=> 'none','font-size'=>array('SzNumber'=>'17','SzUnit'=>'px'), 'padding'=>array('1-Top'=>array('SzNumber'=>'14','SzUnit'=>'px'),'2-Lef'=>array('SzNumber'=>'16','SzUnit'=>'px'))) , $inside);
$demo->ot_show($demo->errvalid);

$demo->UpsTblIn($table , 'Footer a:hover', array('Name'=>'Allways in the bottom each item inside when the mouse is over','color'=>'red', 'background-color'=>'green') , $inside);
$demo->ot_show($demo->errvalid);


$demo->DddAddFld('CssClass', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'MainCss', 'in'=>'page')));
$demo->DddAddFld('Order', array('FldTpe'=>'K','FldDsc'=>'Order to Deploy'));
$demo->DddAddFld('Container', array('FldTpe'=>'S','FldDsc'=>'Inner Container Define','FldVld'=>array('Name'=>'isfrom','in'=>'page')));
$demo->DddAddFld('Content', array('FldTpe'=>'S','FldDsc'=>'Inner Content Define','FldVld'=>array('Name'=>'isfrom','in'=>'page')));
$demo->DddAddFld('Parameters', array('FldTpe'=>'I','FldDsc'=>'Parameters need'));
$demo->DddAddFld('Parameter', array('FldTpe'=>'A','FldDsc'=>'Parameters send'));
$demo->DddAddFld('Deploy', array('FldTpe'=>'S','FldDsc'=>'Deploy mode'));
$demo->DddAddFld('Fuction', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'Functions', 'in'=>'page')));


$demo->CrtRcd('Functions','Html Layout');
$demo->RcdAddIn('Functions','KeyId', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Functions','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Functions','Parameters', array('FldEmp'=>FALSE));

$demo->CrtRcd('Layout','Html Layout');
$demo->RcdAddIn('Layout','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Layout','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Layout','CssClass', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Layout','Container', array('FldEmp'=>TRUE)); 
$demo->RcdAddIn('Layout','Content', array('FldEmp'=>TRUE)); 

$demo->CrtRcd('Content','Content of Html Layout');
$demo->RcdAddIn('Content','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Content','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Content','CssClass', array('FldEmp'=>TRUE));
$demo->RcdAddIn('Content','Fuction', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Content','Parameter', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Content','Deploy', array('FldEmp'=>FALSE));

$demo->CrtRcd('Menu','Menu Data');
$demo->RcdAddIn('Menu','Order', array('FldEmp'=>FALSE)); 
$demo->RcdAddIn('Menu','Name', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Menu','HtmlContent', array('FldEmp'=>FALSE),'GString'); 
$demo->RcdAddIn('Menu','title', array('FldEmp'=>TRUE),'GString'); 
$demo->RcdAddIn('Menu','href', array('FldEmp'=>FALSE),'GString'); 

$inside = 'page';
$table = 'Functions';
$demo->CrtTblIn($table, 'Funtions Defined', 'Functions' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , 'ShwTbl', array('Name'=>'Show Table', 'Parameters'=> 2),$inside);
$demo->ot_show($demo->errvalid);

$table = 'Menu';
$demo->CrtTblIn($table, 'Sample Menu', 'Menu' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , '00010000', array('Name'=>'menu 1', 'HtmlContent'=> 'Español', 'title'=> 'Español', 'href'=> '#otespaniol'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '00010010', array('Name'=>'menu 2', 'HtmlContent'=> 'phpclases', 'title'=> 'Author on phpclases', 'href'=> 'https://www.phpclasses.org/browse/author/1085910.html'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '00010020', array('Name'=>'menu 3', 'HtmlContent'=> 'github', 'title'=> 'Author on phpclases', 'href'=> 'https://github.com/MarioCarrocera"'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '00010030', array('Name'=>'menu 4', 'HtmlContent'=> 'Contact Author', 'title'=> 'Send Mail', 'href'=> 'mailto:mario.carrocera@hotmail.com'),$inside);
$demo->ot_show($demo->errvalid);

$table = 'Content';
$demo->CrtTblIn($table, 'Content', 'Content' , $inside);
$demo->AnnInAdd($table,'t',$inside);
$demo->UpsTblIn($table , '00010000', array('Name'=>'down menu', 'Fuction'=> 'ShwTbl', 'Parameter'=>array('Menu'=>'S','page'=>'S'), 'Deploy'=> 'aref'),$inside);
$demo->ot_show($demo->errvalid);



$table = 'Layout';
$demo->CrtTblIn($table, 'Page Layout', 'Layout' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , '1000', array('Name'=>'Previus', 'CssClass'=> 'OutSideup'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '1100', array('Name'=>'Main', 'CssClass'=> 'Main'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '1200', array('Name'=>'FixHeader', 'CssClass'=> 'Header'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '1300', array('Name'=>'FixFooter', 'CssClass'=> 'Footer','Content'=>'Content'),$inside);
$demo->ot_show($demo->errvalid);
$demo->UpsTblIn($table , '1400', array('Name'=>'OutSide', 'CssClass'=> 'OutSideDown'),$inside);
$demo->ot_show($demo->errvalid);







echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>