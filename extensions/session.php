<?#Session Extension - Starts the session and allows read/write access to the session array
session_name(tweetmvc);session_start();function s(){static$s;return$s?:$s=new ArrayObject(&$_SESSION,2);}
