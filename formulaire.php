<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">   

    <head>    
        <title>Vérification</title>   
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head> 

    <body> 

        <!-- Formulaire -->
        <h2>Je vous invite à remplir ce formulaire pour nous rejoindre : </h2>

        <form method="POST" action="registration.php">

            <table>
                <tr>
                    <td><label>Nom d'utilisateur</label></td>
                    <td><input type="text" name="nomUtilisateur" /></td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Mot de passe</label></td>
                    <td><input type="password" name="password" /></td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Confirmation du mot de passe</label></td>
                    <td><input type="password" name="confirmpassword" /></td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Adresse email</label></td>
                    <td><input type="email" name="email" /></td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Ne pas recevoir d'email de la part du site</label></td>
                    <td><input type="checkbox" name="optionemail" /></td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Votre style de musique</label></td>
                    <td><input type="checkbox" name="check1" value="Blues" /><label>Blues</label></td>
                    <td><input type="checkbox" name="check2" value="Classique" /><label>Classique</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check3" value="Country" /><label>Country</label></td>
                    <td><input type="checkbox" name="check4" value="Electronique" /><label>Electronique</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check5" value="Hip hop" /><label>Hip hop</label></td>
                    <td><input type="checkbox" name="check6" value="Jazz" /><label>Jazz</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check7" value="Métal" /><label>Métal</label></td>
                    <td><input type="checkbox" name="check8" value="Pop" /><label>Pop</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check9" value="Reggae" /><label>Reggae</label></td>
                    <td><input type="checkbox" name="check10" value="RNB" /><label>RNB</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check11" value="Rock" /><label>Rock</label></td>
                    <td><input type="checkbox" name="check12" value="Soul" /><label>Soul</label></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Envoyer" id="formenvoyer" /></td>
                    <td></td>
                </tr>

            </table>

        </form>

        <div id="footer">
            Réalisé par Maxime BLAISE lors d'un TD Programmation WEB
        </div>
    </body>
</html>