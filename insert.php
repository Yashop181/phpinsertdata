<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="save.php" method="post">
        <div>
            <label for="rollno">Roll No:</label>
            <input type="text"  name="rno" >
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text"  name="nm" >
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text"  name="ct" >
        </div>
        <div>
            <label for="fees">Fees:</label>
            <input type="number"  name="fs" >
        </div>
        <div>
            <input type="submit" value="save" >
        </div>
    </form>
</body>
</html>