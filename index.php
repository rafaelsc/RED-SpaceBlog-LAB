<?php 
include( 'templates/header.php' );
include( 'templates/sidebar.php' );
require( 'lib/functions.php' );

$json = json_decode(file_get_contents("data/posts.json"), TRUE);
uasort($json, 'sort_post_by_date');
?>
    <main id="main" class="main">
    <?php 
        foreach ($json as $item) {
            $date = date('F d, Y', $item['post_date']);
            $cats = implode(", ", $item['category']);
            echo "<section class='article'>
                    <header>
                        <h2>{$item['title']}</h2>
                        <div>{$date}</div>
                        <h3>by {$item['author']}</h3>
                    </header>
                    <main>{$item['content']}</main>
                    <footer><em>Categorized in: </em>{$cats}</footer>
                  </section>";
        }
    ?>
    </main>
<?php 
include( 'templates/footer.php' );
?>