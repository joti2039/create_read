<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>STUDENT INFORMATION</title>



    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <style>
        .myForm {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 20px;
            background-color: lavender;
            border: 1px solid #ccc;
            display: grid;
            justify-content: center;
        }

        .myForm * {
            box-sizing: border-box;
        }

        .myForm fieldset {
            border: none;
            padding: 0;
        }

        .myForm legend,
        .myForm label {
            padding: 0;
            font-weight: bold;
        }

        .myForm label.choice {
            font-size: 0.9em;
            font-weight: normal;
        }

        .myForm input[type="text"],
        .myForm input[type="tel"],
        .myForm input[type="email"],
        .myForm input[type="date"],
        .myForm select,
        .myForm textarea {
            display: block;
            width: 500px;
            border: 1px solid #ccc;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.9em;
            padding: 0.3em;
        }

        .myForm textarea {
            height: 100px;
        }

        #me {
            height: 250px;
        }

        .myForm button {
            padding: 1em;
            border-radius: 0.5em;
            background: green;
            border: none;
            font-weight: bold;
            margin-top: 1em;
            width: 500px;
            color: white;
        }

        .myForm button:hover {
            background: #ccc;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <h1 style="text-align: center">STUDENT INFORMATION</h1>
    <form action="insertData" method="POST" enctype="multipart/form-data" ;style=
    "font-size: 20px;
    background-color: lavender;
    border: 1px solid #ccc;
    display: grid;
    justify-content: center">
        @csrf
        <p>

            <label>Name
                <input type="text" name="Name" placeholder="Enter your name" ;/>
            </label>
        </p>

        <p>
            <label>ID
                <input type="text" name="ID" placeholder="Enter Your ID " />
            </label>
        </p>

        <p>
            <label>Registration No.
                <input type="text" name="Regi" placeholder="Enter your registration no. " />
            </label>
        </p>

        <p>
            <label>Email
                <input type="email" name="Email" placeholder="Enter you Email" />
            </label>
        </p>

        <p>
            <label>Batch
                <input type="text" name="Batch" placeholder="Which Batch are/were you in?" />
            </label>
        </p>

        <p><button type="submit"style="padding: 1em;
            border-radius: 0.5em;
            background: green;
            border: none;
            font-weight: bold;
            margin-top: 1em;
            width: 500px;
            color: white";>Submit</button></p>
    </form>
</body>

</html>
