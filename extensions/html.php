<?namespace html;#HTML Extension - Convenience functions for tags, attributes, and hyperlinks
function attr(array$a){\asort($a);$h='';foreach($a as$k=>$v)$h.=" $k=\"$v\"";return$h;}
function tag($t,$c='',$a=array()){return"<$t".attr($a).($c!==0?">$c</$t>":' />');}
function link($u='',$c='',$a=array()){$a[href]=$u=\url\site($u);return tag(a,$c?:$u,$a);}
