var name=prompt("กรุณาป้อนชื่อ","จเรยุทธ  พุทธิ");
var email=prompt("กรุณาป้อนemail","jarayut.p@gmail.com");
var age =prompt("กรุณาป้อนอายุ","46");

console.log("ชื่อ "+name);
console.log("อีเมลล์ "+email);
console.log("อายุ "+age);

//condition Operator
var status =(age >= 60)?"เกษียณ":"ยังทำงานอยู่";

console.log(status);
alert(status);

document.write(name+"<br>");
document.write(email+"<br>");
document.write(age+"<br>");
document.write(status);