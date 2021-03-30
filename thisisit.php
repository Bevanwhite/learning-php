<?php
$today = date('Ymd');
$referance = "001";
$num = $today . $referance;

$mobile = "077-129-3842";
$extension = "1160/011-245-6160";
$dep = "SHO/Moratuwa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            <h1>This is it</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="/login">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Reference NO</label>
                    <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder=<?php echo $num?> aria-label="Disabled input example" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <h5> Request by </h5>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name </label>
                    <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder=<?php echo $num?> aria-label="Disabled input example" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Staff Number </label>
                    <div class="col-sm-6">
                    <input class="form-control" type="text" placeholder=<?php echo $num?> aria-label="Disabled input example" disabled>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="staticEmail" class="col-sm-2 col-form-label">E-mail </label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="email address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@seylan.lk</span>
                        </div>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Department / Branch</label>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=<?php echo $dep ?>>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Mobile NO</label>
                    <div class="col-sm-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=<?php echo $mobile;?>>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Extension / Land Line</label>
                    <div class="col-sm-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=<?php echo $extension?>>
                    </div>
                </div>
                <div class="row mb-2 fieldGroup">
                    <h5> VPN </h5>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Number 01</label>
                        <div class="col-sm-3 ">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <a class="btn btn-success btn-sm addMore" href="javascript:void(0)">+ Add</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="form-group fieldGroupCopy" style="display: none;">
    <div class="row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Number 01</label>
        <div class="col-sm-3">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-danger btn-sm remove" href="javascript:void(0)">- Remove</a>
        </div>
        </div>  
</div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
    <script>
        $(document).ready(function(){
            // group add limit 
            var maxGroup = 10;

            // add more fields group
            $(".addMore").click(function(){
                if($('body').find('.fieldGroup').length < maxGroup){
                    var fieldHTML = '<div class="form-group fieldGroup">'+ $(".fieldGroupCopy").html()+'</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                }else{
                    alert('Maximum '+ maxGroup + ' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click",".remove",function(){
                $(this).parents('.fieldGroup').remove();
            });

        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
