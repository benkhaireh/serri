<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table>
        <tr>
            <td>
                <h2>{{ $details["object"] }}</h2>
            </td>
        </tr>
        <tr>
            <td>
                <h6>
                    <strong>Nom</strong> : {{ $details["fullname"] }}
                </h6>
                <h6>
                    <strong>Email</strong> : {{ $details["email"] }}
                </h6>
            </td>
        </tr>
        <tr>
            <td>
                <p>{{ $details["message"] }}</p>
            </td>
        </tr>
    </table>
</body>

</html>