function deleteEveryMark(aContents,str) {
  for(var i=0;i<aContents.length;i++) {
    aContents[i].classList.remove(str);
  }
}

function addClass(tag,str) {
  tag.classList.add(str);
}

function getVar(str) {
  var matched = str.match(/id=\w+(&?)/);
  if(matched[0] == "") return null;
  return matched[0].substring(3);
}

var navContents = document.getElementsByTagName('nav');
var aContents = navContents[0].querySelectorAll('a');
for(var i=0;i<aContents.length;i++) {
  aContents[i].addEventListener('click',function() {
    console.log("break");
    deleteEveryMark(aContents,'active');
    addClass(this,'active');
  });
}

if(getVar(window.location.href) == 'javascript') {
  document.getElementById('javascript').classList.add('active');
} else if(getVar(window.location.href) == 'post') {
  document.getElementById('post').classList.add('active');
}
