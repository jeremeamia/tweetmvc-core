<?namespace db;const W=' WHERE ';const A=' AND ';#Database Extension - For performing all database operations
function c(){static$m;return$m=@$m?:new\mysqli(\c('db-host'),\c('db-user'),\c('db-pass'),\c('db-name'));}                                   #Connection singleton
function s($c,$w='',$b=0,$l=0){$a=array();$r=q(1,$c,w($w).o($b).($l?l($l):''));while($r&&$o=$r->fetch_object($c))$a[]=$o;return$a;}         #Select
function i($c,$a){f($a);a($a);return q(2,$c,'(`'.m(\array_keys($a),'`,`').'`)VALUES('.m($a).')');}                                          #Insert
function u($c,$a,$i){f($a);a($a,'`%s`=');return q(3,$c,m($a).W."id=$i");}function a(&$a,$p=0){\array_walk($a,'db\v',$p);return$a;}          #Update
function d($c,$i=0){return q(4,$c,W.(\is_int($i)?(!$i?'1':"id=$i"):$i));}function o($b){return m($b)?" ORDER BY $b[0] $b[1]":'';}           #Delete, Order by
function r($c,$i){return($o=q(1,$c,W."id=$i LIMIT 1")->fetch_object($c))?$o:e($c);}function l($l){return' LIMIT '.($l[1]?"$l[0],$l[1]":$l);}#Single Row, Limit
function e($c){$o=new$c;$r=q(0,$c);while($f=$r->fetch_row())$o->$f[0]=NULL;return$o;}function w($w){return m($w)?W.m(a($w,'`%s`='),A):$w;}  #Get Empty Row
function t($s,$t){$a=array("SHOW COLUMNS FROM $t","SELECT $t.* FROM $t","INSERT INTO $t","UPDATE $t SET","DELETE FROM $t");return$a[$s];}   #SQL query type
function v(&$v,$k=0,$p=0){return$v=($p?\sprintf($p,$k):'').(\is_numeric($v)?$v:($v===NULL?'NULL':'"'.\addslashes($v).'"'));}                #Prepare a value
function j($t0,$t1,$f=1){return" INNER JOIN $t1 ON ".($f?"$t0.id=$t1.{$t0}_id":"$t0.{$t1}_id=$t1.id");}                                     #Format a join
function g($t0,$t1=0){$g=@array($t0=\get_class($t0)?:$t0,$t1=\get_class($t1)?:$t1);\sort($g);return array(m($g,'_to_'),$t0,$t1);}           #Get glue table
function q($s,$c=0,$w=''){$q=!$c?$s:t($s,$c).$w;return c()->query($q);}function f(&$a){$a=(array)$a;unset($a['relationships']);}            #Perform query, filter fields
function belongs_to($t,$f,$o){$fk=$f.'_id';return r($f,$o->$fk);}function has_many($t,$f,$o){return s($f,W.$t.'_id='.$o->id);}              #Belongs to, Has many
function has_one($t,$f,$o){return m($r=s($f,W.$t.'_id='.$o->id))?$r[0]:$r;}function m($a,$s=','){return\is_array($a)?\join($s,$a):'';}      #Has one
function many_to_many($t,$f,$o){list($g,,)=g($t,$f);return s($f,j($f,$g).j($g,$t,0).W.$t.'.id='.$o->id);}                                   #Many to many