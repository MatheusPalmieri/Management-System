<?php
    include('SYSprotect.php');
    include('SYSnavigation.php');

    if(isset($_POST['submit'])){
    
        include_once('SYSconnection.php');

        $tipoDeEquipamento = $_POST['tipoDeEquipamento'];
        $nomenclatura = $_POST['nomenclatura'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serialNumberTAG = $_POST['serialNumberTAG'];
        $processador = $_POST['processador'];
        $memoria = $_POST['memoria'];
        $sistemaOperacional = $_POST['sistemaOperacional'];
        $status = $_POST['status'];
        $fornecedor = $_POST['fornecedor'];
        $cnpj = $_POST['cnpj'];
        $notaFiscal = $_POST['notaFiscal'];
        $dataCompra = $_POST['dataCompra'];
        $dataGarantia = $_POST['dataGarantia'];
        $valor = $_POST['valor'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $cargo = $_POST['cargo'];
        $setor = $_POST['setor'];
        $numeroLinha = $_POST['numeroLinha'];
        $plano = $_POST['plano'];
        $operadora = $_POST['operadora'];

        $result = mysqli_query($mysqli, "INSERT INTO inventory (tipoDeEquipamento, nomenclatura, marca, modelo, serialNumberTAG, processador, memoria, sistemaOperacional, status, fornecedor, cnpj, notaFiscal, dataCompra, dataGarantia, valor, nome, cpf, cargo, setor, numeroLinha, plano, operadora) VALUES('$tipoDeEquipamento', '$nomenclatura', '$marca', '$modelo', '$serialNumberTAG', '$processador', '$memoria', '$sistemaOperacional', '$status', '$fornecedor', '$cnpj', '$notaFiscal', '$dataCompra', '$dataGarantia', '$valor', '$nome', '$cpf', '$cargo', '$setor', '$numeroLinha', '$plano', '$operadora')");

        header('Location: inventory.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Register</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inventoryRegister.css">
</head>
<body>
    <section class="box">

        <a href="inventory.php">
            <span class="icon-add register"  style="--color:#f44336">
                <ion-icon name="chevron-back-circle-outline"></ion-icon>
            </span>
            <span class="text">Cancelar</span>
        </a>

        <form method="POST" class="register">

            <!-- Dados Equipamento -->
            <div class="dados-equipamentos fields">

                <label for="tipoDeEquipamento" class="labelInput">Tipo de Equipamento</label>
                <select name="tipoDeEquipamento" id="tipoDeEquipamento">
                    <option value="Selecione" selected>Selecione</option>
                    <option value="Desktop">Desktop</option>
                    <option value="Notebook">Notebook</option>
                    <option value="Celulares">Celulares</option>
                    <option value="Tablets">Tablets</option>
                    <option value="Servidores Físicos">Servidores Físicos</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Relógio Ponto">Relógio Ponto</option>
                    <option value="Câmeras">Câmeras</option>
                    <option value="Antena AP">Antena AP</option>
                    <option value="Switch">Switch</option>
                    <option value="Roteador">Roteador</option>
                    <option value="Projetor">Projetor</option>
                    <option value="Caixa de Som JBL">Caixa de Som JBL</option>
                    <option value="Televisão">Televisão</option>
                    <option value="Mobuss TV">Mobuss TV</option>
                    <option value="VideoConferencia Konftel">VideoConferencia Konftel</option>
                    <option value="Nobreak">Nobreak</option>
                    <option value="Outros">Outros</option>
                </select>
                            
                <label for="nomenclatura" class="labelInput">Nomenclatura</label>
                <input type="text" name="nomenclatura" id="nomenclatura">

                <label for="marca" class="labelInput">Marca</label>
                <input type="text" name="marca" id="marca">
                
                <label for="modelo" class="labelInput">Modelo</label>
                <input type="text" name="modelo" id="modelo">
                
                <label for="serialNumberTAG" class="labelInput">Serial Number / TAG Service</label>
                <input type="text" name="serialNumberTAG" id="serialNumberTAG">
                
                <label for="processador" class="labelInput">Processador</label>
                <select name="processador" id="processador">
                    <option value="Selecione">Selecione</option>
                    <option value="i3">i3</option>
                    <option value="i5">i5</option>
                    <option value="i7">i7</option>
                    <option value="Outros">Outros</option>
                </select>

                <label for="memoria" class="labelInput">Memória</label>
                <input type="text" name="memoria" id="memoria">
                
                <label for="sistemaOperacional" class="labelInput">Sistema Operacional</label>
                <input type="text" name="sistemaOperacional" id="sistemaOperacional">
                
                <label for="status" class="labelInput">Status</label>
                <select name="status" id="status">
                    <option value="Ativo - Produção" selected>Ativo - Produção</option>
                    <option value="Ativo - Produção">Ativo - Backup</option>
                    <option value="Ativo - Produção">Inativo</option>
                    <option value="Outro">Outro</option>
                </select>

            </div>

            <!-- Dados Fornecedor -->
            
            <div class="dados-fornecedor fields">
                
                <label for="fornecedor" class="labelInput">Fornecedor</label>
                <input type="text" name="fornecedor" id="fornecedor">
                
                <label for="cnpj" class="labelInput">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj">
                
                <label for="notaFiscal" class="labelInput">Nº Nota Fiscal</label>
                <input type="text" name="notaFiscal" id="notaFiscal">
                
                <label for="dataCompra" class="labelInput">Data Compra</label>
                <input type="text" name="dataCompra" id="dataCompra">
                
                <label for="dataGarantia" class="labelInput">Data Garantia</label>
                <input type="text" name="dataGarantia" id="dataGarantia">
                
                <label for="valor" class="labelInput">Valor R$</label>
                <input type="text" name="valor" id="valor">

            </div>
            <!-- Dados Colaborador -->
                
            <div class="dados-colaborador fields">

                <label for="nome" class="labelInput">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                            
                <label for="cpf" class="labelInput">CPF</label>
                <input type="text" name="cpf" id="cpf">
                            
                <label for="cargo" class="labelInput">Cargo</label>
                <input type="text" name="cargo" id="cargo">
                            
                <label for="setor" class="labelInput">Setor</label>
                <input type="text" name="setor" id="setor">
                        
            </div>
            <!-- Dados Telefonia -->

            <div class="dados-telefonia fields">

                <label for="numeroLinha" class="labelInput">Nº Linha</label>
                <input type="text" name="numeroLinha" id="numeroLinha">
                            
                <label for="plano" class="labelInput">Plano</label>
                <input type="text" name="plano" id="plano">
                            
                <label for="operadora" class="labelInput">Operadora</label>
                <input type="text" name="operadora" id="operadora">

            </div>
            <!-- Submit -->
            <input type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
    </section>

    <!-- Script -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>