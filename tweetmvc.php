﻿<?const VERSION='v0.8.0';#TweetMVC Framework by Jeremy Lindblom - Framework core, setup, and request handler.
error_reporting(30711);function c($k){static$c;$c=$c?:include'config.php';return$c[$k];}foreach(c('extensions')as$f)require c('x')."$f.php";#Setup TweetMVC and load extensions
class M{static function factory($c,$i=0){require_once c('m')."$c.php";$m=new$c;return$m->load($c,$i);}function load($c,$i){return$this;}}   #Model Class
class V{function V($f){$this->f=$f;}function __toString(){ob_start();extract((array)$this);require c('v')."$f.php";return ob_get_clean();}} #View Class
class C{function C($m,$a){$this->view=new V(c('template'));call_user_func_array(array($this,"action_$m"),$a);echo$this->view;}}             #Controller Class
@list($c,$m,$a)=explode('/',$_GET[r],3);$c=$c?:c('controller');require c('c')."$c.php";$o=new$c($m?:c('action'),$a?explode('/',$a):array());#Process and execute the request
