<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  
    <title>Meu Portifolio</title>
</head>
<body class="bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 text-white">
    <?php include('./componentes/header.php'); ?>
    
    <main class="mx-auto max-w-6xl text-slate-300 px-6">   
        <!-- Hero -->
        <?php include('./componentes/hero.php'); ?>

        <!-- Skills -->
        <?php include('./componentes/skills.php'); ?>
        
        <!-- projetos -->
        <section class="py-16 space-y-6" id="projetos">
            <h2 class="text-3xl font-bold text-white">Projetos & Experimentos</h2>
            <?php include('./componentes/projetos.php'); ?>
        </section>
        <!-- contato -->
         <?php include('./componentes/contato.php'); ?>
    </main>
    
    <footer class="mx-auto max-w-6xl px-6">
        <div class="border-t border-white/10 py-6 text-slate-400 text-sm">
            © Copyright <?= date('Y'); ?>. Desenvolvido por Lucas Roeder.
        </div>
    </footer>
</body>
</html>