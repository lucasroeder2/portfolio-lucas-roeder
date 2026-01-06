<?php
$projetos = [
    [
        "titulo" => "Meu Portfólio",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Meu primeiro portfólio. Escrito com PHP e Tailwind, com foco em layout e organização.",
        "stack" => ["PHP", "HTML", "Tailwind", "CSS"],
        "img" => "/img/portifolio.png",
        "github" => "https://github.com/lucasroeder2/portfolio-lucas-roeder/tree/main",
        "demo" => "", // colocar link quando tiver
    ],
    [
        "titulo" => "Gerenciador de Filmes",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Projeto em desenvolvimento para praticar rotas, validações e integração com banco de dados.",
        "stack" => ["PHP", "MySQL", "Tailwind"],
        "img" => "/img/placeholder.png",
        "github" => "",
        "demo" => "",
    ],
];
?>

<div class="grid gap-6">
    <?php foreach ($projetos as $projeto): ?>
        <article class="group rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-5
                        hover:bg-white/10 transition hover:-translate-y-1">

            <div class="flex flex-col md:flex-row gap-5">
                <!-- thumbnail -->
                <div class="md:w-56 w-full">
                    <div class="aspect-video overflow-hidden rounded-xl border border-white/10 bg-slate-900 shadow-lg">
                        <img src="<?= $projeto['img'] ?>"
                             class="h-full w-full object-cover group-hover:scale-[1.02] transition"
                             alt="Imagem do projeto <?= htmlspecialchars($projeto['titulo']) ?>">
                    </div>
                </div>

                <!-- conteúdo -->
                <div class="flex-1 space-y-3">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3">
                        <div class="space-y-1">
                            <h3 class="text-xl font-semibold text-white flex items-center gap-2">
                                <?= htmlspecialchars($projeto['titulo']) ?>

                                <?php if ($projeto['finalizado']): ?>
                                    <span class="text-xs px-2 py-1 rounded-full bg-emerald-500/10 text-emerald-300 border border-emerald-500/20">
                                        Finalizado em <?= (int)$projeto['ano'] ?>
                                    </span>
                                <?php else: ?>
                                    <span class="text-xs px-2 py-1 rounded-full bg-amber-500/10 text-amber-300 border border-amber-500/20">
                                        Em desenvolvimento
                                    </span>
                                <?php endif; ?>
                            </h3>

                            <p class="text-slate-400 leading-relaxed">
                                <?= htmlspecialchars($projeto['descricao']) ?>
                            </p>
                        </div>

                        <!-- ações -->
                        <div class="flex gap-2 shrink-0">
                            <?php if (!empty($projeto['github'])): ?>
                                <a href="<?= $projeto['github'] ?>" target="_blank" rel="noopener noreferrer"
                                   class="px-3 py-2 rounded-xl border border-white/15 hover:bg-white/5 transition text-sm">
                                    Código
                                </a>
                            <?php else: ?>
                                <span class="px-3 py-2 rounded-xl border border-white/10 text-white/40 text-sm cursor-not-allowed">
                                    Código
                                </span>
                            <?php endif; ?>

                            <?php if (!empty($projeto['demo'])): ?>
                                <a href="<?= $projeto['demo'] ?>" target="_blank" rel="noopener noreferrer"
                                   class="px-3 py-2 rounded-xl bg-indigo-500 hover:bg-indigo-600 transition text-sm text-white font-medium">
                                    Demo
                                </a>
                            <?php else: ?>
                                <span class="px-3 py-2 rounded-xl bg-indigo-500/20 text-indigo-200/60 text-sm cursor-not-allowed">
                                    Demo
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- stacks -->
                    <div class="flex flex-wrap gap-2 pt-1">
                        <?php foreach ($projeto['stack'] as $linguagem): ?>
                            <span class="text-xs px-2 py-1 rounded-full bg-white/5 border border-white/10 text-slate-200">
                                <?= htmlspecialchars($linguagem) ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</div>