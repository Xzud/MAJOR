

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="JsBarcode.all.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="main-container">
        <span class="title">PLEASE INPUT CODE!</span>
        <form action="#" class="barcode" method="post" id="barcode-form">
            <input type="number" name="code" id="code">
            <input type="submit" value="Show" name="getcode">
        </form>
        <div class="barcode-section">
             <svg id="barcode"
                jsbarcode-format="upc"
                jsbarcode-value="100"
                jsbarcode-textmargin="0"
                jsbarcode-fontoptions="bold">
             ></svg>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    $("#barcode-form").submit(function(e){
                e.preventDefault();
                let bcode = $('#code').val();

                JsBarcode("#barcode",bcode);
                /*$.ajax({
                    type: "POST",
                    url: "barcode.php",
                    data: {
                        bcode
                    },
                    success: function(result){
                        $(".barcode-section").html(result);
                    }
                })*/
            });
    </script>
</body>
</html>