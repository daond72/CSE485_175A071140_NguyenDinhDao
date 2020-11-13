function validateForm(){
    if (confirm("Ban chac chan muon sua chu?")){
        return true;
    }
    else
        return false;
}

function xacnhan(mahoso){
    if (confirm("Ban chac chan muon xoa chu?")){
        window.location = "deletehoso.php?mahoso="+mahoso;   
    }
    else
        document.getElementById("ok").href = "#";
}