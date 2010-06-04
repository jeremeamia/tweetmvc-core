<?namespace auth;#Auth - Authentication Library
function login($u,$p){$r=\M::factory('user')->load_all(array(username=>$u,password=>md5($p)),0,1);return$_SESSION[u]=$r[0]->id?:NULL;}
function logged_in(){static$u;$u=$u?:\M::factory('user',$_SESSION[u]?:0);return$u->id?$u:NULL;}function logout(){session_destroy();}
function remember_me($c=0){return($u=logged_in())?setcookie('u',$c?$u->id:0,time()+\c('auth-expire')):($_SESSION[u]=$_COOKIE[u]?:0);}
