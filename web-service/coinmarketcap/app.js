const apiURL = "https://api.coinmarketcap.com/v2/listings/";

fetch(apiURL)
  .then(response => response.json())
  .then(json => {
    console.log(json);

    let tbody = '';
    for (let currency of json.data) {
      const website = `https://coinmarketcap.com/currencies/${currency.website_slug}`;
      const row = `
        <tr>
          <td>${currency.id}</td>
          <td>${currency.symbol}</td>
          <td>${currency.name}</td>
          <td>
            <a href="${website}">
              ${website}
            </a>
          </td>
        </tr>
      `;

      tbody += row;
    }

    document.getElementById("count").innerText = json.metadata.num_cryptocurrencies;
    document.getElementById("content").innerHTML = tbody;
  });
