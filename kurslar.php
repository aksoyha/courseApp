<?php require_once('config.php') ?>
<?php include('partials/_header.php')?>
<?php include('partials/_navbar.php')?>

<?php

$result_kategoriler=mysqli_query($connect,"SELECT * from kategoriler");
$result_kurslar=mysqli_query($connect,"SELECT * from kurslar");
$kategoriler=mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);
$kurslar=mysqli_fetch_all($result_kurslar,MYSQLI_ASSOC);
//gelen bilgilerii key value şekilde assoc şeklinde olacak numericşeklind edeğil.
mysqli_close($connect);

?>
     
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <?php include('partials/_kategoriler.php')?>

            </div>
            <div class="col-9">
                <?php foreach($kurslar as $kurs): ?>
                    <?php if($kurs["onay"]): ?>
                        <?php include('partials/_kurs.php')?>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
            
    </div>
    
<?php include('partials/_footer.php')?>