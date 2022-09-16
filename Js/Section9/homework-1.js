class Person {
    constructor (name, age) {
        this.name = name;
        this.age = age;
    }
    description() {
        return this.name + ', ' + this.age + ' years old';
    }
}

const John = new Person('John', 19);
console.log(John.description());
