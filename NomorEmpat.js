$(document).ready(function() {
    loadData();
});

var selectedEditData = {};
var data = [];

function loadData() {
    $.ajax({
        url: 'NomorEmpatAPI.php',
        type: 'get',
        success: (result) => {
            selectedEditData = {};
            reset();
            data = JSON.parse(result);
            const table = $('<table border=1>');
            const firstRow = `
                <tr>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Harga Barang</td>
                    <td>Jumlah Barang</td>
                    <td>Actions</td>
                </tr>`
            table.append(firstRow);
            data.forEach((item, index, arr) => {
                const row = `
                    <tr>
                        <td>${item.kode_barang}</td>
                        <td>${item.nama_barang}</td>
                        <td>${item.harga_barang}</td>
                        <td>${item.jumlah_barang}</td>
                        <td>
                            <button onclick='edit(${index})'>Edit</button>
                            <button onclick='remove(${item.kode_barang})'>Delete</button>
                        </td>
                    </tr>`
                table.append(row);
            })
            $('#tabelBarang').empty();
            $('#tabelBarang').append(table);
        }
    })
}

function reset() {
    $('#kode').val("");
    $('#nama').val("");
    $('#harga').val("");
    $('#jumlah').val("");
    $('#btnSave').html("Tambah");
}

function save() {
    if (selectedEditData.kode_barang != undefined) {
        update();
        return
    }
    $.ajax({
        url: 'NomorEmpatAPI.php?action=create',
        type: 'post',
        data: {
            kode_barang: $('#kode').val(),
            nama_barang: $('#nama').val(),
            harga_barang: $('#harga').val(),
            jumlah_barang: $('#jumlah').val(),
        },
        success: () => loadData()
    })
}

function edit(index) {
    selectedEditData = data[index];
    $('#kode').val(selectedEditData.kode_barang);
    $('#nama').val(selectedEditData.nama_barang);
    $('#harga').val(selectedEditData.harga_barang);
    $('#jumlah').val(selectedEditData.jumlah_barang);
    $('#btnSave').html("Edit");
}

function remove(kodeBarang) {
    $.ajax({
        url: 'NomorEmpatAPI.php?action=delete',
        type: 'post',
        data: {
            kode_barang: kodeBarang
        },
        success: () => loadData()
    });
}

function update() {
    $.ajax({
        url: 'NomorEmpatAPI.php?action=update',
        type: 'post',
        data: {
            kode_barang: $('#kode').val(),
            nama_barang: $('#nama').val(),
            harga_barang: $('#harga').val(),
            jumlah_barang: $('#jumlah').val(),
        },
        success: () => loadData()
    })
}
