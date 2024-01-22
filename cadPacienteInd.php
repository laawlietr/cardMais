<?php
      include("conexao.php");

      $nomePacInd = $_POST["nomePacInd"];
      $cpfPacInd = $_POST["cpfPacInd"];
      $dtNascPacInd = $_POST["dtNascPacInd"];
      $emailPacInd = $_POST["emailPacInd"];
      $telPacInd = $_POST["telPacInd"];
      $telOpcPacInd = $_POST["telOpcPacInd"];
      $generoPacInd = $_POST["generoPacInd"];
      $cepPac = $_POST["cepPac"];
      $ruaPac = $_POST["ruaPac"];
      $bairroPac = $_POST["bairroPac"];
      $cidadePac = $_POST["cidadePac"];
      $estadoPac = $_POST["estadoPac"];
      $numPac = $_POST["numPac"];
      $complPac = $_POST["complPac"];

      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        try {
          
          $select = "SELECT cpfPaciente FROM Pacientes WHERE cpfPaciente = $cpfPacInd";

          $conn->begin_transaction();

          if($conn->query($select)->num_rows == 0){
            $conn->execute_query("INSERT INTO Pacientes (nomePaciente, cpfPaciente, emailPaciente, telefonePaciente, telefoneOpcPaciente, statusPaciente, sexoPaciente, cepPaciente, ruaPaciente, bairroPaciente, cidadePaciente, estadoPaciente, numeroPaciente, complementoPaciente)
            VALUES ('$nomePacInd', '$cpfPacInd', '$emailPacInd', '$telPacInd', '$telOpcPacInd', 'ON', '$generoPacInd', '$cepPac', '$ruaPac', '$bairroPac', '$cidadePac', '$estadoPac', $numPac, '$complPac');");

            $conn->commit();

            echo "<script>alert('Paciente Cadastro, Por favor, continue para o pagamento!')</script>";

            $conn->close();

            
          }
          else{
            echo "<script>alert('CPF já Cadastrado em nosso sistema!')</script>";
            $conn->close();
            header("formulario.php");
          }
          header("Location: formulario.php");
        
        } catch (\Throwable $th) {
          $conn->rollback();
          echo "Erro: " .$th->getMessage();
          $conn->close();
        }
      }

  ?>