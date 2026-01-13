<?php 
$kategoriler=["Programlama","Web Geliştirme","Mobil Uygulamalar","Ofis Uygulamaları"];
$kurslar=[
    [
        "id"=>1,
        "baslik"=>"Web Geliştirme Kursu",
        "aciklama"=>"Gelişim destekli",
        "resim"=>"prg.jpg",
        "onay"=>true
    ],
    [
        "id"=>2,
        "baslik"=>"JavaSript Geliştirme Kursu",
        "aciklama"=>"Web için güzel bir kurs",
        "resim"=>"js.jpg",
        "onay"=>true
    ],
    [
        "id"=>3,
        "baslik"=>"Mobil Geliştirme Kursu",
        "aciklama"=>"Mobil dümyasına giriş yapın!!!!!",
        "resim"=>"mbl.jpg",
        "onay"=>true
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expend-lg bg-primary navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">CourseApp</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Anasayfa</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                   <a href="" class="nav-link">Kurslar</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php  for($i=0;$i<count($kategoriler); $i++):?>
                        
                        <a href="#" class="list-group-item list-group-item-action">
                            <?php echo $kategoriler[$i]  ?>
                        </a>
                    <?php endfor; ?>
                    <!-- <a href="#" class="list-group-item list-group-item-action">Web Geliştirme</a>
                    <a href="#" class="list-group-item list-group-item-action">Mobil Uygulama</a> -->
                </div>
            </div>
            <div class="col-9">
                <?php foreach($kurslar as $kurs): ?>
                    <?php if($kurs["onay"]== true): ?>
                        <div class="card mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/<?php echo $kurs["resim"];?>" alt="programming" class="img-fluid rounded-start">
                            </div>
                            <div class="cold-md-8">
                                <div class="card-body">
                                    <h5 class="cart-title">
                                        <?php echo $kurs["baslik"];?>
                                    </h5>
                                    <p>
                                        <?php echo $kurs["aciklama"];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
            
    </div>
    
</body>
</html>