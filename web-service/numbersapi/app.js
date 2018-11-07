const randomTriviaURL = "http://numbersapi.com/random/trivia?json";

function random() {
  fetch(randomTriviaURL) // ดึงข้อมูลจากลิงค์ apiURL
    .then(response => response.json()) // แปลงประเภทข้อมูลเป็น JSON
    .then(data => {
      console.log(data);

      document.getElementById("number").innerHTML = `<b>Number: </b>${data.number}`;  // ใส่เลขที่ได้ไปยัง HTML ที่มี id="number"
      document.getElementById("fact").innerHTML = `<p>${data.text}</p>`;  // ใส่จำนวนที่ได้ไปยัง HTML ที่มี id="fact"
    });
}