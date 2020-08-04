var a;
for (a=1;a<=10;a++){
    console.log(a)
    if(a==3){
        break;
    }
    
}

document.write("<p>-------------------------------</p>");

var b;
for (b=1;b<=999;b++){
    if(b%10 == 0){
        if(b<100){
            document.write(String("AK-0"+b).slice(-6)+"<br>");
        }else
        document.write(String("AK-"+b).slice(-6)+"<br>");
    }else{
        if(b<100){
        if(b <=9){
            document.write(String("AK-00"+b).slice(-6)+" ");
        }else{
        document.write(String("AK-0"+b).slice(-6)+" ");
        }
    }else{
        document.write(String("AK-"+b).slice(-6)+" ");
    }          
    }
}
