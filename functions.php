<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer',
        'before_widget' => '<div class="linksleft">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
function widget_justlucid_search() { ?>
<h3>Search</h3>
<ul><li>
<?php include (TEMPLATEPATH . "/searchform.php"); ?></li>
</ul>
<?php } if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_justlucid_search');
function widget_justlucid_styles() { ?>
<h3>Styles</h3>
<ul>
<li><a href="javascript:chooseStyle('none', 60)" checked="checked">1024</a></li>
<li><a href="javascript:chooseStyle('800-width', 60)">800</a></li>
</ul>
<?php } if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Styles'), 'widget_justlucid_styles');
?>
