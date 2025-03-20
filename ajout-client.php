<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion bancaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }
        .menu {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .menu button {
            background: black;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 14px;
            flex: 1;
            margin: 2px;
        }
        .menu button:hover {
            background: #444;
        }
        h2 {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-ajouter {
            background: #1e50ff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-ajouter:hover {
            background: #153ccf;
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
        <form>
            <input type="text" placeholder="Nom" required>
            <input type="text" placeholder="Prénom" required>
            <input type="text" placeholder="Ville" required>
            <button type="submit" class="btn-ajouter">Ajouter</button>
        </form>


</body>
</html>
