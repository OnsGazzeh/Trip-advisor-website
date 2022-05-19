<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="form.css">
    <title>contact details</title>
    <script language="javascript">
        function verif() {
            alert("by clicking ok your contact details will be deleted ! ")
        }
    </script>

    
</head>
<center>

    <body>
        <form name="Form" method="post" action="modif.php">
            <table>
                <h2>Modify your contact details</h2>

                <div class="box">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" placeholder=" write your email">
                    <div class="error" id="emailErr"></div>
                </div>
                <div class="box">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" maxlength="10" id="mobile" placeholder=" write your mobile Number">
                    <div class="error" id="mobileErr"></div>
                </div>
                <div class="box">
                    <label>Country</label>
                    <select name="country" id="country">
                        <option>Select</option>
                        <option>Nabel</option>
                        <option>Sousse</option>
                        <option>Sfax</option>
                        <option>Bizerte</option>
                    </select>
                    <div class="error" id="countryErr"></div>
                </div>

                <div class="box">
                    <label>Accommodation</label>
                    <select name="Accommodation" id="Accommodation">
                        <option>Select</option>
                        <option>Hotel</option>
                        <option>Camping</option>
                        <option>Maison d'hote</option>
                    </select>
                    <div class="error" id="AccommodationErr"></div>
                </div>
            </table>
            <input type="submit" value="Modify">
        </form>

        <form method="post" action="delete.php">
            <table>
                <h2>Delete your email</h2>
                <div class="box">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" placeholder=" write your email">
                    <div class="error" id="emailErr"></div>
                </div>
                <input type="submit" value="Delete" onclick=verif()>

        </form>

    </body>
</center>

</html>