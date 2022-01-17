<?php if (!empty($data_events)) {?>
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Event Mendatang</h2>
    </div>
    <div class="row-listbox">
      <!-- Looping event -->
      <?php foreach ($data_events as $data) {?>
      <div class="col-listbox-home <?=(count($data_events) <= 1) ? 'margin-left-25' : '';?>">
        <div class="listboxd-wrap">
          <?php
            $lowerText = strtolower($data->title); 
            $change_url = str_replace(' ', '-', $lowerText); 
          ?>
          <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-img" style="background-image: url('<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/default-image.jpg';?>')">
            <span style=" opacity: 0;">
              <?=$data->title;?>
            </span>
          </a>
          <div class="listboxd-content">
            <div class="row down1" style="height:50px;">
              <div class="col-xs-12" style="padding-left:0;">
                <div class="listboxd-date"><?=date('d M Y', strtotime($data->start_date));?> - <?=date('d M Y', strtotime($data->end_date));?></div>
                <div class="listboxd-location"><i class="fa fa-map-marker"></i> <?=$data->location ? substr($data->location, 0, 35).'....' : '-' ;?></div>
              </div>
            </div>
            <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>" class="listboxd-title min-heigt-title">
              <?=$data->title;?>
            </a>
            <div class="listboxd-desc listboxd-desc-home" id="desc_card">
             <?=substr($data->description, 0, 200);?>...
            </div>
            <div class="row up2 top-footer-card">
              <div class="col-xs-6 pad0">
                <div class="listboxd-category"><?=$data->category_name;?></div>
              </div>
              <div class="col-xs-6 pad0">
                <div class="listboxd-read">
                  <a href="<?=base_url().'event-'.$data->id.'-'.$change_url.'.html';?>">Detail Event</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
    
    <div class="event-home-all">
      <a href="<?=base_url('event/');?>">Event Lainnya</a>
    </div>
  </div>
</section>
<?php } ?>