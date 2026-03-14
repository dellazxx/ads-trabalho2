<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Usuários</title>
    <link rel="stylesheet" href="usuarios.css">
 
    

</head>
<body>

<nav>
            <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="cad-usuarios.php">Notícias</a></li>
           <li><a href="#">Estatísticas</a></li>

           <div class="perfil-usuario">
    <img src="https://ui-avatars.com/api/?name=Gabriel+Della&background=008080&color=fff" alt="Avatar">
    <span>Gabriel</span>
</div>
           
</ul>

</nav>

    <main>
        <div class="header-content">
            <h2>Gestão de Usuários</h2>
            <p>Visualize e gerencie as permissões dos Usuários do sistema.</p>
</div>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Acesso</th>
                <th>Status</th>
                <th>Ações</th>
</tr>
</thead>
<tbody>
    <tr>

       <td>01</td>
        <td>Gabriel Della</td>
        <td>eltongraniero@gmail.com</td>
        <td>Administrador</td>
        <td><span class="badge ativo">Ativo</span></td>
        <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button></td>
</tr>
<tr>
    <td>02</td>
    <td>Mariane Karen</td>
    <td>mariane.karen@gmail.com</td>
    <td>Editor</td>
    <td><span class="badge ativo">Ativo</span></td>
    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i><button></td>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
</tr>
</tbody>
</table>
</div>
    </main>
    
</body>
</html>