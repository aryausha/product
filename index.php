<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <table class="table table-borderless">
        <tr>
            <td style="color: rgb(255, 8, 0);">PDTNAME</td>
            <td><input type="text" id="name" class="form-control"></td>
        </tr>
        
        <tr>
            <td style="color: rgb(255, 8, 0);">DESCRIPTION</td>
            <td><input type="text" id="des" class="form-control"></td>
        </tr>
        <tr>
            <td style="color: rgb(255, 8, 0);">PRICE</td>
            <td><input type="text" id="price" class="form-control"></td>
        </tr>
        <tr>
            <td style="color: rgb(255, 8, 0);" >MANUFACTURE NAME</td>
            <td><input type="text" id="mname" class="form-control"></td>
        </tr>
        <tr>
            <td style="color: rgb(255, 8, 0);">MANUFACTURE YEAR</td>
            <td><input type="text" id="myear" class="form-control"></td>
        </tr>
        <tr>
            <td style="color: rgb(255, 8, 0);">GENDER</td>
            <td style="color: rgb(255, 8, 0);">
                <input type="radio" id="gender" class="form-check-input" name="gender" value="male">male
                <input type="radio" id="gender1" class="form-check-input" name="gender" value="female">female
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button onclick="product()" class="btn btn-danger">SUBMIT</button></td>
        </tr>


    </table>


    <script>
        function product()
        {
            var name=document.getElementById("name").value
            var desc=document.getElementById("des").value
            var price=document.getElementById("price").value
            var mname=document.getElementById("mname").value
            var myear=document.getElementById("myear").value
            var x=document.getElementById("gender").checked
            var y=document.getElementById("gender1").checked
            


            if(x==true)
            {
                var getgender=document.getElementById("gender").value
            }
            else if(y==true)
            {
                var getgender=document.getElementById("gender1").value
            }

            console.log(name)
            console.log(desc)
            console.log(price)
            console.log(mname)
            console.log(myear)
            console.log(getgender)
            








        }



    </script>
</body>
</html>