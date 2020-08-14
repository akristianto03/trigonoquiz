<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <div class="container">
        <img class="bg" src="bg.png">
        <div class="head">
            <div class="back"><a href="penjelasan.php"><img src="back.png" alt=""></a></div>
            <div class="judul">
                <h1>Quiz<br>Trigonometri</h1>
                <p>Selamat Mengerjakan...</p>
            </div>
        </div>
        <div class="content">
            <form action="hasil.php" method="post">

                <!-- 1 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 1</h1>
                        <img src="picsoal1.png" alt="">
                        <p>Besar sudut yang seusai dengan gambar tersebut adalah… <br>
                        <input type="radio" name="jawaban1" value="a"> 30&#176;<br>
                        <input type="radio" name="jawaban1" value="b"> 60&#176;<br>
                        <input type="radio" name="jawaban1" value="c"> 300&#176;<br>
                        <input type="radio" name="jawaban1" value="d"> 330&#176;<br>
                        <input type="radio" name="jawaban1" value="e"> 390&#176;
                        </p>
                    </div>
                </div>

                <!-- 2 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 2</h1>
                        <img src="" alt="">
                        <p>Diketahui sin A = 1/a , A adalah sudut tumpul. Nilai cos A = <br>
                        <input type="radio" name="jawaban2" value="a"> &#8730;2A-1<br>
                        <input type="radio" name="jawaban2" value="b"> &#8730;A&sup2;-1/A<br>
                        <input type="radio" name="jawaban2" value="c"> &#8730;A-1/A<br>
                        <input type="radio" name="jawaban2" value="d"> &#8730;2A-1/A<br>
                        <input type="radio" name="jawaban2" value="e"> &#8730;2A&sup2;-1
                        </p>
                    </div>
                </div>

                <!-- 3 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 3</h1>
                        <img src="" alt="">
                        <p>Besar sudut 3/4π sama dengan… <br>
                        <input type="radio" name="jawaban3" value="a"> 135&#176;<br>
                        <input type="radio" name="jawaban3" value="b"> 90&#176;<br>
                        <input type="radio" name="jawaban3" value="c"> 45&#176;<br>
                        <input type="radio" name="jawaban3" value="d"> 150&#176;<br>
                        <input type="radio" name="jawaban3" value="e"> 0&#176;
                        </p>
                    </div>
                </div>

                <!-- 4 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 4</h1>
                        <img src="" alt="">
                        <p>cot 105° tan 15°= ….<br>
                        <input type="radio" name="jawaban4" value="a"> -7 + 4&#8730;3<br>
                        <input type="radio" name="jawaban4" value="b"> -7 - 4&#8730;3<br>
                        <input type="radio" name="jawaban4" value="c"> 7&#8730;3 + 4<br>
                        <input type="radio" name="jawaban4" value="d"> -7&#8730;3 - 4<br>
                        <input type="radio" name="jawaban4" value="e"> 7 - 4&#8730;3
                        </p>
                    </div>
                </div>

                <!-- 5 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 5</h1>
                        <img src="picsoal5.png" alt="">
                        <p>Nilai cos α adalah….<br>
                        <input type="radio" name="jawaban5" value="a"> 7<br>
                        <input type="radio" name="jawaban5" value="b"> 5<br>
                        <input type="radio" name="jawaban5" value="c"> 2<br>
                        <input type="radio" name="jawaban5" value="d"> &#8730;2<br>
                        <input type="radio" name="jawaban5" value="e"> 1
                        </p>
                    </div>
                </div>

                <!-- 6 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 6</h1>
                        <img src="" alt="">
                        <p>Jika cos θ/1-sin θ = a untuk θ≠2/π + 2Kπ makan tan ½ θ = ….<br>
                        <input type="radio" name="jawaban6" value="a"> a&sup2;-1<br>
                        <input type="radio" name="jawaban6" value="b"> a-1<br>
                        <input type="radio" name="jawaban6" value="c"> (a-1)/(a+1)&sup2;<br>
                        <input type="radio" name="jawaban6" value="d"> (a-1)&sup2;/(a+1)<br>
                        <input type="radio" name="jawaban6" value="e"> (a-1)/(a+1)
                        </p>
                    </div>
                </div>

                <!-- 7 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 7</h1>
                        <img src="" alt="">
                        <p>Diketahui △ABC siku-siku di B. Jika cos A = ¾, nilai cot A adalah…<br>
                        <input type="radio" name="jawaban7" value="a"> (3&#8730;7)/7<br>
                        <input type="radio" name="jawaban7" value="b"> 7/(3&#8730;7)<br>
                        <input type="radio" name="jawaban7" value="c"> 3/4<br>
                        <input type="radio" name="jawaban7" value="d"> 4/3<br>
                        <input type="radio" name="jawaban7" value="e"> 3/5
                        </p>
                    </div>
                </div>

                <!-- 8 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 8</h1>
                        <img src="picsoal8.png" alt="">
                        <p><br>
                        <input type="radio" name="jawaban8" value="a">1/10 (3 - 3&radic;4) <br>
                        <input type="radio" name="jawaban8" value="b">1/2 (4 + 3&radic;4) <br>
                        <input type="radio" name="jawaban8" value="c">1/10 (3 + 3&radic;4) <br>
                        <input type="radio" name="jawaban8" value="d">1/10 (4&radic;3 + 3) <br>
                        <input type="radio" name="jawaban8" value="e"> 1/2 (4&radic;3 - 3)
                        </p>
                    </div>
                </div>

                <!-- 9 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 9</h1>
                        <img src="" alt="">
                        <p>Bentuk sederhana dari (1-cos&sup2; t)/sin t adalah<br>
                        <input type="radio" name="jawaban9" value="a"> sin&sup2; t<br>
                        <input type="radio" name="jawaban9" value="b"> cos&sup2; t<br>
                        <input type="radio" name="jawaban9" value="c"> cosec&sup2; t<br>
                        <input type="radio" name="jawaban9" value="d"> cos t<br>
                        <input type="radio" name="jawaban9" value="e"> sin t
                        </p>
                    </div>
                </div>

                <!-- 10 -->
                <div class="box">
                    <div class="border">
                        <h1>Soal 10</h1>
                        <img src="picsoal10.png" alt="">
                        <p><br>
                        <input type="radio" name="jawaban10" value="a"> -&#8731;3<br>
                        <input type="radio" name="jawaban10" value="b"> &#8731;3<br>
                        <input type="radio" name="jawaban10" value="c"> -1/2 &#8731;3<br>
                        <input type="radio" name="jawaban10" value="d"> 1/3 &#8731;3<br>
                        <input type="radio" name="jawaban10" value="e"> -1/3 &#8731;3
                        </p>
                    </div>
                </div>
            
        </div>
        <div class="mulai">
                <img src="bgfooter.png" alt="">
                <div class="quiz">
                    <h1>Sudah Selesai Mengerjakan?</h1>
                    <input type="submit" name="submit" value="Lihat Hasil" class="tombol">
                </form>
                </div>
        </div>
    </div>
</body>
</html>