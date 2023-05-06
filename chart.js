// Fetchs data from an API
fetch("https://corona.lmao.ninja/v2/continents?yesterday=true&sort")
  .then((response) => response.json())
  .then((data) => {
    const continentNames = []; // declare an empty array to store the continent names
    
    const continentCases = []; // declare an empty array to store each continent number of cases
    
    const continentDeaths = []; // declare an empty array to store each continent number of deaths


    data.forEach((continent) => {
      continentNames.push(continent.continent); // add the name of each continent to the array

      continentCases.push(continent.cases); // add the number of cases for each continent to the array

      continentDeaths.push(continent.deaths); // add the number of deaths for each continent to the array

    });

    // Creates a bar chart using charts.js
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: continentNames, // takes the array with names and dysplay as labels
        datasets: [
            {
              label: "# of Cases",
              data: continentCases, // takes the array with cases and dysplay as data
              borderWidth: 1,
            },
          {
            label: "# of Deaths",
            data: continentDeaths, // takes the array with deaths and dysplay as data
            borderWidth: 1,
          }
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            type: 'logarithmic'
          },
        },
        plugins: {
          title: {
            display: true,
            text: "Stats by Continent - Logarithmic",
            padding: {
              top: 10,
              bottom: 30,
            },
            font: {
              size: 30,
            },
          },
        },
      },
    });
  })
  .catch((error) => {
    console.error(error); // handle any errors here
  });
