<?namespace notices;#Notices
function add($t,$m){$a=&$_SESSION[n];$a[]=array($t,$m);}
function show(){$a=&$_SESSION[n];foreach($a?:array()as$n)echo"<div class=\"notice $n[0]\">$n[1]</div>";$a=array();}
