<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($consulta->result() as $post) { ?>
            <div class="post-preview">
                <a href="<?= base_url() ?>article/post/<?= $post->id ?>">
                    <h2 class="post-title"><?= $post->titulo_post ?></h2>
                    <h3 class="post-subtitle"><?= $post->descripcion_post ?></h3>
                </a>
                <img src="<?= $post->imagen_post?>" style="max-width: 500px;" >
                <p class="post-meta">Posted by <a href="#">NarfOner</a> on <?= $post->fecha_post ?></p>
            </div>
            <hr>
            <?php } ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>