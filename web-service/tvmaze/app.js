
function search() {
  const query = document.getElementById('search').value; // Get ค่าจากกล่อง input ที่ id="search"
  const apiURL = `http://api.tvmaze.com/search/shows?q=${query}`; // เอาค่าที่ใส่ใน Input มาใส่ใน string

  fetch(apiURL) // ดึงข้อมูลจากลิงค์ apiURL
    .then(response => response.json())  // แปลงประเภทข้อมูลเป็น JSON
    .then(data => {
      console.log(data);
      let result = ''; // ประกาศตัวแปรตั้งต้นสำหรับต่อ HTML สำหรับใช้ใน for loop

      for(let movie of data) {

        // เขียน HTML ใน Javascript เพื่อประกอบข้อมูลที่ได้จาก API และ HTML เข้าด้วยกัน
        const html = `
        <div class="movie-card">
          <div>
            <img src="${movie.show.image && movie.show.image.medium}" alt="${movie.show.name}" width="210px" />
          </div>
          <div>
            <a href="${movie.show.url}" target="_blank">
              <h4>${movie.show.name}</h4>
            </a>
          </div>
          <div class="block-with-text">
            ${movie.show.summary}
          </div>
        </div>
        `;

        result += html; // ต่อ String ตัวแปร html เข้ากับ result
      }

      document.getElementById('result').innerHTML = result; // ใส่ข้อความที่ได้ไปยัง HTML ที่มี id="result"
    })

  return false; // return false ช่วยทำให้เมื่อ form ถูก submit จะไม่ reload หน้าเว็ป
}

const form = document.getElementById('search-form'); // ดึง tag HTML ที่มี id="search-form"

/* reference ฟังก์ชัน search (คือ ฟังก์ชันที่ประกาศอยู่ข้างบน)
 * ไปยัง event onsubmit ของฟอร์ม หมายความว่าเมื่อฟอร์มถูก submit (ถูกกด enter, ปุ่ม search ถูกกด) จะเรียกใช้ search()
 */
form.onsubmit = search;