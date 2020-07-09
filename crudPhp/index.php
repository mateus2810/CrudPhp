<?php
include_once 'includes/header.php';
//conexao bd
require_once 'db_connect.php';

?>

 <div class="row">
    <div class="col  s12 m6 push-m3 " >
    <h3 class="light"> Clientes</h3>
     <table class="striped">
          <thead>
           
             <tr>
               <th>  Nome:  </th>
               <th>  Sobrenome:</th>
               <th>Email</th>
               <th> Idade: </th>

            </tr>
            <tbody>

            <?php 
            
            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($connect, $sql);
            
            while ($dados=mysqli_fetch_array($resultado) ):
               
            
            ?>

               <tr>
                  <td> <?php echo $dados['nome']; ?> </td>
                  <td> <?php echo $dados['sobrenome']; ?> </td>
                  <td>  <?php echo $dados['email']; ?> </td>
                  <td>  <?php echo $dados['idade']; ?> </td>

                  <td> <a href="" class="btn floating orange"><i class="material-icons">edit </i> </a> </td>
                  <td>  <a href="" class="btn floating red"> <i class="material-icons">delete </i></td>

              </tr>
            <?php endwhile; ?>
           </tbody>
        <thead>
        </table> <br>
        <a  href="adicionar.php" class="btn"> Adcionar Clientes</a>
 
     </div>

 
 </div>





<?php
include_once 'includes/footer.php';
?>