document.getElementById('reloadButton').addEventListener('click', function() {
	location.reload();
});

window.addEventListener('load', () => {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    document.getElementById('datetime').value = now.toISOString().slice(0, -1);
});

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
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: dataArray,
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right'
            },
            title: {
                display: true,
                text: 'title'
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
