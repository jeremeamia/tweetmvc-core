<?#Model Extensions - Incrementally increase the capabilities of the Model into an ORM
class ML extends M{function load($i){return db\r($this->_table,$i);}function load_all($w=0,$b=0,$l=0){return db\s($this->_table,$w,$b,$l);}}#Loadable Model
class MLR extends ML{function related($k){M::factory($k);$m='db\\'.$this->_relationships[$k];return$m($this->_table,$k,$this);}}            #Loadable Relationships Model
class MS extends MLR{function save(){$t=$this;$c=$t->table;$r=($i=&$t->id)?db\u($c,$t,$i):db\i($c,$t);$i=$i?:db\c()->insert_id;return$r;}}  #Savable Model
class MSR extends MS{function add(M$o){list($g,$c,$f)=db\g($t=$this,$o);return@db\i($g,array($c._id=>$t->id,$f._id=>$o->id));}}             #Savable Relationships Model
class MD extends MSR{function delete(){return db\d($this->_table,$this->id);}function delete_all(){return db\d($this->_table);}}            #Deletable Model
class MDR extends MD{function remove(M$o){list($g,$c,$f)=db\g($this,$o);return@db\d($g,$c."_id=$this->id AND {$f}_id=$o->id");}}            #Deletable Relationships Model
