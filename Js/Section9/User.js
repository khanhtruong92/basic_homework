const User = {
    name: "",
    setUserName : function(name) {
        this.name = name;
    },
    getUserName : function() {
        return this.name;
    }
}

export {User};
