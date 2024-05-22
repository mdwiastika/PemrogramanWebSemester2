<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F4EDCC;
        }

        form {
            background-color: #5F5D9C;
            border-radius: 0.5rem;
            color: white;
            padding: 2rem;
            box-shadow: 1px 1px 5px black;
        }

        label {
            display: block;
            margin: 0.2em 0;
        }

        input,
        select {
            width: 30rem;
            height: 1.3rem;
            color: #6420AA;
        }

        select {
            width: 30.5rem;
            height: 1.7rem;
        }

        button {
            margin-top: 0.8rem;
            background-color: #6196A6;
            color: white;
            padding: 0.3rem 1rem;
            border: 0;
            border-radius: 0.2rem;
            font-size: 1em;

        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <form onsubmit="calculateNumber(event)" id="calculator-form">
        <h1>Kalkulator Super</h2>
            <div class="">
                <label for="angka-1">Angka pertama: </label>
                <input type="number" name="angka-1" id="angka-1" placeholder="Angka pertama">
            </div>
            <div class="">
                <label for="operator">Operator: </label>
                <select name="operator" id="operator">
                    <option value="" selected disabled>== Pilih Operator ==</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value=":">:</option>
                </select>
            </div>
            <div class="">
                <label for="angka-2">Angka kedua: </label>
                <input type="number" name="angka-2" id="angka-2" placeholder="Angka kedua">
            </div>
            <button type="submit">Hitung</button>
            <h2>Hasilnya Adalah: <span id="hasil">0</span></h2>
    </form>
    <script>
        function calculateNumber(e) {
            let form = document.getElementById("calculator-form");
            form.style.backgroundColor = "#1F5D9C";
            let data = new FormData(form);
            e.preventDefault();
            data.append("angka-1", document.getElementById("angka-1").value);
            data.append("angka-2", document.getElementById("angka-2").value);
            data.append("operator", document.getElementById("operator").value);
            fetch('calculate.php', {
                    method: "POST",
                    body: data,
                })
                .then(response => response.json())
                .then((response) => {
                    document.getElementById("hasil").innerHTML = response.result
                    form.style.backgroundColor = "#5F5D9C";
                });
        }
    </script>
</body>

</html>