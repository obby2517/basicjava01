var status = confirm("Are you want to delete?");
console.log(status);

// ถ้าสถานะการยืนยันเป็น True
if(status=="true"){
console.log("Delete success");
}else if(status=="other"){
    console.log("something");
}
// ถ้าสถานะการยืนยันเป็น False
else{
    console.log("Not Delete item");
}