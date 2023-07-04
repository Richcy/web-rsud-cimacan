<?php if (!empty($datas_article)) {?>
<section id="doctors" class="doctors">
  <div class="container" data-aos="fade-up">

    <div class="section-title mt-4">
      <h2>CimaNEWS</h2>
    </div>

    <div class="row">
      <?php foreach ($datas_article as $data) {?>
        <div class="col-listbox col-box-home">
          <div class="listboxd-wrap">
            <?php
              $lowerText = strtolower($data->title);
              $deleteUnique = str_replace('?', '', $lowerText);
              $change_url = str_replace(' ', '-', $deleteUnique); 
            ?>
            <a href="<?=base_url().'article-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
              <span style=" opacity: 0;">
                <?=$data->title;?>
              </span>
            </a>
            <div class="listboxd-content">
              
              <a href="<?=base_url().'article-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title min-heigt-title">
                <?=substr($data->title, 0, 30);?>...
              </a>
              <div class="author">
                <span><i class="fa fa-user"></i></span> <?=$data->author;?>
              </div>
              <div class="listboxd-desc" id="desc_card">
               <?=$data->sub_desc ? substr($data->sub_desc, 0, 100) : substr($data->description, 0, 150);?>...
              </div>
              <div class="row up2">
                <div class="col-xs-6 pad0">
                  <div class="listboxd-category"><?=date('d F Y', strtotime($data->create_date));?></div>
                </div>
                <div class="col-xs-6 pad0">
                  <div class="listboxd-category-right">
                    <?=$data->category_name;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
    </div>

    <div class="row row-home-doctor">
      <div class="button-doctor">
        <a href="<?=base_url()."article/";?>" class="btn btn-primary btn-doctor">Berita Lainnya</a>
      </div>
    </div>

  </div>
</section>
<?php } ?>