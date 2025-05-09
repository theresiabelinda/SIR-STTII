<html>
    <head>
        <title>Data Kategori</title>
    </head>
    <body>

        <h3>Data Kategori</h3>

        <table border="1" width="100%">
            <thead>
                <tr>
                    <th style="text-align: left;">No</th>
                    <th style="text-align: left;">Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach($kategori as $row)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nama_kategori}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>