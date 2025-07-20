prixmax=1000000000000;
prixmin=0;
categorie="";
equipe="";
onload=function(){
    let filter=document.querySelector("#filter");
    filter.style.display="none";
    let loader=document.querySelector("#loader");
    loader.style.display="none";
    load_default_body();
}
function top_page(){
    location.reload();
    window.location.href = "#";
}
function login(){
    window.location.href = "login.php";
}
function username(){
    document.querySelector("#username").innerHTML= sessionStorage.getItem("user");
    //alert(sessionStorage.getItem("user"));
}
function show_art_bycat(index){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("GET", "search.php?q=artbycat&index="+index, true);
    xhttp.send();
}
function show_art_byrech(index){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    let input=document.querySelector("#rech-txt");
    if(input.value.trim()!=""){
        xhttp.open("POST", "search.php?q=artbyrech&index="+index, true);
        xhttp.send();
    } 
    else load_default_body();
    
}
function filtre(){
    if(prixmin == "") prixmin = 0;
    if(prixmax == "") prixmax = 10000000;
    console.log(prixmin,prixmax,categorie,equipe);
    let index=document.querySelector("#rech-txt").value;
    //alert(categorie);
    let mot="and (prix_ht_article µ prix_ht_article *(tva_article/100)) >='" + prixmin + "' and (prix_ht_article µ prix_ht_article *(tva_article/100)) <='" + prixmax + "' and categorie_article like '" + categorie + "%' and equipe_article like '%" + equipe + "%'";
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "search.php?q=artbyfilt&index=" + index + "&mot=" + mot, true);
    xhttp.send();
}
function minifiltre(value,type){
    if(type==0) prixmin=value;
    else if(type==1) prixmax=value;
    else if(type==2) categorie=value;
    else if(type==3) equipe=value;
    console.log(prixmin,prixmax,categorie,equipe);
}
function toogle_filter(){
    let filter=document.querySelector("#filter");
    if(filter.style.display=="none"){
        filter.style.display="grid";
    }
    else{
        filter.style.display="none";
    }
}
function ajout_n_rech(index){
    //alert(index);
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "ajout.php?q=ajoutnrech&index="+index, true);
    xhttp.send();
}
function ajout_panier(index,value){
    toogle_loader();
    if(document.querySelector("#achat-article")!=null){
        let button=document.querySelector("#achat-article");
        button.remove();
        let p=document.createElement("p");
        p.id="article-exist";
        p.innerHTML="Ajoutée au panier";
        document.querySelector("#operation-article").appendChild(p);
    }
    let inputs=document.querySelectorAll(".value");
    for (let i = 0; i < inputs.length; i++) {
        if(typeof(inputs[i])!=Number) inputs[i]=1;
    }
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cart").setAttribute("name", this.responseText);
        }
    };
    xhttp.open("POST", "ajout.php?q=ajoutcart&index="+index + "&value=" + value, true);
    xhttp.send();
}
function load_default_body(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "default_page.php", true);
    xhttp.send();
}
function show_article(index){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "articles_details.php?index="+index, true);
    xhttp.send();
}
function show_cart(){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "panier.php", true);
    xhttp.send();
}
function vider_panier(){
    toogle_loader();
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "ajout.php?q=clearcart", true);
    xhttp.send();
}
function delete_value(index){
    toogle_loader();
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("page-body").innerHTML = this.responseText;
    }
    };
    xhttp.open("POST", "ajout.php?q=delete_value&index=" + index, true);
    xhttp.send();
}
function vente(){
    toogle_loader();
    window.location.href = "vente.php";
}
function hide_loader(){
    let loader=document.querySelector("#loader");
    loader.style.display="none";
}
function toogle_loader(){
    let loader=document.querySelector("#loader");
    loader.style.display="grid";
    setTimeout(hide_loader,500);
}