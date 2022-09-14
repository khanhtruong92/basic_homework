// What does the following code log to the console, and why?


switch ('113') {
    case '123':
        console.log('Product1');
    case '113':
        console.log('Product2');
    case '142':
        console.log('Product3');
    default:
        console.log('Product not found!');
}

// Phần nội dung hiển thị sẽ là:
// Product2
// Product3
// Product not found!
// Lý do: với value là 113 === với case '113', giá trị được trả về. Tuy nhiên, khi do không có điểm thoát (break), dẫn đến các trường hợp tiếp theo cũng được trả về
