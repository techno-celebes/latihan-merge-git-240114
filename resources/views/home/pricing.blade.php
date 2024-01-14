@extends ('master.master_home')
@section ('content')
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 100px
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: black;
            color: white;
        }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($service as $a)
                <tr>
                    <td>Parfum Premium</td>
                    <td>Rp 50.000</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection