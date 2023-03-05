<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset= "utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
      
        <form method="post" action="form.php">
            <fieldset>
              <legend>Informations personnelles :</legend>
              <div class="champ">
                <label for="nom">Nom de famille :</label>
                <input type="text" id="nom" name="nom">
              </div>
              <div class="champ">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom">
              </div>
              <div class="champ">
                <label for="mail">Adresse mail :</label>
                <input type="email" id="mail" name="mail">
               </div>
               <div class="champ">
                 <label for="age">Age :</label>
                 <input type="number" id="age" name="age">
               </div>
              <div class="champ">
                <input type="radio" id="h" name="sexe" value="homme">
                <label for="h">Homme</label>
                <input type="radio" id="f" name="sexe" value="femme">
                <label for="f">Femme</label>
               </div>
              <div class="champ">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                  <optgroup label="Europe">
                    <option value="france">France</option>
                    <option value="belgique">Belgique</option>
                    <option value="suisse">Suisse</option>
                   </optgroup>
                  <optgroup label="Afrique">
                    <option value="algerie">Algérie</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="maroc">Maroc</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="benin">Bénin</option>
                    <option value="togo">Togo</option>
                   </optgroup>
                  <optgroup label="Amerique">
                    <option value="canada">Canada</option>
                  </optgroup>
                </select>
              </div>
            </fieldset>
            <fieldset>
              <legend>Compétences / expérience :</legend>
              <div class="champ">
                <input type="checkbox" id="html" name="competences" value="html">
                <label for="html">HTML</label>
                <input type="checkbox" id="css" name="competences" value="css">
                <label for="css">CSS</label>
                <input type="checkbox" id="js" name="competences" value="javascript">
                <label for="js">JavaScript</label>
                <input type="checkbox" id="php" name="competences" value="php">
                <label for="php">PHP</label>
                <input type="checkbox" id="sql" name="competences" value="sql">
                <label for="sql">SQL</label>
                <input type="checkbox" id="seo" name="competences" value="seo">
                <label for="seo">SEO</label>
              </div>
              <div class="champ">
                <textarea name="exp" placeholder="Décrivez une expérience pro"></textarea>
               </div>
            </fieldset>
            <fieldset>
              <legend>Validation :</legend>
              <div class="champ">
                <label for="pass">Choisissez un mot de passe :</label>
                <input type="password">
              </div>
              <input type="submit" value="Envoyer">
            </fieldset>
          </form>
    </body>
</html>