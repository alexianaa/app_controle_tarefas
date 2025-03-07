<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <style>
        .titulo {
            border: 1px;
            background-color: #c2c2c2;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .tabela {
            width: 100%;
        }

        table th {
            text-align: left
        }

        .page-break {
            page-break-after: always;
        }

        td, th {
            vertical-align: top;
            padding: 10px;
            border-bottom: 1px solid black;
        }
    </style>
</html>
<body>
    <div class="titulo">Lista de tarefas</div>
    
    <table class="tabela" >
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 60%">Tarefa</th>
                <th style="width: 15%">Data limite conclusão</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ $tarefa->data_limite_conclusao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="page-break"></div>

    <h2>Página 2</h2>
</body>