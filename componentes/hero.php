<?php 
$itens = [
    ['href' => 'https://github.com/lucasroeder2', 'src' => '/icons/icons8-github-48.png', 'alt' => 'Icone Github'],
    ['href' => 'https://www.linkedin.com/in/lucasroeder/', 'src' => '/icons/icons8-linkedin-48.png', 'alt' => 'Icone Linkedin'],
    ['href' => 'https://www.facebook.com/lucasroeder/', 'src' => '/icons/icons8-facebook-logo-48.png', 'alt' => 'Icone Facebook'],
    ['href' => 'https://www.instagram.com/lucasroeder_/', 'src' => '/icons/icons8-instagram-logo-48.png', 'alt' => 'Icone Instagram'],
];
?>

<section class="py-20 grid md:grid-cols-2 gap-12 items-center">
    <!-- titulo e descrição -->
    <div class="space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-white">
            Oi, eu sou o <span class="text-indigo-400">Lucas Roeder</span>
        </h1>
        <p class="text-lg text-slate-400 leading-relaxed max-w-xl">
            Desenvolvedor web apaixonado por criar soluções modernas.
            Tenho foco em <strong class="text-white">PHP</strong> e experiência com
            <strong class="text-white">TypeScript</strong> e <strong class="text-white">Python</strong>.
        </p>

         <!-- badges -->
        <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1 text-sm rounded-full bg-white/5 border border-white/10">PHP</span>
            <span class="px-3 py-1 text-sm rounded-full bg-white/5 border border-white/10">TypeScript</span>
            <span class="px-3 py-1 text-sm rounded-full bg-white/5 border border-white/10">Python</span>
            <span class="px-3 py-1 text-sm rounded-full bg-white/5 border border-white/10">Tailwind</span>
        </div>


        <!-- icones redes sociais -->
        <ul class="flex gap-4 pt-2">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank" group inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 transition>
                        <img class="h-5 w-5 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"/>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- imagem -->
    <div class="flex justify-center md:justify-end">
        <div class="relative">
            <!-- glow -->
            <div class="absolute -inset-2 rounded-2xl bg-indigo-500/20 blur-2xl"></div>
            <div class="relative w-60 aspect-square overflow-hidden rounded-2xl border border-white/10 shadow-2xl bg-slate-900">
            <img class="h-full w-full object-cover object-center" src="../img/minha foto.jpeg" alt="Foto do Lucas">
        </div>
    </div>
</section>