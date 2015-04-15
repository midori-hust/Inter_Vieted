<?php
    session_start();
?>
<html>
<head>
    <title> FirstProject </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/view.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-theme.min.css">

    <script language="javascript" src="JqueryUI/js/jquery.js" type="text/javascript"></script>
    <script language="javascript" src="js/jquery.validate.js" type="text/javascript"></script>  
    <script language="javascript" src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>  
    <script language="javascript" src="js/main.js" type="text/javascript"></script> 
</head>
<body>
    
   <div id="container">
        <div id ="header">
            <h2> MyProject</h2>
        </div>
        <div id="content">
            <div id ="nav">
                <?php if ($_SESSION['id'] == null) { ?>
                    <button type="button" class="btn btn-block btn-Info" id="btn1">Signin </button> 
                    <button type="button" class="btn btn-block btn-Info" id="btn2">Signup </button>
                <?php }else{?>
                    <button type="button" class="btn btn-block btn-Info" id="btn3">Signout</button>
                    <button type="button" class="btn btn-block btn-Info" id="btn4">Edit Profile</button>
                <?php }; ?>
                    <button type="button" class="btn btn-block btn-Info" id="btn5">Datetime </button>
            </div>
            <div id ="main">
                <h3> Truyện cổ tích: Trí khôn của ta đây </h3>
                <p> Một con cọp từ trong rừng đi ra, thấy một anh nông dân cùng một con trâu đang cày dưới ruộng. Trâu cặm cụi đi từng bước, lâu lâu lại bị quất một roi vào mông. Cọp lấy làm ngạc nhiên lắm. Ðến trưa, mở cày, Cọp liền đi lại gần Trâu hỏi: </p>
                <p> - Này, trông anh khỏe thế, sao anh lại để cho người đánh đập khổ sở như vậy?</p>
                <p>Trâu trả lời khẽ vào tai Cọp: </p>
                <p>- Người tuy nhỏ, nhưng người có trí khôn, anh ạ!</p>
                <p>Cọp không hiểu, tò mò hỏi:</p>
                <p>- Trí khôn là cái gì? Nó như thế nào?</p>
                <p>Trâu không biết giải thích ra sao, đành trả lời qua quýt:</p>
                <p>- Trí khôn là trí khôn, chứ còn là cái gì nữa? Muốn biết rõ thì hỏi người ấy! </p>
                <p>Cọp thong thả bước lại chỗ anh nông dân và hỏi:</p>
                <p>- Trí khôn của anh đâu, cho tôi xem một tí có được không?</p>
                <p>Anh nông dân suy nghĩ một lát rồi nói: </p>
                <p>- Trí khôn tôi để ở nhà. Ðể tôi về lấy cho anh xem. Anh có cần, tôi sẽ cho anh một ít.</p>
                <p> Cọp nghe nói, mừng lắm.Anh nông dân toan đi, lại làm như sực nhớ ra điều gì bèn nóiNhưng mà tôi đi khỏi, lỡ anh ăn mất trâu của tôi thì sao?</p>

                <p>Cọp đang băn khoăn chưa biết trả lời thế nào thì anh nông dân đã nói tiếp: </p>
                <p>- Hay là anh chịu khó để tôi buộc tạm vào gốc cây này cho tôi được yên tâm. </p>
                <p>Cọp ưng thuận, anh nông dân bèn lấy dây thừng trói cọp thật chặt vào một gốc cây. Xong anh lấy rơm chất chung quanh Cọp, châm lửa đốt và quát: </p>
                <p>- Trí khôn của ta đây! Trí khôn của ta đây! </p>
                <p>Trâu thấy vậy thích quá, bò lăn ra mà cười, không may hàm trên va vào đá, răng gãy không còn chiếc nào.</p>
                <p>Mãi sau dây thừng cháy đứt, Cọp mới vùng dậy ba chân bốn cẳng chạy thẳng vào rừng không dám ngoái nhìn lại.</p>
                <p>Từ đó, cọp sinh ra con nào trên mình cũng có những vằn đen dài, vốn là dấu tích những vết cháy, còn trâu thì chẳng con nào có răng ở hàm trên cả.</p>
            </div>
        </div> 
        <div id="footer">
            @Copyright!
        </div>
   </div>   
</body>
</html>