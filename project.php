<!-- Header-->

 
<header class="bg-dark py-5" id="main-header">
 <div class="container px-4 px-lg-5 my-5">
  <div class="text-center text-white">
     <h1 class="display-4 fw-bolder">Welcome <?php echo $_settings
//->info('name') ?></h1>
   </div>
 </div>
</header>
<!-- Section-->
<?php
$sched_arr = array();
$max=0;
?>
<section class="py-5">
<div class="container d-flex justify-content-center">
<div class="card col-md-6 p-0">
<div class="card-header">
<div class="card-title text-center w-100">
Login
</div>
</div>
<div class="card-body">
<form action="" id="login-client">
<div class="form-group">
<label for="email" class='control-label'>
Email
</label>
<input type="text" class="form-control" name="email"
required>
  </div>
  <div class="form-group">
    <label for="password" class='control-
label'>Password
</label>
   <input type="password" class="form-control"
name="password"required >
            </div>
             <div class="form-group d-flex justify-content-end">
              <button class="btn btn-sm btn-primary btn-
flat">Login</button>
                                 </div>
                             </form>
                       </div>
                   </div>   
            </div>
     </section>
<script>
</script>
<?php require_once('config.php'); ?>
<!DOCTYPE html><html lang="en">
<?php require_once('inc/header.php') ?>
<body>
<?php require_once('inc/topBarNav.php') ?>
<?php $page = isset($_GET['p']) ? $_GET['p'] : 'home'; ?>
<?php
if(!file_exists($page.".php") && !is_dir($page)){
include '404.html';
}
else{ if(is_dir($page))include $page.'/index.php';elseinclude $page.'.php';include $page.'/index.php';elseinclude $page.'.php';}?><?php require_once('inc/footer.php') ?>
<div class="modal fade" id="confirm_modal" role='dialog'>
<div class="modal-dialog modal-md modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">
Confirmation
</h5>
</div>
<div class="modal-body">
<div id="delete_content">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" id='confirm'onclick="">
Continue
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="uni_modal" role='dialog'>
<div class="modal-dialog rounded-0 modal-md modal-dialog-centered"role="document">
<div class="modal-content rounded-0">
<div class="modal-header">
<h5 class="modal-title">
</h5>
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" id='submit'onclick="$('#uni_modal form').submit()">
Save
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Cancel
</button>
</div>


</div>
</div>
</div>
<div class="modal fade" id="uni_modal_right" role='dialog'>
<div class="modal-dialog rounded-0 modal-full-height modal-md"role="document">
<div class="modal-content rounded-0"><div class="modal-header">
<h5 class="modal-title">
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span class="fa fa-arrow-right"></span></button></div><div class="modal-body">
</div>
<div class="modal-body">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" id='submit'onclick="$('#uni_modal form').submit()">
Save
</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Cancel
</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="uni_modal_right" role='dialog'>
<div class="modal-dialog rounded-0 modal-full-height modal-md"role="document">
<div class="modal-content rounded-0"><div class="modal-header">
<h5 class="modal-title">
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span class="fa fa-arrow-right">
</span>
</button>
</div>
<div class="modal-body">
</div>
</div>
</div>
</div>
<div class="modal fade" id="viewer_modal" role='dialog'>
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<button type="button" class="btn-close" data-dismiss="modal">
<span class="fa fa-times">
</span>
</button>
<img src="" alt="">
</div>
</div>
</div>
<script>
start_loader();

$(function()
{
end_loader()
})
</script>
</body>
</html>
