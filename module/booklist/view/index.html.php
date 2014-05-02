<?php
/**
 * The html template file of index method of booklist module of ZenTaoPHP.
 *
 * The author disclaims copyright to this source code.  In place of
 * a legal notice, here is a blessing:
 * 
 *  May you do good and not evil.
 *  May you find forgiveness for yourself and forgive others.
 *  May you share freely, never taking more than you give.
 */
?>
<?php include '../../common/view/header.html.php';?>
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css"> -->
<!-- <script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script> -->
<script>
// $(document).ready(function() {
//     $('.table').dataTable();
// } );
</script>
<div class='container'>
  <table class='table table-bordered table-hover'> 
    <thead>
      <tr>
        <th width='20'><?php echo $lang->booklist->id;?></th>  
        <th><?php echo $lang->booklist->title;?></th>  
        <th width='150'><?php echo $lang->booklist->sn;?></th> 
        <th><?php echo $lang->booklist->desc;?></th>   
        <th><?php echo $lang->booklist->tags;?></th>   
        <th width='50'><?php echo $lang->booklist->published;?></th>  
        <th width='150'><?php echo $lang->booklist->create_time;?></th>  
        <th width='150'><?php echo $lang->booklist->review_time;?></th>  
        <th width='100'><?php echo $lang->booklist->action;?></th>  
      </tr>
    </thead>
    <tbody>
      <?php foreach($booklists as $booklist):?>
      <tr>
        <td><?php echo $booklist->id;?></td>
        <td><?php echo $booklist->title;?></td>
        <td><?php echo $booklist->sn;?></td>
        <td><?php echo $booklist->desc;?></td>
        <td><?php echo $booklist->tags;?></td>
        <td><?php echo $booklist->published;?></td>
        <td><?php echo $booklist->create_time;?></td>
        <td><?php echo $booklist->review_time;?></td>
        <td>
          <?php
          echo html::a($this->createLink('booklist', 'view',   "id=$booklist->id"), $lang->booklist->view);
          echo html::a($this->createLink('booklist', 'edit',   "id=$booklist->id"), $lang->booklist->edit);
          echo html::a($this->createLink('booklist', 'delete', "id=$booklist->id"), $lang->booklist->delete);
          ?>
        </td>
      </tr>  
      <?php endforeach;?>  
      </tbody>
    <tfoot>
      <tr>
        <td colspan='4'>
          <?php 
          echo html::a(inlink('create'), $lang->booklist->add, '', "class='btn btn-primary'");
          $pager->show('right', 'short');
          ?>
        </td>
      </tr>  
    </tfoot>
  </table>
</div>
<?php include '../../common/view/footer.html.php';?>
