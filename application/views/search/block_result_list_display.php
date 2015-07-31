<div id="search_results">
    <?php foreach ($search_results as $item) :
        ?>
        <div class="entry">            
            <a href="<?php echo base_url($item->link_rewrite); ?>"><div class ="title"><?php echo $item->name; ?></div></a>            
            <div class ="description">
                <?php echo $item->description; ?>
                <?php
                if (isset($item->date_add)) {
                    $date_post = new DateTime($item->date_add);
                    echo '<span class="posted">' . date_format($date_post, 'H:i') . ' - ' . date_format($date_post, 'd.m.Y') . '</span>';
                }
                ?>                
            </div>
        </div>
        <?php
    endforeach;
    ?>
</div>