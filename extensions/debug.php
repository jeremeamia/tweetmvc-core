<?#Debug Extension - A quick and easy debugging function that prints a preformatted var_dump of a variable(s) and then dies
function d(){foreach(func_get_args()as$a){echo'<pre>';var_dump($a);echo'</pre>';}die;}
