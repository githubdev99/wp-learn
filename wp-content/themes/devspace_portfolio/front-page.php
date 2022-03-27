<?php
$get_history_projects = get_history_projects();
$get_history_companies = get_history_companies();
?>

<?php get_header() ?>
<?php get_template_part("/template/section/header-banner") ?>
<?php get_template_part("/template/section/history", "projects", [
    'get_history_projects' => $get_history_projects,
]) ?>
<?php get_template_part("/template/section/history", "companies", [
    'get_history_companies' => $get_history_companies,
]) ?>
<?php get_template_part("/template/section/vendor") ?>
<?php get_footer() ?>