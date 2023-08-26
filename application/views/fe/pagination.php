<div class="listbox-pagination">
  <ul>

    <?php
      $usedCategory = !empty($category_selected);
      $usedField = !empty($field_selected);
      $usedSearch = !empty($s);
      $paginationUrl = base_url().$cur_page;
    ?>

    <!-- conditional if total page is more than 5 -->
    <?php if ($totalPage > 5) {?>

      <!-- conditional for left arrow -->
      <?php if ($page > 3) {?>
      <li>
        <!-- if category used but search not used (event, article)-->
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/1?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/1?field='.$field_selected.'&s=';?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/1?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/1?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/1?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/1';?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to first page -->
          <i class="fa fa-angle-left"></i>
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <li>
        <!-- if category used but search not used (event, article)-->
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected;?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/'.($page-1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to previous page -->
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <?php } ?>
      <!-- end conditional -->

      <!-- conditional and looping #1 pagination for middle of total page -->
      <?php if (($page > 2) && ($page < $totalPage-2)) {?>
        <?php for ($i = $page-2; $i <= $page+2 ; $i++) {?>
          <li>
            <!-- if category used but search not used (event, article)-->
            <?php if ($usedCategory && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if field used but search not used (doctor)-->
            <?php }elseif ($usedField && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if category used and search used (event, article)-->
            <?php }elseif ($usedCategory && $usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if fields used and search used (doctor)-->
            <?php }elseif ($usedField && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
            <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if nothing used (event, article, doctor, cimanews, career)-->
            <?php }else{ ?>
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
      <!-- end conditional and looping #1 -->

      <!-- conditional and looping #2 pagination for first two page -->
      <?php } elseif ($page <= 2) {?>
        <?php for ($i = 1; $i <= 5 ; $i++) {?>
          <li>
            <!-- if category used but search not used (event, article)-->
            <?php if ($usedCategory && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if field used but search not used (doctor)-->
            <?php }elseif ($usedField && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if category used and search used (event, article)-->
            <?php }elseif ($usedCategory && $usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if fields used and search used (doctor)-->
            <?php }elseif ($usedField && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
            <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if nothing used (event, article, doctor, cimanews, career)-->
            <?php }else{ ?>
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
      <!-- end conditional and looping #2 -->

      <!-- conditional and looping #3 pagination for last two page -->
      <?php } else { ?> 
        <?php for ($i = $totalPage - 4; $i <= $totalPage ; $i++) {?>
          <li>
             <!-- if category used but search not used (event, article)-->
            <?php if ($usedCategory && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if field used but search not used (doctor)-->
            <?php }elseif ($usedField && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if category used and search used (event, article)-->
            <?php }elseif ($usedCategory && $usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if fields used and search used (doctor)-->
            <?php }elseif ($usedField && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
            <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if nothing used (event, article, doctor, cimanews, career)-->
            <?php }else{ ?>
              <a href="<?=$paginationUrl.'/'.$i;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">
            <?php } ?>
            <!-- number -->
              <?=$i;?>
            </a>
          </li>
        <?php } ?>
        <!-- end conditional and looping #3 -->
      <?php } ?>

      <!-- conditional for right arrow -->
      <?php if (($page < $totalPage-2) && ($totalPage > 5)) {?>
      <li>
        <!-- if category used but search not used (event, article)-->
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected;?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/'.($page-1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to next page -->
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <li>
        <!-- if category used but search not used (event, article)-->
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($totalPage).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($totalPage).'?field='.$field_selected;?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($totalPage).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($totalPage).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($totalPage).'?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/'.($totalPage);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to last page -->
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <?php } ?>
      <!-- end conditional -->

    <!-- end conditional if total page is more than 5 -->

    <!-- conditional else (total page is same or less than 5) -->
    <?php } else {?>
      <!-- conditional for left arrow -->
      <?php if ($page != 1) {?>
      <li>
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected;?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page-1).'?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/'.($page-1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to previous page -->
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <?php } ?>
      <!-- end conditional -->

      <!-- looping pagination -->
      <?php for ($i=1; $i <= $totalPage ; $i++) {?>
        <li>
          <!-- if category used but search not used (event, article)-->
            <?php if ($usedCategory && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if field used but search not used (doctor)-->
            <?php }elseif ($usedField && !$usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if category used and search used (event, article)-->
            <?php }elseif ($usedCategory && $usedSearch) {?>
              <a href="<?=$paginationUrl.'/'.$i.'?category='.$category_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if fields used and search used (doctor)-->
            <?php }elseif ($usedField && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?field='.$field_selected.'&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
            <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
              <a href="<?=$paginationUrl.'/'.$i.'?&s='.$s;?>" class="pagination-link <?=$i == $page ? 'active-pag' : '' ?>">

            <!-- if nothing used (event, article, doctor, cimanews, career)-->
            <?php }else{ ?>
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
        <!-- if category used but search not used (event, article)-->
        <?php if ($usedCategory && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if field used but search not used (doctor)-->
        <?php }elseif ($usedField && !$usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected;?>" class="pagination-link">

        <!-- if category used and search used (event, article)-->
        <?php }elseif ($usedCategory && $usedSearch) {?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?category='.$category_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if fields used and search used (doctor)-->
        <?php }elseif ($usedField && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?field='.$field_selected.'&s='.$s;?>" class="pagination-link">

        <!-- if (category or fields not used) or (doesn't exist) but search used (event, article, doctor, cimanews, career)-->
        <?php }elseif ((!$usedCategory || !$usedField) && $usedSearch){ ?>
          <a href="<?=$paginationUrl.'/'.($page+1).'?&s='.$s;?>" class="pagination-link">

        <!-- if nothing used (event, article, doctor, cimanews, career)-->
        <?php }else{ ?>
          <a href="<?=$paginationUrl.'/'.($page+1);?>" class="pagination-link">
        <?php } ?>
          <!-- arrow to next page -->
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <?php } ?>
      <!-- end conditional -->
    <?php } ?>
    <!-- end conditional else (total page is same or less than 5) -->
  </ul>
</div>