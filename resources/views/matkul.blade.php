<table border="1">
    <tr>
        <th>Kode Matkul</th>
        <th>Nama Matkul</th>
        <th>Jumlah SKS</th>
        <th>Status</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->kd_matkul }}</td>
        <td>{{ $item->nama_matkul }}</td>
        <td>{{ $item->sks }}</td>
        <td>{{ $item->status }}</td>
    </tr>
    @endforeach
</table>