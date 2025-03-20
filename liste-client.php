<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1f3b50;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 600px;
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .menu button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 14px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }

        a {
            color: blue;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
        <div class="menu">
            <a href="liste-client">Liste des clients</a>
            <a href="ajout-client">Ajouter un client</a>
            <a href="liste-compte" >Liste des comptes</a>
            <a href="ajout-compte" >Ajouter un compte</a>
        </div>

    <h2>Liste des clients</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Options</th>
        </tr>
        <tr>
            <td>LARAKI</td>
            <td>Chaima</td>
            <td>Cergy</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>Xaps</td>
            <td>Zak</td>
            <td>Paris</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>Rhym</td>
            <td>Lara</td>
            <td>Paris</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>Jora</td>
            <td>Lewei</td>
            <td>Bru</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>Hanane</td>
            <td>Kodari</td> 
            <td>Br</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>Reg</td>
            <td></td>
            <td>Les</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>LARAK</td>
            <td>Chaima</td>
            <td>Cergy</td>
            <td><a href="#">Modifier</a><a href="#">Supprimer</a></td>
        </tr>
    </table>
    </html>