<form method="get">
    <p>Input angka pada kolom dibawah ini!</p>
    <input type="number" name="value" class="column"><br>
    <input type="submit">
</form>

<div class="hasil">
    <?php
        function intToRoman($integer) {
        $convert = array(
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1
        );
        $result = '';
            foreach ($convert as $roman => $number) {
                $matches = intval($integer/$number);
                $result .= str_repeat($roman, $matches);
                $integer = $integer % $number;
            }
            return $result;
        }

        if(isset($_GET['value'])) {
            $value = $_GET['value'];

            echo "<p>Angka Romawi dari ". $value ." adalah ".intToRoman($value)."</p>";
        }
    ?>
</div>

<style>
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: antiquewhite;
    }
    form {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .hasil {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .column {
        border-radius: 5px;
        border-color: burlywood;
        width: auto;
        padding: 10px;
    }
</style>