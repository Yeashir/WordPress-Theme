<ul class="social-sec p-0">
    <?php
    $group_items = cs_get_option('socialmediaa');
    if (!empty($group_items)) {

        foreach ($group_items as $item) {
            //var_dump( $item );// has title
            $link = !empty($item['smolink']) ? $item['smolink'] : '';
            $icon = !empty($item['smicon']) ? $item['smicon'] : '';
            $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
            $socialimg = wp_get_attachment_image_src($imagesm, 'full');
            $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
            if (!empty($icon)) {
                echo '<li><a  target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i>  </a></li>';
            } else {
                echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/>  </a></li>';
            }
        }
    }
    ?>
</ul>


<style>
    ul.social-sec li {
        display: inline-block;        
        margin:20px 7px;
        background: #b3b3b3;
        text-align: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }
     ul.social-sec li:last-child { background: transparent;}
    ul.social-sec li a:hover{text-decoration: none; }
    ul.social-sec li a i:hover{color: #000;}
    ul.social-sec li a i{
        display: block;
        padding: 8px;

    }
    div#social { text-align: right;}
    ul.social-sec li a i.fa{color: #696969;}
    ul.social-sec li a:hover i.fa{color: #14e420;}
</style>