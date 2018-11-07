const apiURL = "https://api.coinmarketcap.com/v2/listings/";

fetch(apiURL) // ดึงข้อมูลจากลิงค์ apiURL
  .then(response => response.json()) // แปลงประเภทข้อมูลเป็น JSON
  .then(json => {
    console.log(json);

    let tbody = ''; // ประกาศตัวแปรตั้งต้นสำหรับต่อ HTML แต่ละ row ที่จะถูกวนใน for loop
    for (let currency of json.data) {
      const website = `https://coinmarketcap.com/currencies/${currency.website_slug}`; // string format เพื่อเอาข้อมูลใน JSON มาประกอบเป็น String

      // เขียน HTML ใน Javascript เพื่อประกอบข้อมูลที่ได้จาก API และ HTML เข้าด้วยกัน
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

      tbody += row; // ต่อ String ตัวแปร row เข้ากับ tbody
    }

    document.getElementById("count").innerText = json.metadata.num_cryptocurrencies; // ใส่จำนวนที่ได้ไปยัง HTML ที่มี id="count"
    document.getElementById("content").innerHTML = tbody;  // ใส่ข้อความที่ได้ไปยัง HTML ที่มี id="content"
  });
