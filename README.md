## API D'ENVOI DE MAIL VIA UN FORMULAIRE - CAS UTILISABLE DANS POSEIDON


##Configuration 

1-Veuillez configurer apache Curl (voir la documentation officiel de apache)
2-Veuillez activer le htaccess (voir la documentation officiel de apache)

3- utilisez la configuration dans httpd.conf

#add by ibson ::ligne à ajouter autorisant les .htaccess
<Directory "${SRVROOT}/htdocs/api_mailing_pos">AllowOverride All</Directory>

api_mailing_pos est le nom de votre dossier contenant le package de mailing

pour la configuration du .htaccess suivre le parametrage effectue dans ce package .

