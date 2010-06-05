<?#Events Extension - Attach callbacks (with args) to a key. When that event key is called, all of the registered callbacks will be run
function e($k,$c=0,$d=0){static$e;if($c)@$e[$k][]=array($c,$d?:array());else foreach(@$e[$k]as$f)call_user_func_array($f[0],$f[1]);}
