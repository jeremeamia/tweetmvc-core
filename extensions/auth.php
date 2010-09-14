<?namespace auth;#Auth - Authentication Library
function login($u,$p){$r=\M::factory(user)->load_all(array(username=>$u,password=>md5($p)),0,1);return\s()->u=$r[0]->id?:NULL;}
function logged_in(){static$u;$u=$u?:\M::factory(user,\s()->u?:0);return$u->id?$u:NULL;}function logout(){session_destroy();}
function remember_me($c=0){return($u=logged_in())?\cookie\set(u,$c?$u->id:0,time()+\c(auth_expire)):(\s()->u=\cookie\get(u,0));}
