<?namespace cookie;#Cookie Extension - Allows secure read/write access to cookies using a checksum-like security system
function set($k,$v,$e=0){setcookie($k,salt($k,$v),$e);}function salt($k,$v){return sha1(c(salt).$v.$_SERVER[HTTP_USER_AGENT].$k)."~$v";}
function get($k,$d=NULL){return($c=$_COOKIE[$k])&&count($x=explode('~',$c))>1&&salt($k,$x[1])==$c?$x[1]:$d;}
