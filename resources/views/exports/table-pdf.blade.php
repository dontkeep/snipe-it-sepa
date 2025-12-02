<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            line-height: 1.3;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 2px solid #333;
            padding-bottom: 8px;
        }
        .header h1 {
            margin: 0;
            color: #333;
            font-size: 16px;
        }
        .print-info {
            text-align: center;
            color: #666;
            margin-bottom: 10px;
            font-size: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }
        th {
            background-color: #2c3e50;
            color: white;
            border: 1px solid #34495e;
            padding: 6px 4px;
            text-align: left;
            font-weight: bold;
        }
        td {
            border: 1px solid #dee2e6;
            padding: 5px 4px;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .footer {
            margin-top: 15px;
            text-align: center;
            font-size: 9px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 8px;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ config('app.name') }} - {{ $title }}</h1>
    </div>
    
    <div class="print-info">
        Generated on: {{ $printDate }} | Total Records: {{ count($data) }}
    </div>

    @if(!empty($data) && !empty($columns))
        <table>
            <thead>
                <tr>
                    @foreach($columns as $column)
                        <th>{{ $column['title'] }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                    <tr>
                        @foreach($columns as $column)
                            <td>
                                @if(isset($row[$column['field']]))
                                    {{ $row[$column['field']] }}
                                @else
                                    --
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-data">
            No data available to print.
        </div>
    @endif

    <div class="footer">
        {{ config('app.name') }} - Printed on {{ $printDate }}
    </div>
</body>
</html>