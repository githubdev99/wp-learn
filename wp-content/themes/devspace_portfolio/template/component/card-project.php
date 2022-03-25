<div class="project-grid project-style-2">
    <div class="thumbnail">
        <a href="<?= $args['url'] ?>" target="<?= $args['url_target'] ?>">
            <img src="<?= $args['image_url'] ?>" alt="<?= $args['image_alt'] ?>">
        </a>
    </div>
    <div class="content">
        <span class="subtitle"><?= implode(', ', $args['project_tag']) ?></span>
        <h3 class="title"><a href="<?= $args['url'] ?>" target="<?= $args['url_target'] ?>"><?= $args['project_name'] ?></a></h3>
    </div>
</div>