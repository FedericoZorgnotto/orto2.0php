@vite('resources/css/dashboard.css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-app-layout theme="light" currentPage="dashboard" pageTitle="Dashboard">
    <div id="wrapper">
        <div class="card">
            <div id="interaction">
            <h1>My tokens</h1>
                <select name="tokens" id="tokens">
                </select>
            </div>
            <canvas id="speedChart" width="600" height="400"></canvas>
        </div>
    </div>
</x-app-layout>

<script>
    let lineChart = undefined
    @if($user->tokens()!=null)
    let tokens = @json($user->tokens);
    tokens = ['token1', 'token2'];
    console.log(tokens);
    @endif
    let tokenUrl = "{{route('welcome').'/hubData'}}";
    for(let i = 0; i<tokens.length; i++){
        let a = document.createElement("option");
        a.innerText = tokens[i];
        a.value = tokens[i];
        document.getElementById("tokens").appendChild(a);
    }
    document.getElementById("tokens").onchange = function(){
        search()
    }
    search();
    function search() {
        let token = document.getElementById("tokens").value;
        let db = new Array();
            fetch(tokenUrl + "/" + token, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                }
            }).then(response => {
                return response.json();
            }).then(result => {
                db.push(result);
                all();
            }).catch(error => {
                console.log(error);
            });


        function all() {
            if(lineChart !== undefined)
                lineChart.destroy();
            console.log(db)
            let sel = 0;
            let dates = new Array();
            let temps = new Array();
            let umid = new Array();
            db[sel].forEach((element) => {
                dates.push(element.created_at)
                temps.push(element.temperature)
                umid.push(element.humidity);
            })
            for (let i = 0; i < dates.length; i++) {
                let a = dates[i].split('T')[1];
                a = a.split(':')[0] + ":" + a.split(':')[1];
                dates[i] = dates[i].split('T')[0] + " " + a;
            }
            console.log(dates)
            const speedCanvas = document.getElementById("speedChart");

            Chart.defaults.font.family = "Teko";
            Chart.defaults.font.size = 22;
            Chart.defaults.color = "black";

            let speedData = {
                labels: dates,
                datasets: [{
                    label: "temperature",
                    data: temps
                }, {
                    label: "humidity",
                    data: umid
                }]
            };

            lineChart = new Chart(speedCanvas, {
                type: 'line',
                data: speedData
            });
        }
    }
</script>
