<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOHO_ForgetPasswordToModify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- My CSS -->
    <link href="{{ URL::asset('/css/All.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/css/LOHO_ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="../LOHO-Project/JS/main.js"></script>
</head>

<body>
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="../LOHO-Project/Image/LOHO_Logo.PNG" alt="" class="img-fluid">
            </div>
            <div class="page-title">忘記密碼?</div>
            <br>
            <div class="outer">
                <div class="subTitle">
                    帳戶資訊
                </div>
                <div class="input-area">
                    <div class="input-text">
                        帳號：
                    </div>
                    <input type="text">
                </div>
                <div class="subTitle">
                    更改帳戶
                </div>
                <div class="input-area">
                    <div class="input-text">
                        *重設密碼：
                    </div>
                    <input type="text">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="input-area">
                    <div class="input-text">
                        *確認密碼：
                    </div>
                    <input type="text">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="submit-area">
                    <button type="button" class="btn btn-dark">取消</button>
                    <button type="button" class="btn btn-dark">確認更改</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>