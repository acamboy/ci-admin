
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="treeview"><a href="#"><i class="fa fa-list"></i><span>Commodity</span><i class="fa fa-angle-left pull-right"></i></a>


        </li>

          <?php 
        $parent = $this->db->get_where('category', array('parent_category' => 0));
        foreach ($parent->result() as $menu): 
          $child  = $this->db->get_where('category', array('parent_category' => $menu->category_id));
          if ($child->num_rows() > 0) { ?>
            
            <ul class="treeview">
              <a href="#" title="<?php echo $menu->category_name ?>"><i class="fa fa-list"></i><span><?php echo ucfirst($menu->category_name); ?></span><i class="fa fa-angle-left pull-right"></i></a>
            
            <?php
            foreach ($child->result() as $sub) { ?>
              <ul class="treeview-menu">
              <li><a href="<?php echo $menu->category_name. '/'. $sub->category_name ?>"><?php echo ucfirst($sub->category_name) ?></span></a>
              </li>
            </ul>
            </ul>
            <?php }
          } else { ?>
            <li>
              <a href="<?php echo $menu->category_name ?>" title="<?php echo $menu->category_name ?>"><i class="fa fa-list"></i><span class=""><?php echo ucfirst($menu->category_name); ?></span></a>
            </li>
        <?php }
          
        ?>
            
        <?php 
        endforeach 
        ?>  
        </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <ul>
        <li>
          <ul>
            <li></li>
          </ul>
        </li>
      </ul>