
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberbox = $_POST["numberbox"];
    }

    $fornt = substr($numberbox,0,3);
    $mid = substr($numberbox,3,4);
    $behind = substr($numberbox,7,12);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nynmndbox = $_POST["nynmndbox"];
    }

    $ny = substr($nynmndbox,0,2);
    $nm = substr($nynmndbox,2,2);
    $nd = substr($nynmndbox,4,6);


    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        if(isset($_POST["3"])) {
            $license = $_POST["3"];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        if(isset($_POST["2"])) {
            $career = $_POST["2"];
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        if(isset($_POST["1"])) {
            $region = $_POST["1"];
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css2.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body bgcolor="#F0EBF8">
    <div id="output">

        <div class="wrap">

            <div class="a"></div>
            <div class="box1">
                <div class="po" style="font-size: 30px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                        회원님 총 정보 
                    </div>
                </div>
            </div>

            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>이름: <span style="color:blue;"> <?php echo $name; ?> </span> </p>
                    </div>
                </div>
            </div>

            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>휴대폰번호:<span style="color:blue;">
                     <?php echo $fornt; ?> -
                     <?php echo $mid; ?> -
                     <?php echo $behind; ?> </span> </p>
                    </div>
                </div>
            </div>
            
            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>생년월일:<span style="color:blue;">
                     <?php echo $ny; ?>년
                     <?php echo $nm; ?>월
                     <?php echo $nd; ?>일 </span> </p>
                    </div>
                </div>
            </div>

            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>택시면허 보유 여부 (핸재 기준):<span style="color:blue;"> <?php echo $license; ?> </span></p>
                    </div>
                </div>
            </div>
            
            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>택시회사 경력 여부:<span style="color:blue;"> <?php echo $career; ?> </span></p>
                    </div>
                </div>
            </div>

            <div class="box3">
                <div class="po" style="font-size: 20px; font-weight: 700px;">
                    <div style="margin-top: 20px; margin-bottom: 20px;">
                    <p>택시면허 보유 또는, 취득 예정 지역:<span style="color:blue;"> <?php echo $region; ?> </span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>  
</body>
</html>