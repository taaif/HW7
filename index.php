<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>


    <div class="container">


        <div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">اربح مع طيف</h1>
        <p class="lead fw-normal">باقي عل فتح التسجيل</p>
        <h3 id="demo"></h3>
        <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        </div>

        <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه </li>
        <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع</li>
        <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
        <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
        <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برامج كامنازيا</li>
        </ul>
       
<div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="index.php" <?php $_SERVER['PHP_SELF']?> method="POST">
        <h3>الرجاء ادخال معلوماتك</h3>
        <div class="mb-3">
            <label for="firstName" class="form-label">الاسم الاول</label>
            <input type="text" name="firstname" class="form-control" id="firstName" value="<?php echo $firstName ?>" >
            <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">الاسم الثاني</label>
            <input type="text" name="lastname" class="form-control" id="lastName" value="<?php echo $lastName ?>">
            <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            <div class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>

        <button type="submit"  name="submit" class="btn btn-primary">ارسال البيانات</button>
        </form>
        </div>
        </div>


    </div>

<div class="d-grid gap-2 col-12 mx-auto my-5">
    <button id="winner" type="button" class="btn btn-primary">اختيار الرابح</button>
</div>

   <div id="cards" class="row mb-5 ph-5">
      <?php foreach($users as $user): ?>
            <div class="col-sm-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">
                        <h1 class="card-title display-3 text-centered"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '</br>' ?></h1>
                        <p class="card-text"><?php echo htmlspecialchars($user['email']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>

    
    <?php include_once './parts/footer.php'; ?>