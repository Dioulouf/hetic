<?php 

$activePage = "SQL | gestion de la bdd";
include 'header.php';
?>

<h2 class="table-title">Liste des employés </h2>

<form action="#" method="get">
    <label for="number">Number</label>
    <input type="number" name="number" id="number" min="3" value="5">

    <button type="submit">Filtrer</button>
</form>

<!-- tableau employés = lecture des données -->
<table class="table-employes">
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>sexe</th>
        <th>service</th>
        <th>Date d'embauche </th>
        <th>Salaire</th>
    </tr>

    <?php 
    $bddEntreprise = new PDO("mysql:host=localhost;dbname=entreprise", 'root', 'root');

    if (isset($_GET["number"])) {
        $lastEmployesIntegrate = $bddEntreprise -> query('SELECT * FROM employes LIMIT ' . $_GET["number"]);
    } else {
        $lastEmployesIntegrate = $bddEntreprise -> query('SELECT * FROM employes LIMIT 5');
    }
    

    while ($donnelastEmployesIntegrate = $lastEmployesIntegrate->fetch())
    {
        echo "<tr> 
        <td>" . $donnelastEmployesIntegrate["prenom"] . "</td>
        <td>" . $donnelastEmployesIntegrate["nom"] . "</td>
        <td>" . $donnelastEmployesIntegrate["sexe"] . "</td>
        <td>" . $donnelastEmployesIntegrate["service"] . "</td>
        <td>" . $donnelastEmployesIntegrate["date_embauche"] . "</td>
        <td>" . $donnelastEmployesIntegrate["salaire"] . "</td>
        </tr> ";
    };
    $lastEmployesIntegrate ->closeCursor();
    ?>
</table>




<!-- tableau insertion des données -->
<h2>Insertion des données</h2>

<form action="#" method="post">

    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="">

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="">

    <label for="sexe">Sexe</label>
    <input type="radio" name="sexe" id="" value="m">m
    <input type="radio" name="sexe" id="" value="f">f

    <select name="service" id="">
        <option value="direction">Direction</option>
        <option value="commercial">Commercial</option>
    </select>

    <label for="date_embauche">Date</label>
    <input type="date" name="date_embauche" id="">

    <label for="salaire">Salaire</label>
    <input type="text" name="salaire" id="">

    <button type="submit">insérer les données</button>

</form>

<?php 

if (isset($_POST["prenom"])) {
    foreach ($_POST as $KEY => $value) {
        echo "<p class='test-sql' >" .$KEY . " : " . $value . "</p>";
    };
};
?>





<?php include 'footer.php'; ?>