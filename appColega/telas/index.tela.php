<?php 
include(__DIR__ . '/header.tela.php');
include(__DIR__ . '/menu.tela.php');
?>
<form method="post" action="apagaColega.php">
    
    <table border="1">
        <tr>
                <td>ID</td><td>Nome</td><td>Açoes</td>
            </tr>

            <?php
            foreach($registros as $registro){
            
            echo "
            <tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td>
            <button name='delete' value='{$registro['id']}'>Deletar</button>
            <button name='update' value='{$registro['id']}'>Editar</button>
            </td>
            <tr>"
        }
            ?>
             </table>
            </form>
            <button action="appColega/colegasForm.html">Cadastrar</button>
            
<?php 
include(__DIR__ . '/footer.tela.php');
?>