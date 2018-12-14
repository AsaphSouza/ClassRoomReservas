<!--Insert-->
<?php 
function inserirPessoa($sala) {

    try {
      $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $pdo->prepare('INSERT INTO equimamento (null,bloco,tipo,situacao,capacidade) VALUES(:id_sala,:bloco,:tipo,:situacao,:capacidade)');
      $stmt->execute(array(
        ':bloco'=>$sala.getBloco(),
        ':tipo'=>$sala.getTipo(),
        ':situacao'=>$sala.getSituacao(),
        ':capacidade'=>$sala.getCapacidade()

      ));
       
      echo $stmt->rowCount(); 
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
}
  
?>

<!--Update-->
<?php 
function alterarDados($sala,$novoBloco,$novaTipo,$novaSituacao,$novaCapacidade) {
         
    try {
        $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        $stmt = $pdo->prepare('UPDATE sala SET (bloco,tipo,situacao,capacidade) VALUES (:bloco,:tipo,:situacao,:capacidade) WHERE id_sala = :id_sala');
        $stmt->execute(array(
          ':bloco'   =>$novoBloco,
          ':tipo' => $novaTipo,
          ':situacao' =>$novaSituacao,
          ':capacidade' => $novaCapacidade
        ));
           
        echo $stmt->rowCount(); 
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
<!--delete-->
<?php 
function deletar($Sala) {

    try {
      $pdo = new PDO(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $pdo->prepare('DELETE FROM sala WHERE id_sala = :id_sala');
      $stmt->bindParam('::id_sala', $sala.getIdSala()); 
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

    $consulta = $pdo->query("SELECT '*' FROM sala");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$linha['id_sala']} - Bloco: {$linha['bloco']} - tipo: {$linha['tipo']} - Status{$linha['status']} - Capacidade{$linha['capacidade']}<br />";
    }
}
?>