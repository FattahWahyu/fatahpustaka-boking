<html>

<head>
    <title>Form input mahasiswa</title>
</head>
<style> 
h1 {
    text-align: center;

}

</style>

<body>
    <h1>Aplikasi Sederhana Digital Learning Management System (Di-Lemas)</h1>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post">
            <table>
                
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kls" id="kls">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmp" id="tmp">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="almt" id="almt">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                   <td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
                    <input type="radio" name="jk" value="Perempuan"> Perempuan<br></td>

                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
                
            </table>
</form>
    </center>
</body>
</html>