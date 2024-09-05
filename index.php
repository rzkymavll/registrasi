<?php?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Form Register</title>
    </head>
    <body>
        <form class="" action="proses.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="Nama" autocomplate="off"> <br>
            <label for="">nim</label>
            <input type="text" name="Nim" autocomplate="off"> <br>
            <label for="">Kelas</label>
            <input type="Kelas" name="Kelas" autocomplate="off"> <br>
            <label for="">Gender</label>
            <input type="radio" name="Gender" value="Pria">Pria
            <input type="radio" name="Gender" value="Wanita">Wanita
            <label for="">Email</label>
            <select class="" name="">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select> <br>
            <label for="">Komentar</label> <br>  
            <textarea name="komentar" rows="8" cols="80"></textarea> <br>
            <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>    
        </form>
    </body>
</html>