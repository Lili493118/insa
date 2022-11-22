
function bonjour(a) {
    fetch('http://jsonplaceholder.typicode.com/users')
  .then((response) => response.json())
  .then((json) => console.log(json));
  }
  module.exports = bonjour;


 