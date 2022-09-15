function theSquare(number) {
    try {
        if(isNaN(number)) {
            throw "Argument is not a number.";
        }
        console.log(number * number);
    } catch (error) {
        console.log(error);
    }
}

theSquare('dadsfasdf');
