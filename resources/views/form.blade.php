<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>

<body>
    <form action="/selamat" method="POST">
        @csrf
        <h1>Buat Account Baru !</h1>
        <h2>Sign Up Form</h2>

        <p>First Name:</p>
        <input type="text" name="Fisrtname" id="firstname">

        <p>Last Name:</p>
        <input type="text" name="Lastname" id="lastname">

        <p>Gender:</p>
        <input type="radio" name="gender" id="gender">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="gender">
        <label for="male">Female</label><br>
        <input type="radio" name="gender" id="gender">
        <label for="male">Other</label>

        <p for="national">Nationality:</p>

        <select id="national">
            <option value="indonesia">Indonesian</option>
            <option value="singapura">Singapore</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" id="indonesia" name="indonesia" value="indonesia">
        <label for="indonesia"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english"> English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other"> Other</label>

        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10">
        </textarea><br>
        <input type="submit" value="Sign Up"> </input>

    </form>

</body>

</html>