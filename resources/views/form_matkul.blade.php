<form action="/matkul/store" method="POST">
    {{ csrf_field() }}
    <div class="">Kode Mata kuliah
        <input type="text" name="kd_matkul" id="">
    </div>
    <div class="">nama matkul
        <input type="text" name="nama_matkul" id="">
    </div>
    <div class="">sks
        <input type="text" name="sks" id="">
    </div>
    <div class="">Status
        <select name="status" id="">
            <option value="wajib">wajib</option>
            <option value="opsional">opsional</option>
        </select>
    </div>
    </div>
    <div class=""><br>
        <button type="submit">simpan</button>
    </div>

</form>