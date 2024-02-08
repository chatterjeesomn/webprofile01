document.getElementById("back").addEventListener("click", shift);

function shift(){
  document.getElementById("shift").classList.add("fade");
  setTimeout(function(){
    window.location.assign("../index.html");
  },950)
}


document.getElementById("social").addEventListener("click", link)

function link(e) {
  if(e.target.id =="fb"){
    window.location.assign("https://www.facebook.com/somnathchatterjee2601");
  } else if( e.target.id == "ln"){
    window.location.assign("https://www.linkedin.com/in/somnath-chatterjee-1328292b2//");
  } else if (e.target.id == "git") {
    window.location.assign("https://github.com/chatterjeesomn");
  } else if (e.target.id == "insta"){
    window.location.assign("https://www.instagram.com/chatterjeesomn/?next=%2F");
  }
}