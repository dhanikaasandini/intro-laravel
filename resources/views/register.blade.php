<!DOCTYPE html>
<html>
<head>
<title>Form Sanberbook</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="POST" >
@csrf
    <table>
        <p>First name:</p>
        <input type="text" name="first_name" size="20"></td></tr>
        <p>Last name:</p>
        <input type="text" name="last_name" size="20"></td></tr>
    </table>
    
    <p>Gender:</p>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="female">Female<br>
    <input type="radio" name="gender" value="other">Other<br>

    <p>Nationality:</p>
    Indonesian<br>
    <select name="nationality">
        <option value="ind">Indonesian</option>
        <option value="sing">Singaporean</option>
        <option value="malay">Malaysian</option>
        <option value="aus">Australian</option>
    </select>

    <p>Language Spoken:</p>
    <input type="checkbox" name="language_spoken" value="bahasa">Bahasa Indonesia<br>
    <input type="checkbox" name="language_spoken" value="english">English<br>
    <input type="checkbox" name="language_spoken" value="other">Other<br>

    <p>Bio:</p>
    <textarea></textarea>

    <br>
    <input type="submit" value="Sign Up"name="t1">

    </form>
    </body>
    </html>