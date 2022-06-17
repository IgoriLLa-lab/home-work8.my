<button type="button" id="get-text">Получить текст с сервера</button>
<div id="result"></div>

<script>
    document.querySelector('#get-text').onclick = async (key, value) => {
        try {

            let url = 'https://www.cbr-xml-daily.ru/daily_json.js';
            let request = await fetch(url);

            if (request.ok) {
                let data = await request.json()

                for (const value in data) {
                    if (data[value]['USD']) {
                        let usd = data[value]['USD'];
                        let test = Object.entries(usd)

                        test.forEach(([key, value]) => {
                            let arr = (key, value);
                            document.querySelector('#result').innerHTML = arr;

                            document.cookie = arr;

                            localStorage.setItem(usd, arr)
                            sessionStorage.setItem(usd, arr)

                        });
                        alert(document.cookie);
                    }
                }
            }
        } catch (error) {
            alert(error);
        }
    }
</script>
