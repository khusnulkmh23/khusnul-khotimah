<?php
$operand1=$_POST['Operandkiri'];
$operand2=$_POST['Operandkanan'];
$Operator1=$_POST ['Operator'];
if ($Operator1=="=="){
	$hasil = $operand1==$operand2;
}
if ($Operator1=="<"){
	$hasil = $operand1<$operand2;
}
if ($Operator1==">"){
	$hasil = $operand1>$operand2;
}
if ($Operator1=="<="){
	$hasil = $operand1<=$operand2;
}
if ($Operator1==">="){
	$hasil = $operand1>=$operand2;
}
if ($Operator1=="!="){
	$hasil = $operand1!=$operand2;
}
echo "Hasil = $hasil";
if ($hasil==1) {
	echo "True";
}
elseif ($hasil==0) {
	echo "False";
}
?>