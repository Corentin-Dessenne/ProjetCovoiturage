<!DOCTYPE html>
<html>
<head>
    <title>Modification d'une demande de trajet</title>
    <link href="" rel="stylesheet" >
</head>

<body>

    <h1>Modification d'une demande de trajet</h1>
    <form action="">
        <div>
            <input type="radio" value="Aller" id="Aller" name="AllerRetour" ><label for="Aller">Aller</label>
            <input type="radio" name="AllerRetour" value="Retour" id="Retour"><label for="Retour">Retour</label>
        </div>
        <div>
            <p>Ville de départ/arrivée:</p>   <input type="text" name="Ville" id="Ville">
            <p>Adresse de départ/arrivée:</p>   <input type="text" name="Adresse0" id="Adresse">
        </div>
        <p>Date et heure de départ:</p>
        <input type="datetime-local" id="Heure-de-Depart" name="Heure-de-Depart" value="" min="2022-09-16T00h00" max="2022-10-01T23h59">
        <p>Date et heure d'arrivée:</p>
        <!--//insérer la date via JS/API google-->
        <br>
        <p>Nombre de passager: </p>
        <input type="number" name="NbPass" id="NbPass" step="1" min="0" max="15">
        <br/>
        <p>Description (facultatif): </p>
        <textarea name="Description" id="Description" placeholder="Écris içi la description de ta demande de trajet" rows="8" cols="65"></textarea>
        <br/>
        <input type="button" name="send" id="send" value="Envoyer">

    </form>




</body>
</html>