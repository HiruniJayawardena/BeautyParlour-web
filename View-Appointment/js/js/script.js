alert('hiru');

var colors=['red','green','blue','cyan'];
var user=prompt("Select a background color");
if(user=="black"){
    for(var i=0; i<colors.length; i++){
        $('body').css("background-color", colors[i]);
    }

}

// for(var i=0; i<colors.length; i++){
//     $('body').css("background-color", colors[i]);
// }

// setInterval(function (){
//     console.log("Hello");
// },30);


// for(var i=0; i<colors.length; i++){
//     $('body').css("background-color", colors[i]);
// }
//

// var i=0;
// var t=setInterval(function(){
//     i++;
//     console.log(i);
//     if(i==5){
//         clearInterval(t);
//     }
// },30);
//


// var array=['red','green','blue'];
// setInterval(test,200);
// var temp=0;
// function test(){
//     temp++;
//     if(temp==array.length){
//         temp=0;
//     }
// }

var array=['red','green','blue','cyan','purple','crimson'];
setInterval(test,200);
var temp=0;
function test(){
    temp++;
    if(temp==array.length){
        temp=0;
    }
    $('body').css("background-color", array[temp]);
   // $('body').css("transition","all 5s");
}

setTimeout(function(){
    document.write("Hello");
},2000);