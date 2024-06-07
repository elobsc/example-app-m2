<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/students" method ="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name"><br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name"><br>
        <label for="birth_date">Birthdate:</label>
        <input type="date" name="birth_date"><br>
        <label for="adress">Adresse:</label>
        <input type="text" name="adress"><br>
        <select name="groups_id">
            <option value="1">Seconde</option>
            <option value="2">Première</option>
            <option value="3">Terminale</option>
        </select>
        <input type="submit" value="Submit">
    </form>
   
</body>
</html>
