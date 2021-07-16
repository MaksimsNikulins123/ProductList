// alert ('validation');
const form = document.getElementById('product_form');
const sku = document.getElementById('sku');
const name1 = document.getElementById('name');
const price = document.getElementById('price');
const type = document.getElementById('productType');
const table = document.getElementById('selectTable');
const error = document.querySelector('.result');

if(sku.value == ''|| name1.value == '' || price.value == '' ){
    error.innerHTML = "Fill empty filds";
}

form.addEventListener("input", function () {

        if(sku.value == '') {
            error.innerHTML = "Please, provide SKU";
            
        }else if(name1.value == ''){
            error.innerHTML = "Please, provide NAME";
            
        }else if(price.value == ''){
            error.innerHTML = "Please, provide PRICE";
            
        }else if(type.value == ''){
            error.innerHTML = "Please, select Data type";       
            
        }else if(type.value == 'dvd'){
                error.innerHTML = "Please, provide SIZE";
                
                let size = document.getElementById('size');
                
                if(size != null){
                    error.innerHTML = "";

                    function sizeValue(){
                        let size = document.getElementById('size');
                        return size.value;
                    }
                if(sizeValue() == ''){
                    error.innerHTML = "Please, provide SIZE";
                    
                }else if(sizeValue() != ''){
                    error.innerHTML = "";
                }
                
            }
               

        }else if(type.value == 'book'){
            error.innerHTML = "Please, provide WEIGHT";
            
            let weight = document.getElementById('weight');
                
            if(weight != null){
                error.innerHTML = "";

                function weightValue(){
                    let weight = document.getElementById('weight');
                    return weight.value;
                }
            if(weightValue() == ''){
                error.innerHTML = "Please, provide WEIGHT";
                
            }else if(weightValue() != ''){
                error.innerHTML = "";
            }
            
        }

        }else if(type.value == 'furniture'){
            error.innerHTML = "Please, provide HEIGHT, WIDTH, LENGTH";

            let height = document.getElementById('height');
            let width = document.getElementById('width');
            let length = document.getElementById('length');
                
            if(height != null && width != null &&  length != null){
                error.innerHTML = "";

                function heightValue(){
                    let height = document.getElementById('height');
                    return height.value;
                }
                function widthValue(){
                    let width = document.getElementById('width');
                    return width.value;
                }
                function lengthValue(){
                    let length = document.getElementById('length');
                    return length.value;
                }

            if(heightValue() == ''){
                error.innerHTML = "Please, provide height";  
            }else if(widthValue() == ''){
                error.innerHTML = "Please, provide width";
            }else if(lengthValue() == ''){
                error.innerHTML = "Please, provide length";
            }else if(heightValue() != '' && widthValue() != '' && lengthValue() != '' ){
                error.innerHTML = "";
            }
            
        }
        };
    }, false);

  

form.addEventListener("submit", function (event) {
    let height = document.getElementById('height');
    let width = document.getElementById('width');
    let length = document.getElementById('length');


    if(sku.value == '' || name1.value == '' || price.value == ''){
        error.innerHTML = "Please, submit required data";
        event.preventDefault();
    }else if(type.value == ''){
        error.innerHTML = "Please, submit required data";
        event.preventDefault();
    }else if(type.value == 'dvd'){
        if(size.value == ''){
            error.innerHTML = "Please, submit required data";
            event.preventDefault();
        }else{
            error.innerHTML = "";
        }
    }else if(type.value == 'book'){
        if(weight.value == ''){
            error.innerHTML = "Please, submit required data";
            event.preventDefault();
        }else{
            error.innerHTML = "";
        }
    }else if(type.value == 'furniture'){
        if(height.value == '' || width.value == '' || length.value == ''){
            error.innerHTML = "Please, submit required data";
            event.preventDefault();
        }else{
            error.innerHTML = "";
        }
    }

    
}, false);

