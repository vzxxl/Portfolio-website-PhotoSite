<ul>
    <?php 
    foreach ($navButtons as $item) {
        if ($item['slug'] == basename($_SERVER['REQUEST_URI'])) {
        $currentPage = 'selected';
        } else {
            $currentPage = '';
        };
		echo "<li>
			<a href=\"$item[slug]\" class=\"$currentPage\">$item[name]</a>
		     </li>";
				
    }
    ?>
</ul>
