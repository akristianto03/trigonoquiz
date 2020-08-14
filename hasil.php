<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="hasil.css">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            if(empty($_POST['jawaban1'])){
                $s1 = '';
            }else{
                $s1 = $_POST['jawaban1'];
            }

            if(empty($_POST['jawaban2'])){
                $s2 = '';
            }else{
                $s2 = $_POST['jawaban2'];
            }

            if(empty($_POST['jawaban3'])){
                $s3 = '';
            }else{
                $s3 = $_POST['jawaban3'];
            }

            if(empty($_POST['jawaban4'])){
                $s4 = '';
            }else{
                $s4 = $_POST['jawaban4'];
            }

            if(empty($_POST['jawaban5'])){
                $s5 = '';
            }else{
                $s5 = $_POST['jawaban5'];
            }

            if(empty($_POST['jawaban6'])){
                $s6 = '';
            }else{
                $s6 = $_POST['jawaban6'];
            }

            if(empty($_POST['jawaban7'])){
                $s7 = '';
            }else{
                $s7 = $_POST['jawaban7'];
            }

            if(empty($_POST['jawaban8'])){
                $s8 = '';
            }else{
                $s8 = $_POST['jawaban8'];
            }

            if(empty($_POST['jawaban9'])){
                $s9 = '';
            }else{
                $s9 = $_POST['jawaban9'];
            }

            if(empty($_POST['jawaban10'])){
                $s10 = '';
            }else{
                $s10 = $_POST['jawaban10'];
            }
            
            $count = 0;

            if($s1=='d'){$count++;$check1='benar';}else{$check1='salah';}
            if($s2=='b'){$count++;$check2='benar';}else{$check2='salah';}
            if($s3=='a'){$count++;$check3='benar';}else{$check3='salah';}
            if($s4=='b'){$count++;$check4='benar';}else{$check4='salah';}
            if($s5=='c'){$count++;$check5='benar';}else{$check5='salah';}
            if($s6=='e'){$count++;$check6='benar';}else{$check6='salah';}
            if($s7=='a'){$count++;$check7='benar';}else{$check7='salah';}
            if($s8=='d'){$count++;$check8='benar';}else{$check8='salah';}
            if($s9=='e'){$count++;$check9='benar';}else{$check9='salah';}
            if($s10=='b'){$count++;$check10='benar';}else{$check10='salah';}

            $nilai = $count * 10;
        
    ?>

    <div class="container">
        <img class="bg" src="bg.png">
        <div class="head">
            <div class="judul">
                <h2>Quiz telah Dikerjakan</h2>
                <h1>Nilai : <?= $nilai; ?></h1>
            </div>
        </div>

        <div class="content">

                <h1>Soal & Pembahasan</h1>

                <!-- 1 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 1</h1>
                        <img src="picsoal1.png" alt="">
                        <p>Besar sudut yang seusai dengan gambar tersebut adalah… <br></p>
                        <h2>Pembahasan</h2>
                        <img src="" alt="">
                        <p>Besar sudut pada seluruh kuadran merupakan 360&#176;, sementara sudut lancip menunjukkan angka 30&#176; sehingga cara menghitung besarnya sudut tersebut dapat ditentukan dengan cara 360&#176; - 30&#176; = 330&#176;</p>
                        <h2>Jawaban anda : <?= $check1; ?></h2>
                    </div>
                </div>

                <!-- 2 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 2</h1>
                        <img src="" alt="">
                        <p>Diketahui sin A = 1/a , A adalah sudut tumpul. Nilai cos A = <br></p>
                        <h2>Pembahasan</h2>
                        <img src="picjawab2.png" alt="">
                        <h2>Jawaban anda : <?= $check2; ?></h2>
                    </div>
                </div>

                <!-- 3 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 3</h1>
                        <img src="" alt="">
                        <p>Besar sudut 3/4π sama dengan… </p>
                        <h2>Pembahasan</h2>
                        <img src="" alt="">
                        <p>1 rad = 180&#176;/&pi; <br>
                            (3/4)&pi; rad = (3/4)&pi; x 180/&pi; <br>
                                 = (3/4) x 180&#176; <br>
                                 = 3 x 45&#176; <br>
                                 = 135&#176;</p>
                        <h2>Jawaban anda : <?= $check3; ?></h2>
                    </div>
                </div>

                <!-- 4 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 4</h1>
                        <img src="" alt="">
                        <p>cot 105° tan 15°= ….<br></p>
                        <h2>Pembahasan</h2>
                        <img src="picjawab4.png" alt="">
                        <h2>Jawaban anda : <?= $check4; ?></h2>
                    </div>
                </div>

                <!-- 5 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 5</h1>
                        <img src="picsoal5.png" alt="">
                        <p>Nilai cos α adalah….<br>
                        <h2>Pembahasan</h2>
                        <img src="" alt="">
                        <p>Dengan Teorema Pythagoras, panjang c = AB dapat ditentukan sebagai berikut. <br>
                            c = &#8730;a&sup2;+b&sup2; = &#8730;(&#8730;3)&sup2;+1&sup2; = &#8730;4 = 2 <br>
                            Cosinus sudut adalah perbandingan antara panjang sisi samping sudut terhadap hipotenusa (sisi miring) segitiga siku-siku. Untuk itu,
                            cos &prop; = b/c = 1/2</p>
                        <h2>Jawaban anda : <?= $check5; ?></h2>
                    </div>
                </div>

                <!-- 6 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 6</h1>
                        <img src="" alt="">
                        <p>Jika cos θ/1-sin θ = a untuk θ≠2/π + 2Kπ makan tan ½ θ = ….<br></p>
                        <h2>Pembahasan</h2>
                        <img src="picjawab6.png" alt="">
                        <h2>Jawaban anda : <?= $check6; ?></h2>
                    </div>
                </div>

                <!-- 7 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 7</h1>
                        <img src="" alt="">
                        <p>Diketahui △ABC siku-siku di B. Jika cos A = ¾, nilai cot A adalah…<br></p>
                        <h2>Pembahasan</h2>
                        <img src="" alt="">
                        <p>cos&sup2; A + sin&sup2; A = 1 <br>
                            (3/4)&sup2; + sin&sup2; A = 1 <br>
                            9/16 + sin&sup2; A = 1 <br>
                            sin&sup2; A = 1-9/16 <br>
                            sin&sup2; A = 7/16 <br>
                            sin A = &#8730;7/4 <br>
                            contan A = cos A/sin A = (3/4) / (&#8730;7/4) = 3/&#8730;7 = 3&#8730;7/7</p>
                        <h2>Jawaban anda : <?= $check7; ?></h2>
                    </div>
                </div>

                <!-- 8 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 8</h1>
                        <img src="picsoal8.png" alt="">
                        <p><br></p>
                        <h2>Pembahasan</h2>
                        <img src="" alt="">
                        <p>tan x = - 3/4, 3π/2 &lt; x &lt; 2π berada di kuadran IV <br>
                            sin (π/3 - x) = sin π/3 cos x = cos π/2/3 sin x <br> 
                            = (1/2)&radic;3 x (4/5) - 1/2 x (-3/5) <br>
                            = 1/10 (4&radic;3 + 3)</p>
                        <h2>Jawaban anda : <?= $check8; ?></h2>
                    </div>
                </div>

                <!-- 9 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 9</h1>
                        <img src="" alt="">
                        <p>Bentuk sederhana dari (1-cos&sup2; t)/sin t adalah<br></p>
                        <h2>Pembahasan</h2>
                        <img src="picjawab9.png" alt="">
                        <h2>Jawaban anda : <?= $check9; ?></h2>
                    </div>
                </div>

                <!-- 10 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 10</h1>
                        <img src="picsoal10.png" alt="">
                        <p><br></p>
                        <h2>Pembahasan</h2>
                        <img src="picjawab10.png" alt="">
                        <h2>Jawaban anda : <?= $check10; ?></h2>
                    </div>
                </div>

        </div>

        <div class="mulai">
                <img src="bgfooter.png" alt="">
                <div class="quiz">
                    <h1>Terimakasih Sudah Belajar <br> Melalui TrigonoQuiz</h1>
                    <div class="tombol"><a href="index.php">Menu Awal</a></div>
                </div>
        </div>
    </div>

    <?php
        }else{
            echo "
            <script>
                alert('Kerjakan Quiz Terlebih Dahulu!');
                document.location.href = 'index.php';
            </script>
            ";
        }
    ?>

</body>
</html>