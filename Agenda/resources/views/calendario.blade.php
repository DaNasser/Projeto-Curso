<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div id='wrap'>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tarefa</th>
                    <th scope="col">Data</th>
                    <th scope="col">Grau de Prioridade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefa as $tarefa)
                <td>{{$tarefa->nome}}</td> 
                <td>{{$tarefa->data}}</td> 

                @endforeach
             
            </tbody>
        </table>

        <button class="btn btn-primary" onclick="addTask()">Adicionar Tarefa</button>
    </div>

    <script>
        let taskCounter = 1;

        function addTask() {
            const tableBody = document.getElementById('tasksTableBody');

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <th scope="row">${taskCounter}</th>
                <td contenteditable="true">Nova Tarefa</td>
                <td contenteditable="true">Nova Data</td>
                <td contenteditable="true">Nova Prioridade</td>
                <td>
                    <button class="btn btn-warning" onclick="editTask(this)">Editar</button>
                    <button class="btn btn-danger" onclick="deleteTask(this)">Excluir</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            taskCounter++;
        }

        function editTask(button) {
            const row = button.closest('tr');
            const cells = row.querySelectorAll('td[contenteditable="true"]');

            cells.forEach(cell => {
                cell.setAttribute('contenteditable', 'true');
            });
        }

        function deleteTask(button) {
            const row = button.closest('tr');
            row.remove();
        }
    </script>
</body>
