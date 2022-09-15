let users = [
    {
        name: 'Larry',
        phone: "213-555-1234",
        address: "123 N 1st Ave"
    },
    {
        name: 'Jane',
        phone: "213-555-4321",
        address: "123 N 1st Ave"
    },
    {
        name: 'Sam',
        phone: "213-555-5678",
        address: "123 N 1st Ave"
    },
    {
        name: 'Anne',
        phone: "213-555-9876",
        address: "123 N 1st Ave"
    },
    {
        name: 'David',
        phone: "213-555-0912",
        address: "123 N 1st Ave"
    }
];

// Get the value "David" from the Users.

const Users = new Map();
// Đưa các phần tử mảng vào Map()
for (let i = 0; i < users.length; i++) {
    Users.set(users[i].name, users[i]);
    delete (Users.get(users[i].name)).name;
}
// Xuất dữ liệu của David
console.log(Users.get('David'));
