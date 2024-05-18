<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>

    <style>
       .Form-Pendaftaran {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 10px;
        background-color: aqua; 
        border-radius: 20px;
        width: 220px;
        height: 300px;
        margin: auto;
       } 

       h2 {
        padding-top: 80px;
       }
    </style>

</head>
<body>
    <h2  align="center"> <u><b>Formulir Pendaftaran</b></u> </h2>

    <div class="Form-Pendaftaran">
    <form action="proses_pendaftaran.php" method="post">
        <label for="nama"> <b>Nama Lengkap:</b> </label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="email"> <b>Masukan Email:</b> </label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password"> <b>Password:</b> </label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="id"> <b>ID:</b> </label><br>
        <input type="text" id="id" name="id" required><br><br>
        
        <input type="submit" value="Daftar">
    </form>
    </div>
</body>
</html>