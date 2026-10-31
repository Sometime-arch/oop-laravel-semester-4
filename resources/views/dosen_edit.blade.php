<form action="../update_dosen/{{$dosen -> id}}" method="POST">
    {{ csrf_field() }}
    <div class="">NIDN
        <input type="text" name="nidn" value="{{ $dosen -> nidn }}">
    </div>
    <div class="">nama
        <input type="text" name="nama" value="{{ $dosen -> nama }}">
    </div>
    <div class="">alamat
        <input type="text" name="alamat" value="{{ $dosen -> alamat }}">
    </div>
    <div class=""><br>
        <button type="submit">simpan</button>
    </div>

</form>