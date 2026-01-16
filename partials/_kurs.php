<div class="card mb-3">
<div class="row">
    <div class="col-md-4">
        <img src="img/<?php echo $kurs["resim"];?>" alt="programming" class="img-fluid rounded-start">
    </div>
    <div class="cold-md-8">
        <div class="card-body">
            <h5 class="cart-title">
                <a href="kurslar-detay.php?id=<?php echo $kurs["id"]; ?>">
                    <?php echo $kurs["baslik"];?>
                </a>
            </h5>
            <p>
                <?php echo $kurs["aciklama"];?>
            </p>
        </div>
    </div>
</div>
</div>