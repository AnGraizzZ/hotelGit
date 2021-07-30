<ul class="navbar-nav ml-auto">
            <?php 
            $loop = CFS()->get( 'Kol_button' );
            global $wp;
            $my_url = home_url( $wp->request );
          foreach ( $loop as $row ) {
              if($my_url==$row['link_Menu'])
              {
                echo '<li class="nav-item active"><a href="'.$row['link_Menu'].'" class="nav-link">'.$row['Button'].'</a></li>';
              }else
              {
                echo '<li class="nav-item "><a href="'.$row['link_Menu'].'" class="nav-link">'.$row['Button'].'</a></li>';
              }
          }
                ;?>
         <!-- <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
        </ul>