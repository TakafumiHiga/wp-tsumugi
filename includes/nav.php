 <!-- スマフォ用の画面 -->
 <div id="nav-drawer">
     <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <div class="nav-logo"><img src="<?php echo get_template_directory_uri();?>/imgs/logoyoko.png" alt="ロゴ"></div>
          <ul>
          <li><a href="#">News</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">Concept</a></li>
          <li><a href="#">Access</a></li>
          <li><a href="#">予約</a></li>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>

  <?php $menu_name ='global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  var_dump(($menu));
  ?>
  <div class="pc">
      <div class="container">
        <div class="nav-pc">
          <div class="pc-logo"><img src="<?php echo get_template_directory_uri();?>/imgs/logoyoko.png" alt="ロゴ"></div>
           <div class="nav-right">
              <ul>
                <li><a href="#">News</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Concept</a></li>
                <li><a href="#">Access</a></li>
                <li><a href="#">予約</a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              </ul>
          </div>
        </div>
    </div>
  </div>