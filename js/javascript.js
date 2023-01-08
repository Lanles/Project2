function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }

var r = document.querySelector(':root');

function biggerButt() {
  r.style.setProperty('--changeSize', '2%');
}

function normalButt() {
  r.style.setProperty('--changeSize', '5%');
}

function smallerButt() {
  r.style.setProperty('--changeSize', '10%');
}

function black() {
  r.style.setProperty('--changeColor', 'black');
}

function lime() {
  r.style.setProperty('--changeColor', 'lime');
}

function aqua() {
  r.style.setProperty('--changeColor', 'aqua');
}

function red() {
  r.style.setProperty('--changeColor', 'red');
}

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function addNew() {
  var div = document.createElement("div");
  div.classList.add("mydivheader");
  document.getElementById("mydiv").appendChild(div);
  r.style.setProperty('--randomColor', getRandomColor());
}

function addNew1() {
  var div = document.createElement("div");
  div.classList.add("mydivheader1");
  document.getElementById("mydiv1").appendChild(div);
  r.style.setProperty('--randomColor1', getRandomColor());
}

function addNew2() {
  var div = document.createElement("div");
  div.classList.add("mydivheader2");
  document.getElementById("mydiv2").appendChild(div);
  r.style.setProperty('--randomColor2', getRandomColor());
}

function addNew3() {
  var div = document.createElement("div");
  div.classList.add("mydivheader3");
  document.getElementById("mydiv3").appendChild(div);
  r.style.setProperty('--randomColor3', getRandomColor());
}

function rollD() {
  var die1 = document.getElementById("die1");
  var d1 = Math.floor(Math.random() * 20) + 1;
  die1.innerHTML = d1;
}