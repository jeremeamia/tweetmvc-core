<?#Benchmark Extension - The b() function acts as a stopwatch and can be used to benchmark sections of code
function b($k=0){static$a=array();return number_format(($a[$k]=microtime(1)-$a[$k]?:0)*1000,2).' ms';}
