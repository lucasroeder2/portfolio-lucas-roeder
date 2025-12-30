<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://github.com/lucasroeder2', 'texto' => 'GitHub', 'external' => true],
    ['href' => 'https://www.linkedin.com/in/lucasroeder/', 'texto' => 'LinkedIn', 'external' => true],
];
?>

<header class="sticky top-0 z-50 backdrop-blur-md bg-slate-950/60 border-b border-white/10">
    <div class="mx-auto max-w-6xl px-6 py-4 flex items-center justify-between">
        <!-- logo -->
        <a href="#top" class="font-bold text-lg text-white hover:text-indigo-400 transition">
            Lucas Roeder
            <span class="text-slate-400 font-medium">• Portfólio</span>
        </a>

        <!-- links -->
        <nav class="flex items-center gap-3">
            <ul class="hidden md:flex items-center gap-6 text-slate-200 font-medium">
                <?php foreach ($itens as $item): ?>
                    <li>
                        <a
                            href="<?= $item['href'] ?>"
                            <?= !empty($item['external']) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                            class="text-slate-200/90 hover:text-white transition"
                        >
                            <?= $item['texto'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- CTA -->
            <a href="#contato"
               class="px-4 py-2 rounded-xl bg-indigo-500 hover:bg-indigo-600 transition text-white font-semibold">
                Contato
            </a>
        </nav>
    </div>
</header>