function addNewProduct(){  
    window.location = "add-product.php"
}

function cancel(){  
    window.location = "index.php"
}
     

function deleteChecked(){ 
    // window.location = "delete.php" 
    let checkboxes = document.querySelectorAll('.delete-checkbox');
    let idArray = [];
    // let count = 0;
    let data;
    // let result = document.querySelector('.result');
    // let data2;


    for (let i=0; i<checkboxes.length; i++) {
        if (checkboxes[i].type === "checkbox" && checkboxes[i].checked === true){
            let id = checkboxes[i].id; 
            // console.log(typeof id);
            idArray.push(id);
            // count++;

        }
    
    }

    let request = new XMLHttpRequest();

    let url = "http://productlist/delete.php";
    
    request.open("POST", url, true);

    request.setRequestHeader("Content-Type", "application/json");
    
    request.onreadystatechange = function () {

        if(request.readyState === 4 && request.status === 200) {       
            // console.log(request.responseText);
            // alert('sent request');
            window.location = "index.php";
            // result.innerHTML = this.responseText;
        }
        // alert("didn't sent request");
    };

    var jsonBody = {
        "id" : idArray 
        };

    data = JSON.stringify(jsonBody);
    
    
    // let data4 = JSON.stringify(data3);
    // request.send(data); 
    // console.log(jsonBody);
    // console.log(data);

    request.send(data); 
    
  
    
    
    
}  
function changeAction(value){
    // var x = document.getElementById("productType").value;
    var selectTable = document.getElementById("selectTable");
    if(value== 'dvd'){
        selectTable.innerHTML = "<table><tr><td><label> Size (MB) </label><input type='text' name='size' id='size' ></td></tr> </table><p> Please provide size in (MB) format</p>";
    }else if(value == 'book'){
        selectTable.innerHTML = "<table ><tr><label> Weight (KG) </label> <input type='text' name='weight' id='weight' ></tr></table> <p> Please provide Weight in (KG) format</p>";
    }else if(value == 'furniture'){
        selectTable.innerHTML = "<table ><tr><td><label>Height (CM)</label></td><td><input type='text' name='height' id='height' ></td></tr><tr><td><label>Width (CM)</label></td><td><input type='text' name='width' id='width'></td></tr><tr><td><label>Length (CM)</label></td><td><input type='text' name='length' id='length' ></td></tr></table> <p> Please provide dimensions in HxWxL format</p>";
    }else if(value == 'default'){
        selectTable.innerHTML = "";
    }
    
}        