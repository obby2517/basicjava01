// ไม่มีการรับค่า
function wakeup() {
    alert("hello");
}


// มีการรับค่า
function showinfo(name, email) {
    alert("hello " + name + "  your email " + email);
}

//รับค่าและ return ค่าออกใช้งาน
function area(width, height) {
        var total_area = width * height;
    var total_area_with_amount=total_area*500;
    var result =[total_area,total_area_with_amount];
    return result;
}