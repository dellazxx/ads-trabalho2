<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cad.usuarios</title>
    <link rel="stylesheet" href="cad-usuarios.css">
</head>
<body>
   <main><section class="card-form">
    <div class="form-header">
        <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
        <p>Preencha os dados abaixo para registrar um novo acesso.</p>
</section>
</div>

<form action="processa.php" method="POST">
    <div class="form-group">
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: Gabriel Della" required> 
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
    </div>

    <div class="form-row">
        <div class="form-group flex-1">
            <label for="nivel">Nível</label>
            <select id="nivel" name="nivel">
                <option value="1">Usuário</option>
                <option value="2">Administrador</option>
</select>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn-save"> <i class="fa-solid fa-floppy-disk"></i>Finalizar Cadastro</button>
        <a href="index.php" class="btn-cancel">Cancelar></a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </div>

</form>
   </main>
    
</body>
</html>