Primeiro_site_do_Projeto
========================
Primeiro site a Aula PHP - Projeto 02

Foi usado o .htaccess por ser apache, assim ele vai entender que o caminho do endereço será sempre index.php

.htacess usado

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} -s [OR]
RewriteCond %{REQUEST_FILENAME} -l [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^.*$ - [NC,L]
RewriteRule ^.*$ index.php [NC,L]'


