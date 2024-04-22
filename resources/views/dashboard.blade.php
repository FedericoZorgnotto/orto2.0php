@vite('resources/css/dashboard.css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<x-app-layout theme="light" currentPage="dashboard" pageTitle="Dashboard">
    <div id="wrapper">
        <div class="card">
            <select name="tokens" id="tokens">
            </select>
            <canvas id="speedChart" width="600" height="400"></canvas>
        </div>
        <div id="seller-Info">

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
{{--
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h2>valori temperature sensori</h2>
            </div>
            <div class="p-6 text-gray-900">
                <h2>annunci</h2>
            </div>
        </div>
    </div>
</div>





<input type="text" id="postTitle" placeholder="POST TITLE" name="title" value="{{ old('title') }}"/>
            <div>
                <input type="text" id="address" placeholder="ADDRES"/>
                <div class="negative-Feedback hide" id="addressError">
                    <div class="ball-Negative-Feedback"></div>
                    Add an address
                </div>
            </div>
            <div>
                <input type="text" id="quantity" placeholder="QUANTITY"/>
                <div class="negative-Feedback hide" id="quantityError">
                    <div class="ball-Negative-Feedback"></div>
                    Add a quantity
                </div>
            </div>
            <div>
                <input type="text" id="price" placeholder="PRICE" name="price" value="{{ old('price') }}"/>
                <div class="negative-Feedback hide" id="priceError">
                    <div class="ball-Negative-Feedback"></div>
                    Add a price
                </div>
            </div>
            <div>
                <textarea id="postContent" rows="4" cols="50" placeholder="DESCRIPTION" name="description">{{ old('description') }}</textarea>
                <div class="negative-Feedback hide" id="postContentError">
                    <div class="ball-Negative-Feedback"></div>
                    Add a Description
                </div>
            </div>
            <button id="create-Post" type="submit">POST</button>


<div id="container">
                <h2>Add some pictures of your product</h2>
                <input type="file" id="addImage">
                <img src="" id="previewImage" class="invisible">
                <button id="add-photos">ADD</button>
            </div>
--}}
