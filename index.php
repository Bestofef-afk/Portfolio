<?php include('dados.php'); ?>
<?php include('header.php'); ?>

<main>
  <section class="perfil">
    <img src="<?php echo $perfil['foto']; ?>" alt="Sua Foto" class="foto-perfil">
    <div class="informacoes">
      <h2>Sobre Mim</h2>
      <p><?php echo $perfil['descricao']; ?></p>
    </div>
  </section>

  <section class="dados-pessoais">
    <h2>Informações Pessoais</h2>
    <ul>
      <li><strong>Idade:</strong> <?php echo $perfil['idade']; ?> anos</li>
      <li><strong>Cidade:</strong> <?php echo $perfil['cidade']; ?></li>
      <li><strong>Telefone:</strong> <?php echo $perfil['telefone']; ?></li>
      <li><strong>E-mail:</strong> <a href="mailto:<?php echo $perfil['email']; ?>"><?php echo $perfil['email']; ?></a></li>
    </ul>
  </section>

  <section class="objetivo">
    <h2>Objetivo</h2>
    <p>Buscar oportunidades de estágio ou projetos que me permitam aplicar meus conhecimentos adquiridos no curso técnico, com o objetivo de aprender e crescer profissionalmente na área de Tecnologia da Informação.</p>
  </section>

  <section class="formacao">
    <h2>Formação Acadêmica</h2>
    <ul>
      <?php foreach ($formacao as $form): ?>
        <li><strong><?php echo $form['instituicao']; ?></strong> - <?php echo $form['curso']; ?> (irei Concluir/ foi Concluído em <?php echo $form['ano_conclusao']; ?>)</li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="habilidades">
    <h2>Habilidades</h2>
    <ul>
      <?php foreach ($habilidades as $categoria => $itens): ?>
        <li><strong><?php echo $categoria; ?>:</strong> <?php echo implode(", ", $itens); ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="idiomas">
    <h2>Idiomas</h2>
    <ul>
      <?php foreach ($idiomas as $idioma => $nivel): ?>
        <li><strong><?php echo $idioma; ?>:</strong> <?php echo $nivel; ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="interesses">
    <h2>Interesses Pessoais</h2>
    <ul>
      <?php foreach ($interesses as $interesse): ?>
        <li><?php echo ucfirst($interesse); ?></li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="contato">
    <h2>Contatos Alternativos</h2>
    <ul>
      <?php foreach ($contatos_alternativos as $plataforma => $link): ?>
        <li><strong><?php echo $plataforma; ?>:</strong> <a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </section>
</main>

<?php include('footer.php'); ?>
