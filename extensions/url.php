<?namespace url;#URL Extension - Convenience functions for generating URLs within the application and for redirecting
function site($u=''){return"http://$_SERVER[HTTP_HOST]".\c(base_url).$u;}function redirect($u=''){header('Location: '.site($u));die;}
