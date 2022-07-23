function randomizer(){
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789[]{}#()*;._-";
    var length = 9;
    var password = "";
    for (var i = 0, n = chars.length; i < length; ++i) {
        password += chars.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById("randomizer").innerHTML = password;
}