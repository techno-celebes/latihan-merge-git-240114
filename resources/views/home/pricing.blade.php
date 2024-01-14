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
                <tr>
                    <td>Parfum Premium</td>
                    <td>Rp 50.000</td>
                </tr>
                <tr>
                    <td>Parfum Arabia</td>
                    <td>Rp 75.000</td>
                </tr>
                <tr>
                    <td>Parfum Saja</td>
                    <td>Rp 60.000</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection