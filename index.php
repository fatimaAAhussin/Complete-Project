<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<?php
include './parts/header.php';
?>
<body>

     <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
     <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="images/nour.png" alt="" >
       <h1 class="display-4 fw-normal">اربح مع نور </h1>
       <p class="lead fw-normal">باقي على فتح التسجيل</p>
       <p class="lead fw-normal">للسحب على سحب نسحةمجانيةمن برنامج</p>
       <a class="btn btn-outline-secondary" href="#">Coming soon</a>
     </div>
     <div class="container">
     <ul class="list-group">
         <li class="list-group-item active" aria-current="true">An active item</li>
         <li class="list-group-item">A second item</li>
         <li class="list-group-item">A third item</li>
         <li class="list-group-item">A fourth item</li>
         <li class="list-group-item">And a fifth one</li>
        </ul>
     </div>
     </div>


    <div class="container">
    <div class="position-relative overflow-hidden  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
       <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
           <div class="mb-3">
             <label  class="form-label">الاسم الاول </label>
             <input type="text" name="firstname" id="firstname" class="form-control"  aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text error"><?PHP echo $errors['firstNameError']?></div>
           </div>
           <div class="mb-3">
             <label  class="form-label">الاسم الثاني </label>
             <input type="text" name="lastname" id="lastname" class="form-control"  aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text error"></div>
           </div>
           <div class="mb-3">
             <label  class="form-label">البريد الالكتروني</label>
             <input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text error"></div>
           </div>
          
           <button type="submit" name="submit" class="btn btn-primary">ارسال العلومات</button>
       </form>
    </div>
    </div>

    <!-- <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="Frist Name">
        <input type="text" name="lastname" id="lastname">
        <input type="email" name="email" id="email">
        <input type="submit" name="submit" id="" value="send">

    </form> -->
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
   </div>
    <div class="d-grid gap-2 col-6 mx-auto my-6">
        <button id="winner">اختار الرابح</button>
    </div>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الرابح</h5>
        <button id="winner" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
      <?php foreach ($users as $suer) : ?>
        <h5 class="disply-3 text-center modal-title" id="exampleModalLabel"><?php echo htmlspecialchars($user['firstname']).''.htmlspecialchars($user['lastname']); ?></h5>
        <?php endforeach ?>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>




    <div id="cards" class="row mb-5 pb-5">
       <?php
        foreach ($users as $suer) : ?>
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
               <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($user['firstname']).''.htmlspecialchars($user['lastname']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
               </div>
            </div>
        </div>
             <h1><?php echo htmlspecialchars($user['firstname']).''.htmlspecialchars($user['lastname']).'<br>'.htmlspecialchars($user['email']); ?> <h1>
        
        <?php endforeach ?>
    </div>

    <?php
    include './inc/footer.php'
    ?>
</body>
</html>