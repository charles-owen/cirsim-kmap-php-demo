<?php
if(file_exists(__DIR__ . '/../dist/build.js')) {
    echo <<<HTML
<script src="dist/build.js"></script>
HTML;
} else {
    echo <<<HTML
<script src="https://unpkg.com/cirsim/dist/cirsim.min.js"></script>
<script src="https://unpkg.com/kmap/dist/kmap.min.js"></script>
HTML;
}
