<form action="/mhs/store" method="POST">
    {{ csrf_field() }}
    <div class="">NIM
        <input type="text" name="nim" id="">
    </div>
    <div class="">Nama
        <input type="text" name="nama" id="">
    </div>
    <div class="">Alamat
        <input type="text" name="alamat" id="">
    </div>
    <div class="">Gender
        <select name="gender" id="">
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select>
    </div>
    <div class="">No Hape
        <input type="text" name="no_hp" id="">
    </div>
    <div class=""><br>
        <button type="submit">simpan</button>
    </div>

</form>