<?php
?>

<button type="button" id="get-text">Получить текст с сервера</button>
<div id="result"></div>

<script>
    document.querySelector('#get-text').onclick = async () => {
        try {
            let response = await fetch('https://www.cbr-xml-daily.ru/daily_json.js');
            if (response.ok) {
                let data = await response.text();



                // выведем данные в #result
                document.querySelector('#result').innerHTML = data;
            }
        } catch (error) {
            console.log(error);
        }
    }
</script>
