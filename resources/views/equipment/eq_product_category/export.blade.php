<p>Data Category of Product</p>
<table style="width: 100%;border: 1px solid">
    <thead>
        <tr>
            <th>No</th>
            <th>Category Name</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $no=>$row)
            <tr>
                <td>{{+$no}}</td>
                <td>{{ $row->category_name ?? '' }}</td>
                <td>{{ $row->category_description ?? '' }}</td>
                <td>{{ $row->category_status == '1' ? 'Active' : 'Not Active' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
