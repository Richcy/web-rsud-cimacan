<?php $num = 0; foreach ($datas as $data) { $num++;?>
<tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
  <td style="width: 20%;">
    <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger">Delete</button>
  </td>
  <td><?=$num;?></td>
  <td>
    <a href="<?=base_url().'assets/uploads/'.$data->img;?>" class="gallery-imgswiper-zoom gallery-lightbox">
      <img style="max-width: 100px" src="<?=base_url().'assets/uploads/'.$data->img;?>">
    </a>
    <input type="hidden" name="sort<?=$num;?>" id="sort<?=$num;?>" value="<?=$data->sort;?>">
  </td>
</tr>
<?php } ?>