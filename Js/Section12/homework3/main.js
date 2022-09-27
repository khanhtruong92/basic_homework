document.querySelector("#push").onclick = function () {
  // Trả về lời nhắc nhở khi chưa nhập nội dung vào input

  // if (document.querySelector("#newtask input").value.length == 0) {
  // Dòng trên tương tự dòng dưới
  if (!document.getElementById("new-item").value) {
    alert("Please Enter a Task");
  } else {
    // Hiển thị các task

    document.querySelector("#tasks").innerHTML += `
        <div class="task">
            <span class="taskname">
                ${document.querySelector("#newtask input").value}
            </span>
            <button class="delete">x</button>
        </div>
    `;

    // Tạo chức năng xoá task

    let current_tasks = document.querySelectorAll(".delete");
    for (let i = 0; i < current_tasks.length; i++) {

      // current_tasks[i].onclick = function () {
      //   this.parentNode.remove();
      // }

      // Phương thức dưới cho kết quả tương tự như phương thức được comment ở trên

      current_tasks[i].addEventListener("click", function () {
        this.parentNode.remove();
      })
    }

    // Tạo chức năng hiển thị task đã hoàn thành

    let complete = document.querySelectorAll(".task");
    for (let i = 0; i < complete.length; i++) {
      complete[i].onclick = function () {
        this.style.backgroundColor = "rgb(73	214	112	)";
      }
    }
  }
}
