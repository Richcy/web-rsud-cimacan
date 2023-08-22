 <div class="listbox-pagination">
  <ul>

    <!-- conditional for left arrow -->
    <?php if ($page > 3) {?>
    <li>
      <?php if ($category_selected != '' || $s != '') {?>
        <a href="<?=base_url().'article/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">
      <?php }else{ ?>
        <a href="<?=base_url().'article/'.($page-1).'/';?>" class="pagination-link">
      <?php } ?>
        <i class="fa fa-angle-left"></i>
      </a>
    </li>
    <?php } ?>
    <!-- end conditional -->

    <!-- looping pagination -->
    <?php if (($page > 3) && ($page < $totalPage-3)) {?>
      <?php for ($i = $page-3; $i <= $page+3 ; $i++) {?>
        <li>
          <?php if ($category_selected != '' || $s != '') {?>
            <a href="<?=base_url().'article/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } else { ?>
            <a href="<?=base_url().'article/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } ?> 
            <?=$i;?>
          </a>
        </li>
      <?php } ?>
    <?php } elseif ($page <= 3) {?>
      <?php for ($i = 1; $i <= 7 ; $i++) {?> <!-- Changed $page to 1, and $i <= 7 to display 7 pages -->
        <li>
          <?php if ($category_selected != '' || $s != '') {?>
            <a href="<?=base_url().'article/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } else { ?>
            <a href="<?=base_url().'article/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } ?> 
            <?=$i;?>
          </a>
        </li>
      <?php } ?>
    <?php } else { ?> <!-- Changed 'elseif' to 'else' -->
      <?php for ($i = $totalPage - 6; $i <= $totalPage ; $i++) {?> <!-- Changed $page to $totalPage - 6 to display the last 7 pages -->
        <li>
          <?php if ($category_selected != '' || $s != '') {?>
            <a href="<?=base_url().'article/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } else { ?>
            <a href="<?=base_url().'article/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } ?> 
            <?=$i;?>
          </a>
        </li>
      <?php } ?>
    <?php } ?>

    <!-- end looping -->

    <!-- conditional for right arrow -->
    <?php if ($page < $totalPage-3) {?>
    <li>
      <?php if ($category_selected != '' || $s != '') {?>
        <a href="<?=base_url().'article/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">
      <?php }else{ ?>
        <a href="<?=base_url().'article/'.($page+1).'/';?>" class="pagination-link">
      <?php } ?>
        <i class="fa fa-angle-right"></i>
      </a>
    </li>
    <?php } ?>
    <!-- end conditional -->

  </ul>
</div>