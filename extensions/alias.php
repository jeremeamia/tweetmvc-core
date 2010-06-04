<?#Alias Extension - Allows for expanding short names to longer ones for use in application code
array_walk(@c('class-aliases'),function($v,$k){class_exists($k)&&class_alias($k,$v);});
