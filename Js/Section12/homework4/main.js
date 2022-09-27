let enterButton = document.getElementById("enter");
let input = document.getElementById("item-input");
let ul = document.querySelector("ul");
let item = document.getElementsByTagName("li");

function createListElement() {
    // Tạo phần tử HTML <li>
    let li = document.createElement("li");
    // Tạo text content từ nội dung input được nhập
    li.appendChild(document.createTextNode(input.value));
    // Thêm li vào ul
    ul.appendChild(li);
    // Reset lại khung input 
    input.value = "";

    // Tạo button edit
    let btnEdit = document.createElement("button");
    btnEdit.setAttribute("class", "edit fa-solid fa-pen-to-square");

    // Tạo button delete
    let btnDelete = document.createElement("button");
    btnDelete.setAttribute("class", "delete fa-solid fa-trash");

    let divChild = document.createElement("div");
    divChild.appendChild(btnEdit);
    divChild.appendChild(btnDelete);
    li.appendChild(divChild);


    let currentItemDel = document.querySelectorAll(".delete");
    for (let i = 0; i < currentItemDel.length; i++) {
        currentItemDel[i].addEventListener("click", function () {
            this.parentNode.parentNode.remove();
        })
    }

    let currentItemEdit = document.querySelectorAll(".edit");
    for (let i = 0; i < currentItemEdit.length; i++) {
        currentItemEdit[i].addEventListener("click", function () {
            let text = this.parentNode.parentNode.textContent;
            // console.log(text);
            input.value = text;
        })
    }
}

enterButton.addEventListener("click", createListElement);

document.getElementById("clear-all").addEventListener("click", function() {
        ul.innerHTML = "";
})
