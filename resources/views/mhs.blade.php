<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>No Hape</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->no_hp }}</td>
    </tr>
    @endforeach
</table>