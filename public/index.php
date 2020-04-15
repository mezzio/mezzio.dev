<?php
http_response_code(302);
header('Location: https://docs.mezzio.dev');
header('Content-Type: text/html');
echo '<p>If you are not immediately redirected, please go to <a href="https://docs.mezzio.dev">https://docs.mezzio.dev</a></p>';
