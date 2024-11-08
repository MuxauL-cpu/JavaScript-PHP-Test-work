let button1 = false;

const text = document.getElementById("text");

document.getElementById("button1").addEventListener("click", function() {
  button1 = !button1;
})

document.getElementById("button2").addEventListener("click", function() {
  text.style.visibility = (button1) ? "hidden" : "visible";
})