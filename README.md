# Site MMI Champs

## Le site du BUT MMI de Champs-sur-Marne
Suite à la réforme passant d'une formation de DUT en 2 années à une formation en 3 ans, appelée BUT; le site de la formation MMI de l'IUT de Champs-sur-Marne avait besoin d'une mise à jour.
C'est pourquoi nous avons fait la refonte du site actuel.
http://www.dut-mmi-champs.fr/

## Comment installer le site but-mmi-champs.fr en local:

### Récupération des fichiers
1) Pour votre site web local, si vous utilisez : 
a. XAMPP, créez un dossier à l’intérieur du dossier C:xampp\htdocs\ 
b. MAMP, créez un dossier à l’intérieur du dossier dans /Applications/MAMP/htdocs/
c. WAMP, créez un dossier à l’intérieur du dossier C:wamp64\www\

2) Nommez le dossier "mmi-champs".

3) Décompressez le fichier ZIP.
4) Cliquez sur le dossier "BUT_MMI_Champs", et copiez et collez tous les fichiers dans le nouveau dossier "mmi-champs"

### Importation de la base de données

5) Vous devez importer la base de données de notre site. Ouvrez phpMyAdmin sur votre serveur local en cliquant sur le lien suivant :

    http://localhost/phpmyadmin/

6) Créer une base de données sous le nom "mmi-bdd".
7) Cliquez sur 'Importer', puis sur le bouton 'Choisir un fichier' pour sélectionner et télécharger le fichier  de la base de données nommé "mmi-bdd.sql".
Enfin, cliquez sur le bouton "Exécuter" en bas de la page.
PhpMyAdmin va décompresser et importer votre base de données.
8) Notez les informations se trouvant en haut de la page : 
    a. le port qui correspond au 4 chiffres après "MySQL:",
    b. le nom de la base de données.
    Ces informations seront utiles pour l'étape suivante.

### Connexion à la base de données
La dernière étape consiste à mettre à jour le fichier model.php. Ce fichier contient la connexion à la base de données.

8) Ouvrez le fichier model.php dans un éditeur de texte comme Visual Code.

9) Dans la fonction dbConnect(), remplacez le nom de la basse de données "dbname=u380906830_mmi" par "dbname=mmi-bdd", ainsi que le port si le votre n'est pas 3308.

10) Dans la même fonction, remplacez le nom d’utilisateur de la base de données par votre nom d’utilisateur MySQL local qui est "root" et laissez vide le champ mot de passe.

Vous devriez obtenir ceci : 

```
function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=mmi-bdd;charset=UTF8;port=3306', 'root', '');
    return $db;
}

```
### Visiter le site

Vous pouvez maintenant visiter le site web en local avec cette URL : http://localhost/BUT_MMI_Champs.

## Besoin d'aide ?
Si vous avez un problème, n'hésitez pas à contacter l'IUT de Champs-sur-Marne aux coordonnées suivantes : 
- E-mail : mmi-dir.iut@univ-eiffel.fr
- Téléphone : 01 60 95 85 85
