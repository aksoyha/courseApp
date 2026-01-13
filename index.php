<?php 
$kategoriler=["Programlama","Web Geliştirme","Mobil Uygulamalar"];
$kurslar=[
    [
        "id"=>1,
        "baslaik"=>"Web Geliştirme Kursu",
        "aciklama"=>"Gelişim destekli",
        "resim"=>"prg.jpg"
    ],
    [
        "id"=>2,
        "baslaik"=>"JavaSript Geliştirme Kursu",
        "aciklama"=>"Web için güzel bir kurs",
        "resim"=>"js.jpg"
    ],
    [
        "id"=>3,
        "baslaik"=>"Mobil Geliştirme Kursu",
        "aciklama"=>"Mobil dümyasına giriş yapın!!!!!",
        "resim"=>"mbl.jpg"
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
                    <?php  foreach($kategoriler as $kategori):?>
                        
                        <a href="#" class="list-group-item list-group-item-action">
                            <?php echo $kategori  ?>
                        </a>
                    <?php endforeach; ?>
                    <!-- <a href="#" class="list-group-item list-group-item-action">Web Geliştirme</a>
                    <a href="#" class="list-group-item list-group-item-action">Mobil Uygulama</a> -->
                </div>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/prg.jpg" alt="programming" class="img-fluid rounded-start">
                        </div>
                        <div class="cold-md-8">
                            <div class="card-body">
                                <h5 class="cart-title">Programlama</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Fugiat enim accusantium, at ipsam doloribus labore consequatur 
                                     velit a suscipit quos architecto nam animi. Quod, ex accusantium 
                                     totam illum minus id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/js.jpg" alt="programming" class="img-fluid rounded-start">
                        </div>
                        <div class="cold-md-8">
                            <div class="card-body">
                                <h5 class="cart-title">Programlama</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Fugiat enim accusantium, at ipsam doloribus labore consequatur 
                                     velit a suscipit quos architecto nam animi. Quod, ex accusantium 
                                     totam illum minus id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/mbl.jpg" alt="programming" class="img-fluid rounded-start">
                        </div>
                        <div class="cold-md-8">
                            <div class="card-body">
                                <h5 class="cart-title">Programlama</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Fugiat enim accusantium, at ipsam doloribus labore consequatur 
                                     velit a suscipit quos architecto nam animi. Quod, ex accusantium 
                                     totam illum minus id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
    
</body>
</html>