//function that display value
function dis(val){
  document.getElementById("result").innerHTML+=val
}

//function that evaluates the digit and return result
function solve(){
  let x = document.getElementById("result").innerHTML
  let y = eval(x)
  document.getElementById("result").innerHTML = y
}

//function that clear the display
function clr(){
  document.getElementById("result").innerHTML = ""
}

//function to delete or backspace a single digit
function del(){
  let str = document.getElementById("result").innerText.toString()
  document.getElementById("result").innerHTML = str.substr(0, str.length - 1);
}