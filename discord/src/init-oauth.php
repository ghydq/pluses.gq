<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1000355327474151544&redirect_uri=https%3A%2F%2Fpluses.gq%2Fdiscord%2Fsrc%2Fdashboard.php&response_type=code&scope=identify";
header("Location: $discord_url");
exit();

?>