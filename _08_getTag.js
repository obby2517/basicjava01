//เข้าถึง Tag div
// แบบ 1 getElementByid
document.getElementById('result').innerHTML="hello";
// แบบ 2 getElementbyidByTagName

document.getElementsByTagName("p")[0].innerHTML="welcome";
document.getElementsByTagName("p")[1].innerHTML="to my site";

// แบบ 3 querySelector

document.querySelector("#result").innerHTML="สวัสดี";
document.querySelector("#pa").innerHTML="ยินดีต้อนรับ";
document.querySelector("#pb").innerHTML="เว็บไซต์ของเรา";

