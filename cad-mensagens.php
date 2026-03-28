<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cad-mensagens</title>
        <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="cadastros.css">
</head>
<body>
    <div class="dashboard-container">

<?php include 'menu.php';?>

    <main>

        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-user-plus"></i>Enviar nova Mensagem</h2>
            </div>

            <form action="processa.php" method="POST">
                <div class="form-group">
                    <label for="nome">Escrever Mensagem</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Olá" required>
                </div>

               

                <div class="form-actions">
                    <button type="submit" class="btn-save"> <i class="fa-solid fa-floppy-disk"></i>Enviar</button>
                    <a href="mensagens.php" class="btn-cancel">Cancelar</a>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                </div>
            </form>
        </section>

    </main>
</div>
<?php include 'footer.php';?>

</body>
</html>