<?php $num = 0; foreach ($datas as $data) { $num++;?>
<tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
  <td style="width: 20%;">
    <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger">Delete</button>
    <a href="<?=base_url('administrator/slider/edit/').$data->id;?>" style="font-size: 12px;" class="btn btn-warning">Edit</a>
  </td>
  <td style="width: 10%;"><?=$num;?></td>
  <td style="width: 20%;">
    <a href="<?=base_url().'assets/uploads/'.$data->img;?>" class="ngalleryswiper-zoom gallery-lightbox">
      <img style="max-width: 100px" src="<?=base_url().'assets/uploads/'.$data->img;?>">
    </a>
    <input type="hidden" name="sort<?=$num;?>" id="sort<?=$num;?>" value="<?=$data->sort;?>">
  </td>
  <td><?=$data->title;?></td>
  <td><?=$data->description;?></td>
</tr>
<?php } ?>