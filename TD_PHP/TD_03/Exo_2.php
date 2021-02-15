<form>
    <p>
    <label for="prenom">prenom : </label>
    <input type="text" name="prenom">
    <label for="nom">nom : </label>
    <input type="text" name="nom">

    </p>
    <p>
    <label for="sex"> sexe : </label>
        <input type="radio" name="sex" value="female">
        <label for="female"> Femme</label>

        <input type="radio" name="sex" value="male">
        <label for="male">Homme</label>
    </p>

    <p>
        Tu aime les :
        <br>

        <input type="checkbox" name="chien" value="oui">
        <label for="chien">Chiens</label>
        <br>
        <input type="checkbox" name="chat" value="oui">
        <label for="chat">Chats</label>
        <br>
        <input type="checkbox" name="serpents" value="oui">
        <label for="serpents">Serpents</label>
        <br>

        <input type="checkbox" name="hamster" value="oui">
        <label for="hamster">Hamsters</label>
    </p>

    <p>
        <label> Choisis ton monstre : </label>
        <select name="monstre">
            <option value="">--Please choose an option--</option>
            <option value="Dragon">Dragon</option>
            <option value="Dinosaure">Dinosaure</option>
            <option value="King kong">King kong</option>
            <option value="Lochness">Lochness</option>
            <option value="BigFoot">Bigfoot</option>
            <option value="Godzilla">Godzilla</option>
        </select>
    </p>
    <p>
        <label for="voit">Choisis une voiture:</label>

        <select name="cars[]" id="voit" multiple>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
            <option value="bmw">BMW</option>
            <option value="vw">VW</option>
        </select>
    </p>
<p>
<label for="vie">Raconte moi ta vie :</label>
<textarea name="vida" id="vie" cols="30" rows="5" placeholder="Raconte pas trop quand meme"></textarea>
</p>

<input type="submit">
</form>

<?php
var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_REQUEST);
