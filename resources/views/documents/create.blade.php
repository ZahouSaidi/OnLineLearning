<!DOCTYPE html>
<html>
<head>
    <title>Upload Document</title>
    <style>
        /* Style pour le corps de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; /* Beige */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style pour le conteneur principal */
        h1 {
            text-align: center;
            color: #1e90ff; /* Bleu */
        }

        /* Style pour le formulaire */
        form {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style pour les étiquettes */
        label {
            display: block;
            margin-top: 10px;
            color: #1e90ff; /* Bleu */
        }

        /* Style pour les champs de texte et le sélecteur */
        input[type="text"],
        select,
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style pour le bouton */
        button {
            width: 100%;
            padding: 10px;
            background-color: #1e90ff; /* Bleu */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Style pour le bouton au survol */
        button:hover {
            background-color: #1c86ee; /* Bleu foncé */
        }
    </style>
</head>
<body>
    <div>
        <h1>Upload Document</h1>
        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="cours">Cours</option>
                <option value="examen">Examen</option>
            </select>
            <br>
            <label for="file">PDF File:</label>
            <input type="file" name="file" id="file" required>
            <br>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
