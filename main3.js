
let myArr = document.querySelectorAll(".slide-container");
let index = 0;

function next(){   

    myArr[index].classList.remove("active");
    index = (index + 1 ) % myArr.length;
    myArr[index].classList.add('active');
}
function prev(){

    myArr[index].classList.remove("active");
    index = (index - 1 + myArr.length ) % myArr.length;
    myArr[index].classList.add('active');
}

let but1 = document.getElementById("prev");
but1.onclick = prev;
let but2 = document.getElementById("next");
but2.onclick = next;
