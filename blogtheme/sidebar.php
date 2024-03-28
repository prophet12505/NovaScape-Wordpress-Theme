        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <!-- get author description  -->
            <p><?php the_author_meta('description'); ?></p>
          </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <!-- get the post archieves by monthly -->
              <?php wp_get_archives("type=monthly"); ?>
            </ol>
        </div>
          <div class="sidebar-module">
            <h4>Social</h4>
            <ol class="list-unstyled">
              <li><a href="<?php echo get_option('github');
              ?>"
              target="_black"
              >GitHub</a></li>
              <li><a href="<?php echo get_option('twitter');?>"
              target="_black"
              >Twitter</a></li>
              <li><a href="<?php echo get_option('facebook');?>"
              target="_black"
              >Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->