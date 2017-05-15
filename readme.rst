Note importante :

La page de login se connecte à une base de donnée nommée "employee".
Elle recherche des informations se trouvant dans une table nommée "tbl_usrs".

Pour utiliser une autre base de donnée, se rendre dans le fichier application/config/database.php. Puis mettre a jour les informations en fonction de ce que vous possédez. Pour utiliser une autre table, modifier le ficher "Login_model" se trouvant dans application/models".

Le mot de passe utiliser par l'utilisateur doit être inscrit dans la base de donnée. Ce dernier doit être hacher en MD5.
