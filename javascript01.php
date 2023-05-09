<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - output</title>
</head>
<body>

    <div id="pesan">Letak text dengan innerHTML</div>

    <script>
        document.write("belajar script Javascript");
        alert("belajar script Javascript");
        document.getElementById("pesan").innerHTML = "Teks dibuat dari script Javascript";
    </script>
</body>
</html>