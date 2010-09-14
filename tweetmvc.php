<?const VERSION='v2.0.0a';#TweetMVC Framework by Jeremy Lindblom - Framework core, setup, and request handler.
error_reporting(341);function c($k){static$c;$c=$c?:include'config.php';return$c[$k];}$g=$_GET;$c=Controller_.($g[c]?:c(dc));$c=new$c($g);  #Setup & Configuration
class M{function factory($c){$c=Model_.$c;return new$c;}function loaded(){return(bool)$this->id;}}foreach(c(extensions)as$f)require"$f.php";#Model & Extension Loader
class V{function V($f){$this->_f=$f;}function __toString(){ob_start();extract((array)$this);require c(v)."$_f.php";return ob_get_clean();}} #View Class
class C{function C($p){$this->_params=$p;}function before(){}function after(){}function param($k,$d=NULL){return$this->_params[$k]?:$d;}}   #Controller Class
function __autoload($c){require_once c(app_path).strtolower(strtr($c,_,'/')).'.php';}$c->before();$c->{action_.($g[a]?:c(da))};$c->after(); #Autoloader & Execution
