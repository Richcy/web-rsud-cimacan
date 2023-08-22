<div class="listbox-pagination">
  <ul>

    <!-- conditional if total page is more than 5 -->
    <?php if ($totalPage >5) {?>

      <!-- conditional for left arrow -->
      <?php if ($page > 3) {?>
      <li>
        <?php if ($category_selected != '' || $s != '') {?>
          <a href="<?=base_url().'article/1?category='.$category_selected.'&s='.$s;?>" class="pagination-link">
        <?php }else{ ?>
          <a href="<?=base_url().'article/1/';?>" class="pagination-link">
        <?php } ?>
          <i class="fa fa-angle-left"></i>
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
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

      <!-- conditional and looping #1 pagination for middle of total page -->
      <?php if (($page > 2) && ($page < $totalPage-2)) {?>
        <?php for ($i = $page-2; $i <= $page+2 ; $i++) {?>
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
      <!-- end conditional and looping #1 -->

      <!-- conditional and looping #2 pagination for first two page -->
      <?php } elseif ($page <= 2) {?>
        <?php for ($i = 1; $i <= 5 ; $i++) {?>
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
      <!-- end conditional and looping #2 -->

      <!-- conditional and looping #3 pagination for last two page -->
      <?php } else { ?> 
        <?php for ($i = $totalPage - 4; $i <= $totalPage ; $i++) {?>
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
        <!-- end conditional and looping #3 -->
      <?php } ?>

      <!-- conditional for right arrow -->
      <?php if (($page < $totalPage-2) && ($totalPage > 5)) {?>
      <li>
        <?php if ($category_selected != '' || $s != '') {?>
          <a href="<?=base_url().'article/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">
        <?php }else{ ?>
          <a href="<?=base_url().'article/'.($page+1).'/';?>" class="pagination-link">
        <?php } ?>
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <li>
        <?php if ($category_selected != '' || $s != '') {?>
          <a href="<?=base_url().'article/'.($totalPage).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">
        <?php }else{ ?>
          <a href="<?=base_url().'article/'.($totalPage).'/';?>" class="pagination-link">
        <?php } ?>
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <?php } ?>
      <!-- end conditional -->
    <?php } ?>
    <!-- end conditional if total page is more than 5 -->

    <!-- conditional if total page is same or less than 5 -->
    <?php if ($totalPage < 5) {?>
      <!-- conditional for left arrow -->
      <?php if ($page != 1) {?>
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
      <?php for ($i=1; $i <= $totalPage ; $i++) {?>
        <li>
          <?php if ($category_selected != '' || $s != '') {?>
            <a href="<?=base_url().'article/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php }else{ ?>
            <a href="<?=base_url().'article/'.$i.'/';?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } ?> 
            <?=$i;?>
          </a>
        </li>
      <?php } ?>
      <!-- end looping -->

      <!-- conditional for right arrow -->
      <?php if ($page < $totalPage) {?>
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
    <?php } ?>
    <!-- conditional if total page is same or less than 5 -->
  </ul>
</div>