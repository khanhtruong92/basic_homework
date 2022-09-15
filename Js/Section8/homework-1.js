function myFunction(numerator, denominator) {
    try {
        if (denominator == 0) throw "Attempted to divide by zero.";
        console.log(numerator / denominator);
    } catch (error) {
        console.log(error);
    }
}

myFunction(5, 0);
