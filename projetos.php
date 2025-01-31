<?php include('dados.php'); ?>
<?php include('header.php'); ?>

<?php foreach ($projetos as $proj): ?>
    <div class="projeto-item">
        <?php if (!empty($proj['imagem'])): ?>
            <img src="<?php echo $proj['imagem']; ?>" alt="Imagem do projeto <?php echo $proj['titulo']; ?>">
        <?php endif; ?>
        <div>
            <h3><?php echo $proj['titulo']; ?></h3>
            <p><?php echo $proj['descricao']; ?></p>
            <h4>Tecnologias Utilizadas:</h4>
            <ul>
                <?php foreach ($proj['tecnologias'] as $tec): ?>
                    <li><?php echo $tec; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo $proj['link_github']; ?>" target="_blank" class="btn-github">Ver no GitHub</a>
        </div>
    </div>
<?php endforeach; ?>



<?php include('footer.php'); ?>
