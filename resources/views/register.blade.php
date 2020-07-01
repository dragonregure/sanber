<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{url('/registering')}}" method="POST">
    @csrf
        <p>First Name:</p>
        <input type="text" name="firstName">
        <p>Last Name:</p>
        <input type="text" name="lastName">
        <p>Gender:</p>
        <input type="radio" name="gender" id="gender" value="male"> Male
        <br>
        <input type="radio" name="gender" id="gender" value="female"> Female
        <br>
        <input type="radio" name="gender" id="gender" value="other"> Other
        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="saiyan">Saiyan</option>
            <option value="cryptonian">Cryptonian</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="bahasaIndonesia" id="bahasaIndonesia" value="bahasaIndonesia"> Bahasa Indonesia
        <br>
        <input type="checkbox" name="english" id="english" value="english"> English
        <br>
        <input type="checkbox" name="other" id="other" value="other"> Other
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="signUp" id="signUp" value="Sign Up">
    </form>
</body>

</html>