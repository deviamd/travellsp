<table border="2">
    <h2>Laporan Transaksi</h2>
    <thead>
        <tr style="cursor: pointer;">
            <th>Id</th>
            <th>Travel Packages Id</th>
            <th>User Id</th>
            <th>Addtional Visa</th>
            <th>Total Transaksi</th>
            <th>Status Transaksi</th>



        </tr>
    </thead>
    <tbody>

    @foreach($laporan as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->user_id}}</td>
    <td>{{ $row->travel_package_id}}</td>
    <td>{{ $row->addtional_visa}}</td>
    <td>{{ $row->total_transaksi}}</td>
    <td>{{ $row->status_transaksi}}</td>`
</td>
</tr>
@endforeach
</tbody>
