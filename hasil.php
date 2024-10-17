<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: antiquewhite;">
<form action="index.html" method="get" style="margin-left: 200px;">
        <fieldset style="background-color: rgb(237, 201, 154); width: 70%; margin: 110px;">
            <img src="image/book.png" width="450px" style="float: right; margin-left: 35px;">

    <h1>Selamat Datang </h1>
    <table border="1">

        <tr>
            <td>Nama</td>
            <td><?php echo htmlspecialchars($_GET['Nama']); ?></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><?php echo htmlspecialchars($_GET['NIM']); ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_GET['email']); ?></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td><?php echo htmlspecialchars($_GET['Jurusan']); ?></td>
        </tr>

        <tr>
            <td>Pilih Kelas</td>
            <td><?php echo htmlspecialchars($_GET['kelas']); ?></td>
        </tr>
        
</table> <br>
<form action="index.html">
    <button type="submit" class="buton">Exit</button>
</form>  
</body>
</html>