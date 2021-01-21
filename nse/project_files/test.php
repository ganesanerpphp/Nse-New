<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta charset="utf-8" />
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            function clickMe() {
                // THE JSON ARRAY.
                var cars = [
                    {
                        "ID": "001",
                        "Car_Name": "BMW"
                    },
                    {
                        "ID": "002",
                        "Car_Name": "AUDI"
                    },
                    {
                        "ID": "003",
                        "Car_Name": "Range Rover"
                    }
                ];

                var ele = document.getElementById('sel');
                for (var i = 0; i < cars.length; i++) {
                    // POPULATE SELECT ELEMENT WITH JSON.
                    ele.innerHTML = ele.innerHTML +
                        '<option value="' + cars[i]['ID'] + '">' + cars[i]['Car_Name'] + '</option>';
                }
            }

            function show(ele) {
                // GET THE SELECTED VALUE FROM <select> ELEMENT AND SHOW IT.
                var msg = document.getElementById('msg');
                msg.innerHTML = 'Selected Car: <b>' + ele.options[ele.selectedIndex].text + '</b> </br>' +
                    'ID: <b>' + ele.value + '</b>';
            }
        </script>
    </head>

    <body>
        <div>
            <div>
                <!--Click button-->
                <p style="margin-top:20px;">
                    <input type="button" onclick="clickMe"value="Click to Select" />
                </p>        

                <!--Select Menu-->
                <p>
                    <select id="sel" onchange="show(this)">
                        <option value=""> - - Select - -</option>
                    </select>
                </p>

                <p id="msg">
                </p>
            </div>
        </div>
    </body>
    </html>
