function validate(){
    let x= document.trip.name.value;
    let y= document.trip.phnno.value;
    let z= document.trip.s.value;
    let a= document.trip.q.value;
    let b= document.trip.txtarea.value;
    let c= document.trip.rollnumber.value;

    if(x=="")
    {
        alert("name must be filled");
        return false;
    }

    if(y.length!=10)
    {
        alert("phone number should be 10 digits");
        return false;
    }

    if(z=="")
    {
        alert("mention your gender.");
        return false;
    }

    if(a=="")
    {
        alert("please mention mode of transport.");
        return false;
    }

    if(b=="")
    {
        alert("enter the place which you want to visit");
        return false;
    }

    if(c=="")
    {
        alert("enter your rollnumber.");
        return false;
    }
}
