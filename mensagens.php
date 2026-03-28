<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>

<div class="dashboard-container">
    <?php include 'menu.php';?>
    
    <main>
        <div class="header-content">
            <div class="header-title">
            <h2>Mensagens</h2>
            <p>Visualize suas mensagens.</p>
            </div>
        <a href="cad-mensagens.php" class="btn-add"><i class="fa-solid fa-plus"></i> Escrever nova mensagem</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Mensagens não lidas</th>
                        <th>Visto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Grupo da gameplay</td>
                        <td>4</td>
                        <td><span class="badge ativo">Online</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>Futebol</td>
                        <td>10</td>
                        <td><span class="badge inativo">Offline há 10 dias</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <button class="btn-icon"><i class="fa-solid fa-trash"></i></button></td>
                        
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    </tr>
                </tbody>
                <tfoot>
                    <td colspan="6" align="right"> Informação da quantidade de registro...</td>
                </tfoot>
            </table>
        </div>
    </main>
</div>

<?php include 'footer.php';?>

</body>
</html>