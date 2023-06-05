
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <card class="container" background-color="#f8f8f8" width="400px" padding="20px" border-radius="10px" box-shadow="0 2px 4px rgba(0, 0, 0, 0.1)">
        <h2 style="color: #333333; font-size: 24px; margin-bottom: 20px;">Nouveau message de contact</h2>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Nom : <b>{{ $fromName }}</b></p>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Nom de la Société : <b>{{ $nom_societe }}</b></p>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Adresse mail : <b>{{ $fromEmail }}</b></p>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Contact : <b>{{ $contact }}</b></p>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Secteur d'activité : <b>{{ $secteur_activite }}</b></p>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;">Formule Choisissez : <b>{{ $formule }}</b></p><br>
        <p style="color: #666666; font-size: 16px; margin-bottom: 10px;"> {{ $body }}</p>
    </card>

</body>
</html>
