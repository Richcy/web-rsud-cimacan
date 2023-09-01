<div class="listbox-pagination">
  <ul>

    <?php 
      $noCategory = is_null($category_selected);
      $noField = is_null($field_selected);
      $usedCategory = !empty($category_selected);
      $usedField = !empty($field_selected);
      $usedSearch = !empty($s);
      $paginationUrl = base_url().$cur_page;
    ?>

    <?php if ($totalPage > 5) {?>
    <!-- conditional if total page is more than 5 -->

      <?php if ($page > 3) {?>
      <!-- conditional for left arrow -->
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/1?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/1?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/1?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/1';?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to first page -->
          <i class="fa fa-angle-left"></i>
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page-1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to previous page -->
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <!-- end conditional -->
      <?php } ?>

      <?php if (($page > 2) && ($page < $totalPage-2)) {?>
      <!-- conditional and looping #1 pagination for middle of total page -->
        <?php for ($i = $page-2; $i <= $page+2 ; $i++) {?>
          <li>
            <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
            <!-- if category used and category is not null (event, article)-->
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
            <!-- if field used and field is not null (doctor)-->
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
            <!-- if category or field is null but search used (cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }else{ ?>
            <!-- if nothing used (event, article, doctor, cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
        <!-- end conditional and looping #1 -->

      <?php } elseif ($page <= 2) {?>
      <!-- conditional and looping #2 pagination for first two page -->
        <?php for ($i = 1; $i <= 5 ; $i++) {?>
          <li>
            <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
            <!-- if category used and category is not null (event, article)-->
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
            <!-- if field used and field is not null (doctor)-->
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
            <!-- if category or field is null but search used (cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }else{ ?>
            <!-- if nothing used (event, article, doctor, cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
        <!-- end conditional and looping #2 -->

      <?php } else { ?> 
      <!-- conditional and looping #3 pagination for last two page -->
        <?php for ($i = $totalPage - 4; $i <= $totalPage ; $i++) {?>
          <li>
            <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
            <!-- if category used and category is not null (event, article)-->
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
            <!-- if field used and field is not null (doctor)-->
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
            <!-- if category or field is null but search used (cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <?php }else{ ?>
            <!-- if nothing used (event, article, doctor, cimanews, career)-->
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
        <!-- end conditional and looping #3 -->
      <?php } ?>

      <?php if (($page < $totalPage-2) && ($totalPage > 5)) {?>
      <!-- conditional for right arrow -->
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page+1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to next page -->
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/'.($totalPage).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/'.($totalPage).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($totalPage).'?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($totalPage);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to last page -->
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
        <!-- end conditional -->
      </li>
      <!-- end conditional if total page is more than 5 -->
      <?php } ?>

    <?php } else {?>
    <!-- conditional else (total page is same or less than 5) -->
      <?php if ($page != 1) {?>
      <!-- conditional for left arrow -->
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page-1).'?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page-1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to previous page -->
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <!-- end conditional -->
      <?php } ?>

      <?php for ($i=1; $i <= $totalPage ; $i++) {?>
      <!-- looping pagination -->
        <li>
          <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
          <!-- if category used and category is not null (event, article)-->
            <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

          <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
          <!-- if field used and field is not null (doctor)-->
            <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

          <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
          <!-- if category or field is null but search used (cimanews, career)-->
            <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

          <?php }else{ ?>
          <!-- if nothing used (event, article, doctor, cimanews, career)-->
            <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
          <?php } ?>
          <!-- number -->
            <?=$i;?>
          </a>
        </li>
      <?php } ?>
      <!-- end looping -->

      <!-- conditional for right arrow -->
      <?php if ($page < $totalPage) {?>
      <li>
        <?php if (($usedCategory || $usedSearch) && !$noCategory) {?>
        <!-- if category used and category is not null (event, article)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($usedField || $usedSearch) && !$noField) {?>
        <!-- if field used and field is not null (doctor)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <?php }elseif (($noCategory || $noField) && $usedSearch){ ?>
        <!-- if category or field is null but search used (cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page+1).'?&s='.$s;?>" class="pagination-link">

        <?php }else{ ?>
        <!-- if nothing used (event, article, doctor, cimanews, career)-->
          <a href="<?=$paginationUrl.'/'.($page+1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to next page -->
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <!-- end conditional -->
      <?php } ?>
    <!-- end conditional else (total page is same or less than 5) -->
    <?php } ?>
  </ul>
</div>