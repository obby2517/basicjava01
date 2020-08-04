//การสร้างตัวแปร
var name ="jarayut";
var age = 46;
var weight = 85;
var birthdate = "08/09/1974";
var record_data =new Date();
var datetimestamp=Date.parse("2020-08-04");
var localdateSting =record_data.toLocaleDateString("th-TH",
{day:"2-digit",month:"2-digit",year:"numeric"});//en-EN
/* การแสดงผลตัวแปร
 +บวก
 - ลบ
 * คูณ
 / หาร
 ** ยกกำลัง
 % หารเอาเศษ

*/
console.log(name+45);
console.log(age+5);
console.log("น้ำหนักคือ "+weight+" kg.");
console.log(birthdate);
console.log(record_data);
console.log(datetimestamp);
console.log(localdateSting);