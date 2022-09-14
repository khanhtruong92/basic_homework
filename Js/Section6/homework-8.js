// Make the loop jump to the next iteration when i is 5.

let text = "";
for (let i = 0; i < 10; i++) {
    if (i === 5) {
        continue;
    }
    text += i + " ";
}

console.log(text);
