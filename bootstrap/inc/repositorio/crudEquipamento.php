<!--Insert-->
<?php 
function inserirPessoa($equimamento) {

    try {
      $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $pdo->prepare('INSERT INTO equimamento (null,nome,disponibilidade) VALUES(:id_equipamento,:nome,:disponibilidade)');
      $stmt->execute(array(
        ':nome' => $equimamento.getNome(),
        ':disponibilidade' => $equimamento.getDisponibilidade()
      ));
       
      echo $stmt->rowCount(); 
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
}
  
?>

<!--Update-->
<?php 
function alterarDados($equimamento,$novoNome,$novaDisponibilidade) {
         
    try {
        $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        $stmt = $pdo->prepare('UPDATE equimamento SET (nome,disponibilidade) VALUES (:nome,:disponibilidade) WHERE id_equipamento = :id_equipamento');
        $stmt->execute(array(
          ':id_equipamento'   =>$equimamento.getIdEquipamento(),
          ':nome' => $novoNome,
          ':disponibilidade' =>$novaDisponibilidade
        ));
           
        echo $stmt->rowCount(); 
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
<!--delete-->
<?php 
function deletar($equimamento) {

    try {
      $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $pdo->prepare('DELETE FROM equipamento WHERE id_equipamento = :id_equipamento');
      $stmt->bindParam('::id_equipamento', $equimamento.getIdEquipamento()); 
      $stmt->execute();
         
      echo $stmt->rowCount(); 
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
    ?>
}
<!--select-->
<?php
function listar () {

    $consulta = $pdo->query("SELECT '*' FROM equipamento");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$linha['id_equipamento']} - Nome: {$linha['nome']} - Disponibilidade: {$linha['disponibilidade']}<br />";
    }
}
?>