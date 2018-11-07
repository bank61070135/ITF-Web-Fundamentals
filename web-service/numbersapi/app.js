const randomTriviaURL = 'http://numbersapi.com/random/trivia?json';

function random() {
  fetch(randomTriviaURL)
    .then(response => response.json())
    .then(data => {
      console.log(data);

      document.getElementById('number').innerHTML = `<b>Number: </b>${data.number}`;
      document.getElementById("fact").innerHTML = `<p>${data.text}</p>`;
    })
}