<?php

require_once 'Database.php';

class ProfissionalDAO {
    private $conexao;

    function __construct(){
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    // Create
    function storeProfissional($profissional) {
        $stmt = $this->conexao->prepare('INSERT INTO profissional (cpf,contato,email,status,rg,nome_prof,senha,cargo) VALUES (:cpf,:contato,:email,:status,:rg,:nome_prof,'.":password".',:cargo)');
        $stmt->bindValue(':cpf', $profissional->getCpf());
        $stmt->bindValue(':contato', $profissional->getContato());
        $stmt->bindValue(':email', $profissional->getEmail());
        $stmt->bindValue(':status', $profissional->getStatus());
        $stmt->bindValue(':rg', $profissional->getRg());
        $stmt->bindValue(':nome_prof', $profissional->getNome_Prof());
        $stmt->bindValue(':password', $profissional->getPassword());
        $stmt->bindValue(':cargo', $profissional->getCargo());
        return $stmt->execute();
    }

    // Authenticate
    function authenticateProfissional($cpf,$password) {
       
        $stmt = $this->conexao->prepare("SELECT * FROM profissional WHERE cpf = ".'"'.$cpf.'"'." AND senha = ".'"'.$password.'"'.";");
        $stmt->execute();
        $logado = null;

        if (!$stmt->rowCount() == 0) {
            $logado = true;
            return $logado;
        } 
        else if ( $cpf == 'admin' && $password == 'Admin@pmp' ) {
            $logado = true;
            return $logado;
        } 
        else{
            $logado = false;
            return $logado;
        }

    }

    function getAllProfissionals(){
        $stmt = $this->conexao->prepare("SELECT * FROM profissional");
        $stmt->execute();

        if (!$stmt->rowCount() == 0) {
                       
            while ($results = $stmt->fetch()) {

                echo '
                <tr>
                    <td>"'.$results['nome_prof'].'"</td>
                    <td>"'.$results['tipo_cargo'].'"</td>
                    <td>"'.$results['nome_prof'].'"</td>
                    <td>"'.$results['nome_prof'].'"</td>
                    <td>"'.$results['nome_prof'].'"</td>
                    <td>"'.$results['id'].'"</td>
                </tr>
                '; 

            }   
              
        } 
        else{
            echo '
                <tr>
                    <td>Sem colaboradores cadastrados</td>
                    <td>Sem colaboradores cadastrados</td>
                    <td>Sem colaboradores cadastrados</td>
                    <td>Sem colaboradores cadastrados</td>
                    <td>Sem colaboradores cadastrados</td>
                    <td>Sem colaboradores cadastrados</td>
                </tr>
                '; 
        }
    }

    function updateCategorie($id){

        $stmt = $this->conexao->prepare("SELECT * FROM categoria WHERE id='".$id."';");
        $stmt->execute();

        if (!$stmt->rowCount() == 0) {
            echo "Atualizar Categoria :<br/><br/>";
            echo "<table>"; 
            echo "<tr><th>id</th><th>Nome</th><th>Ações</th></tr>";             
            
            while ($results = $stmt->fetch()) {
            echo '<form action="verprodutos.php?classe=Produtos&acao=applyUpdateCategory&id='.$results['id'].'" method="POST">';
            echo "<tr>";
            echo "<td>";          
            echo "<input type='text' name='id' value=".$results['id']."></input>";
            echo "<td>";

            echo "<td>";          
            echo "<input type='text' name='nome' value=".$results['nome']."></input>";
            echo "<td>";

            //echo "<a href='/editarProduto/".$results['id']."'>Editar</a>";
            echo "<td>";
            echo "<input type='submit' value='Atualizar'></input>";
            echo "</td></tr>";   
            echo '</form>';
            }
            echo "</table>";    
        } 
        else{
            echo 'Sem Categorias cadastradas';
        }

        echo "<br><a href='http://localhost/loja-virtual/view/'>Voltar</a>";
    }
    
    // Read 
    /*function getCategoriesCadastro(){
        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();

        if (!$stmt->rowCount() == 0) {
                       
            while ($results = $stmt->fetch()) {
                
                echo '<option value="'.$results['nome'].'">'.$results['nome'].'</option>';            
            }   
              
        } 
        else{
            echo "<option value='Sem Categoria Cadastrada'>Sem Categoria Cadastrada</option>";  
        }
    }

    function getAllCategories(){

        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();

        if (!$stmt->rowCount() == 0) {
            echo "Listagem de Categorias Cadastradas:<br/><br/>";
            echo "<table>"; 
            echo "<tr><th>Id</th><th>Nome</th><th>Ações</th></tr>";             
            while ($results = $stmt->fetch()) {
            echo "<tr><td>";            
            echo $results['id'];
            echo "<td>";
            echo $results['nome'];
            echo "</td>"; 
            echo "<td>";
            //echo "<a href='/editarProduto/".$results['id']."'>Editar</a>";
            echo "<a href='verprodutos.php?classe=Produtos&acao=updateCategorie&id=".$results['id']."'>Editar</a>";
            echo  " <a href='verprodutos.php?classe=Produtos&acao=deleteCategory&id=".$results['id']."'>Excluir</a>";
            echo "</td></tr>";   
            }   
            echo "</table>";    
        } 
        else{
            echo 'Sem categorias cadastradas';
        }

        echo "<br><a href='http://localhost/loja-virtual/view/'>Voltar</a>";
    }

    // Update
    function updateCategorie($id){

        $stmt = $this->conexao->prepare("SELECT * FROM categoria WHERE id='".$id."';");
        $stmt->execute();

        if (!$stmt->rowCount() == 0) {
            echo "Atualizar Categoria :<br/><br/>";
            echo "<table>"; 
            echo "<tr><th>id</th><th>Nome</th><th>Ações</th></tr>";             
            
            while ($results = $stmt->fetch()) {
            echo '<form action="verprodutos.php?classe=Produtos&acao=applyUpdateCategory&id='.$results['id'].'" method="POST">';
            echo "<tr>";
            echo "<td>";          
            echo "<input type='text' name='id' value=".$results['id']."></input>";
            echo "<td>";

            echo "<td>";          
            echo "<input type='text' name='nome' value=".$results['nome']."></input>";
            echo "<td>";

            //echo "<a href='/editarProduto/".$results['id']."'>Editar</a>";
            echo "<td>";
            echo "<input type='submit' value='Atualizar'></input>";
            echo "</td></tr>";   
            echo '</form>';
            }
            echo "</table>";    
        } 
        else{
            echo 'Sem Categorias cadastradas';
        }

        echo "<br><a href='http://localhost/loja-virtual/view/'>Voltar</a>";
    }

    // Apply Update
    function applyUpdateCategory($id,$nome){
        $stmt = $this->conexao->prepare("UPDATE categoria SET nome = ".$nome." WHERE id='".$id."';");
        $stmt->execute();
        echo 'Categoria atualizada com sucesso!';
        echo "<br><a href='http://localhost/loja-virtual/view/'>Voltar</a>";
    }

    // Delete
    function deleteCategory($id){
        $stmt = $this->conexao->prepare("DELETE FROM categoria WHERE id='".$id."';");
        $stmt->execute();
        echo 'Categoria excluída com sucesso!';
        echo "<br><a href='http://localhost/loja-virtual/view/'>Voltar</a>";
    } */

}