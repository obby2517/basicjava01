var day = new Date().getDay();
console.log(day);
//0=อาทิตย์ ยาวไป

switch (day) {
    case 0:
        document.write("<h1>สวัสดีวันอาทิตย์</h1>");
        break;
    case 1:
        document.write("<h1>สวัสดีวันจันทร์</h1>");
        break;
    case 2:
        document.write("<h1>สวัสดีวันอังคาร</h1>");
        break;
    case 3:
        document.write("<h1>สวัสดีวันพุธ</h1>");
        break;
    case 4:
        document.write("<h1>สวัสดีวันพฤหัสบดี</h1>");
        break;
    case 5:
        document.write("<h1>สวัสดีวันศุกร์</h1>");
        break;
    case 6:
        document.write("<h1>สวัสดีวันเสาร์</h1>");
        break;
}

function changebg(value) {
    var color = 0;
    color = value;

    var setcolor = "white";
    switch (color) {
        case "0":
            setcolor = "red"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "1":
            setcolor = "yellow"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "2":
            setcolor = "pink"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "3":
            setcolor = "green"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "4":
            setcolor = "orange"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "5":
            setcolor = "blue"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        case "6":
            setcolor = "purple"
            console.log(setcolor);
            //คำสั่งกำหนดสีพื้นหลังด้วย javascript
            document.body.style.backgroundColor = setcolor;
            break;
        default:
            setcolor = "white"
            console.log("invalid color");
            document.body.style.backgroundColor = setcolor;
            break;
    }

} //function ปิด