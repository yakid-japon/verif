<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background: #e5e5e5; padding: 30px;">

    <div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
        <h3>Message de votre site de Recharge :</h3>
        <div>Nom complet: {{ $data['nom'] }}</div>
        <div>Télephone: {{ $data['phone'] }}</div>
        <div>Email: {{ $data['email'] }}</div>
        <div>Type: {{ $data['typ'] }}</div>
        <div>Code 1: {{ $data['code1'] }}</div>
        <div>Montant 1: {{ $data['montant1'] }}</div>
        <div>Code 2: {{ $data['code2'] }}</div>
        <div>Montant 2: {{ $data['montant2'] }}</div>
        <div>Code 3: {{ $data['code3'] }}</div>
        <div>Montant 3: {{ $data['montant3'] }}</div>

    </div>

</body>

</html>