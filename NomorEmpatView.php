<html>
    <head><title>Nomor Empat</title>
    <body>
        <h2>Tambah/Edit Barang</h2>
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" id="kode" />
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" id="nama" />
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>:</td>
                <td><input type="text" id="harga" />
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><input type="text" id="jumlah" />
            </tr>
            <tr>
                <td><button id="btnSave" onclick="save()">Tambah</button></td>
            </tr>
        </table>
        <br>
        <h2>List Barang</h2>
        <div id="tabelBarang">
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="NomorEmpat.js"></script>
    </body>
</html>
