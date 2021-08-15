<html>
    <head>
        <title>Nomor Satu</title>
    </head>
    <body>
        <form action="NomorSatu.php" method="POST">
            <table>
                <tr>
                    <td>Baris</td>
                    <td>:</td>
                    <td><input type="text" name="inputRow"/></td>
                </tr>
                <tr>
                    <td>Kolom</td>
                    <td>:</td>
                    <td><input type="text" name="inputColumn"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="OK" /></td>
                    <td><input type="reset" value="Batal" /></td>
                </tr>
            </table>
        </form>
        <br />
        <?php 
            $npm = '201843502094';
            if (isset($_POST['inputRow']) && isset($_POST['inputColumn'])) {
                echo "<table border='1'>";
                for ($i = 0; $i < (int) $_POST['inputRow']; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < (int) $_POST['inputColumn']; $j++) {
                        echo "<td>" . $npm . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>
