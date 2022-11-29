<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        let x = 1;
        function tambah() {
            x += 1;
            document.getElementById('isi').innerText = x;
        }
    </script>
    <button onclick="tambah()">Tambah</button>
    <p id="isi">1</p>
</body>
</html>