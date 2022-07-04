<?php

require '../models/page.php';

$content = '';

$content .= '
<p>
    Show blood sugar chart here, with table (datatable) of results below
</p>

<div id="chartDiv">
    <canvas id="myChart" width="100%" height="45%"></canvas>
</div>';

$footer_code = '';

$footer_code .= '
function createRandomColour(count) {
    const colourArray = [];
    for (let i = 0; i < count; i++) {
        colourArray.push([
            Math.round(Math.random() * 255),
            Math.round(Math.random() * 255),
            Math.round(Math.random() * 255)
        ]);
    }

    return colourArray;
}

const labels = [];
for (let i = 0; i < 10; i++) {
    labels.push(Math.round(Math.random() * 100));
}

const dataArray = [];
for (let i = 0; i < 10; i++) {
    dataArray.push(Math.round(Math.random() * 100));
}

const data = {
    labels: labels,
    datasets: [{
        label: "My First dataset",
        backgroundColor: "rgb(255, 99, 132)",
        borderColor: "rgb(255, 99, 132)",
        data: dataArray,
    }]
};

const config = {
    type: "line",
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: "right"
            },
            title: {
                display: true,
                text: "title"
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById("myChart"),
    config
);
';

$o_results_page = new Page();
$results_html = $o_results_page->create_page('Results', $content, $footer_code);
echo $results_html;

// $o_database = new Database();
// var_dump($o_database);