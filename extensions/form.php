<?namespace form;#Form Helper
function open($a=array()){return"<form".\html\attr($a+array(action=>$_SERVER[REQUEST_URI],method=>post)).'>';}
function input($n,$t=text,$v='',$a=array()){$a[id]=$a[name]=$n;$a[type]=$t;if($v)$a[value]=$v;return\html\tag(input,0,$a);}
function select($n,$o=array(),$s='',$a=array(),$d=0){$a[id]=$a[name]=$n;return\html\tag(select,options($o,$s,$d),$a);}
function options(array$o,$s='',$d=0){if(\is_string($d))$o=array(''=>$d)+$o;\array_walk($o,'form\opt',$s);return join('',$o);}
function opt(&$v,$k,$s){$a[value]=$k;if($s===$k)$a[$b=selected]=$b;$v=\html\tag(option,$v,$a);}
function textarea($n,$v='',$a=array()){$a[id]=$a[name]=$n;return\html\tag(textarea,$v,$a);}function close(){return'</form>';}
