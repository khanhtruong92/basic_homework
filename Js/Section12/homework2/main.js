let number = document.getElementById("number").textContent;
let count = document.getElementById("number");

// Tạo chức năng tăng/giảm số
document.getElementById("btn3").addEventListener("click", function(){
    number++;
    count.innerHTML = number;
})
document.getElementById("btn1").addEventListener("click", function(){
    number--;
    count.innerHTML = number;
})
document.getElementById("btn2").addEventListener("click", function(){
    count.innerHTML = "0";
})

// Tạo chức năng đổi màu 
// đổi màu chữ của button
const btns = document.querySelectorAll(".item");
btns.forEach(function(btn) {
    btn.addEventListener("click", function(e) {
        if (number > 0) {
            e.currentTarget.style.borderColor = "green";
        } else {
            e.currentTarget.style.borderColor = "red";
        }
    })
})
