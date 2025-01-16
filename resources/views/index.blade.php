<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Liste des Voitures</title>
</head>
<body>
    <h1>Liste des Voitures</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Catégorie</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voitures as $voiture)
                <tr>
                    <td>{{ $voiture->marque }}</td>
                    <td>{{ $voiture->modele }}</td>
                    <td>{{ $voiture->categorie }}</td>
                    <td>{{ $voiture->prix }}€</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>