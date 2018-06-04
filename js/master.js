function putClass(color) {
  document.getElementById('colorChange').className = color;
}

function changeToWhite() {
  putClass('white');
}

function changeToBlack() {
  putClass('black');
}

function alertButton() {
  alert("This is Junwon's blog. 정준원의 블로그입니다. 현재 만들고 있는 상태입니다.");
}

function promptButton() {
  var answer = prompt("넌 프로그래밍을 열심히 하고 있나? YES or No로 대답해라",'');
  var ans_lower = answer.toLowerCase();
  if(!ans_lower[0]) {
    alert("아무것도 안썼잖아 이놈아!");
  } else if(ans_lower[0] == 'y') {
    alert("넌 잘할수 있을 것이다! 화이팅!");
  } else if(ans_lower[0] == 'n'){
    alert("정말로 잘하고 싶다면 노력하라. 그럼 잘해질 것이다. 난 그렇게 믿는다!");
  } else {
    alert("제대로 입력해 이놈아!!");
  }
}

document.getElementById('whiteButton').addEventListener('click',changeToWhite);
document.getElementById('blackButton').addEventListener('click',changeToBlack);
document.getElementById('alertButton').addEventListener('click',alertButton);
document.getElementById('promptingButton').addEventListener('click',promptButton);
