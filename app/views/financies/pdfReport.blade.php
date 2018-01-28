<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
</head>
<body>
<h2>Prihodi u periodu od {{$from}} do {{$to}}</h2>
<table class="report_tables">
    <thead>
    <tr>
        <th>Tip</th>
        <th>Id</th>
        <th>Datum</th>
        <th>Iznos</th>
    </tr>
    </thead>
    <tbody>
        @foreach($revenues as $key=>$revenue)
            <tr>
                <td>{{$revenue->info}}</td>
                <td>{{$revenue->id}}</td>
                <td>{{date('d.m.Y.', strtotime($revenue->date))}}</td>
                <td>{{$revenue->total}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
</body>
</html>