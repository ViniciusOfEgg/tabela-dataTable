<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABELA</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


</head>
<body>

    <div class="container-fluid rounded">
        <header id="header" class="container text-center p-3 bg-primary">
            <h1>TESTE DE TABELA</h1>
        </header>
    </div>


    <div class="container border border-dark">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Localidade</th>
                    <th>Uf</th>
                    <th>Ibge</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include 'connect.php';

                    $sql = "SELECT * FROM cep";
                    $result = $conn->query($sql);

                
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>". $row["logradouro"] ."</td>
                                <td>". $row["bairro"] ."</td>
                                <td>". $row["localidade"] ."</td>
                                <td>". $row["uf"]  ."</td>
                                <td>". $row["ibge"] ."</td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();

                ?>
            </tbody>
        </table>
    </div>

</body>

<script>
        $(document).ready(function(){
    $('#myTable').DataTable();
});


    </script>

</html>

