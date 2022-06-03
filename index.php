<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investir</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"> 

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php require_once "code.php" ?>

    <div id="corpo">
        <header>
            <img src="images/dolar.png" width="45" alt="imagem">
            <h2>Investir</h2>
        </header>
        <section class="section-1">
            <h1>Poupança</h1>
            <p>A <strong>Poupança</strong> é o tipo de <strong>investimento</strong> considerado mais tradicional e seguro. É o mais indicado para o investidor conservador, que não está disposto a correr riscos. Quase todos os bancos comerciais oferecem essa modalidade de <strong>investimento</strong> e não é preciso ser correntista para <strong>investir</strong>.</p>
        </section>
        <section class="section-2">
            <h2>Simulação de Investimento</h2>

            <form method="POST">
                <label for="valor">Quantos reais deseja guardar por mês?</label>
                <input type="text" inputmode="numeric" placeholder="R$ 1.000" min="0" name="valor" required>
                <label for="tempo">Em quantos anos?</label>
                <input type="text" inputmode="numeric" placeholder="Ex.: 10 anos..." name="tempo">
                <input type="submit" value="Simular" class="submit">
            </form>

            <?php echo $resultado; ?>
        </section>
        <footer class="footer">
            <p>Desenvolvido por &copy; <a href="https://github.com/jonasnunes" target="_blank">Jonas Nunes</a></p>
            <p>Obs.: O projeto é apenas um exercício para reforçar os conhecimentos em desenvolvimento web. Os cálculos são baseados na taxa de 1% ao mês. Se não for essa a realidade, desconsidere.</p>
        </footer>
    </div>
</body>
</html>