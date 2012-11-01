<?php
header("Content-Type: text/plain");

foreach ($user_agents as $user_agent) {
?>User-Agent: <?php echo $user_agent->user_agent; ?>

<?php echo ($user_agent->allowed) ? 'Allow' : 'Disallow'; ?>: <?php echo $user_agent->path; ?>


<?php
}
?>
Sitemap: <?php echo URL_PUBLIC; ?>sitemap.xml