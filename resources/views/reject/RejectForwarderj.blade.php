<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remarks</title>
</head>
<body>

<form action="/remarkssubmitj/{{$ApplicationForms->id}}" method="post">
@csrf
<li>Remarks* : 
<textarea name="Remark" id="Remark" cols="30" rows="10" required></textarea>

</li>

<input type="submit" value="Save" class="save_btn save">
</form>
</body>
</html>