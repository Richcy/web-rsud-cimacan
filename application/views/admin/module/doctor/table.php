<?php $num = 0; foreach ($datas as $data) { $num++;?>
<tr class="sort-wrap" data-snum="<?=$num;?>" data-sid="<?=$data->id;?>">
  <td style="width: 20%;">
    <button onclick="confirmDelete('<?=$data->id;?>')" style="font-size: 12px;" class="btn btn-danger">Delete</button>
  </td>
  <td style="width: 10%;"><?=$num;?></td>
  <td style="width: 20%;">
    <a href="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor.jpg';?>" class="ngalleryswiper-zoom gallery-lightbox">
      <img style="max-width: 100px" src="<?=$data->img ? base_url().'assets/uploads/'.$data->img : base_url().'assets/uploads/doctor.jpg';?>">
    </a>
  </td>
  <td><?=$data->name;?></td>
</tr>
<?php } ?>