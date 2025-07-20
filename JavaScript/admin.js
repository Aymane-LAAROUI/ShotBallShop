function select(id){
    selected=document.getElementById("selected");
    selected.value=id;
    document.querySelector("#minicontainer").submit();
}
onload=search("");
function color_table(){
    tr=document.querySelectorAll("#row");
    span1=document.querySelector("#nbr_art");
    for (let i = 0; i < tr.length; i++) {
        if(i%2==0) tr[i].style.background="transparent";
        else tr[i].style.background="#4591f0";
    }
    span1.innerHTML=tr.length + " element(s)";
}
function check_count(all) {
    check_all=document.querySelector("#check_all");
    check=document.querySelectorAll(".checkbox1");
    span2=document.querySelector("#nbr_selec");
    var count=0;
    if(all==1) check_all.checked=false;
    for (let i = 0; i < check.length; i++) {
        if(check[i].checked) count++;
    }
    if(count>0) span2.innerHTML=count + " cases cochées";
    else span2.innerHTML="";
    if(count==check.length) checkall.checked=true;
}
function checkall(){
    check_all=document.querySelector("#check_all");
    check=document.querySelectorAll(".checkbox1");
    if(check_all.checked){
        for (let i = 0; i < check.length; i++) {
            check[i].checked = true;
        }
    }
    else{
        for (let i = 0; i < check.length; i++) {
            check[i].checked = false;
        }
    }
    check_count(0);
}
function show_cru(){
    ajouter=document.querySelector("#ajouter");
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='visible';
    modifier.style.visibility='hidden';
    suppr.style.visibility='hidden';
    
}
function close_cru(){
    cru=document.querySelector("#edit_cont");
    cru.style.display='none';
}
function cru_val(val) {
    form=document.querySelector("#crud");
    switch (val) {
        case 0:
            form.action="insert.php";
            break;
        case 1:
            form.action="update.php";
            break;
        case 2:
            form.action="delete.php";
            break;
    }
}
function load_img(){
    image=document.querySelector("#img_art");
    src=document.querySelector("#img_src");
    console.log(src);
    image.src=src.src;
}
function get_index(index,index_name,index_ht,index_tva,index_stock,index_image,index_cat,index_marque,index_couleur,index_poids,index_dimension,index_rech,index_admin,index_equipe){
    let name_=document.querySelector("#name");
    let ht=document.querySelector("#ht");
    let tva=document.querySelector("#tva");
    let stock=document.querySelector("#stock");
    let image=document.querySelector("#img_art");
    let categorie=document.querySelector("#categorie");
    let marque=document.querySelector("#marque");
    let couleur=document.querySelector("#color");
    let poids=document.querySelector("#poids");
    let dimension=document.querySelector("#dimensions");
    let n_rech=document.querySelector("#nrech");
    let admin=document.querySelector("#admin");
    let equipe=document.querySelector("#equipe");
    
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    document.querySelector("#index").value=index;

    name_.value=index_name;ht.value=index_ht;tva.value=index_tva;
    stock.value=index_stock;
    image.value=index_image;categorie.value=index_cat;marque.value=index_marque;
    couleur.value=index_couleur;poids.value=index_poids;
    dimension.value=index_dimension;
    n_rech.value=index_rech;admin.value=index_admin;
    equipe.value=index_equipe;
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='hidden';
    modifier.style.visibility='visible';
    suppr.style.visibility='visible';
}
function get_index_c(index,index_name,index_passw,index_tel,index_gmail,index_ville) {
    name_=document.querySelector("#name");
    passw=document.querySelector("#passw");
    tel=document.querySelector("#tel");
    gmail=document.querySelector("#gmail");
    ville=document.querySelector("#ville");
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    document.querySelector("#index").value=index;
    name_.value=index_name;
    passw.value=index_passw;
    tel.value=index_tel;
    gmail.value=index_gmail;
    ville.value=index_ville;
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='hidden';
    modifier.style.visibility='visible';
    suppr.style.visibility='visible';
}
function get_index_f(index,index_name,index_tel,index_gmail,index_adresse,index_ville) {
    name_=document.querySelector("#name");
    tel=document.querySelector("#tel");
    gmail=document.querySelector("#gmail");
    ville=document.querySelector("#ville");
    adresse=document.querySelector("#adresse");
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    document.querySelector("#index").value=index;
    name_.value=index_name;
    tel.value=index_tel;
    gmail.value=index_gmail;
    ville.value=index_ville;
    adresse.value=index_adresse;
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='hidden';
    modifier.style.visibility='visible';
    suppr.style.visibility='visible';
}
function get_index_cat(index) {
    name_=document.querySelector("#name");
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    document.querySelector("#index").value=index;
    name_.value=index;
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='hidden';
    modifier.style.visibility='visible';
    suppr.style.visibility='visible';
}
function get_index_equ(index_name,index_logo,index_bg) {
    name_=document.querySelector("#name");
    logo=document.querySelector("#logo");
    bg=document.querySelector("#bg");
    cru=document.querySelector("#edit_cont");
    cru.style.display='flex';
    document.querySelector("#index").value=index_name;
    name_.value=index_name;
    logo.src=index_logo;
    bg.src=index_bg;
    ajouter=document.querySelector("#ajouter_btn");
    modifier=document.querySelector("#modifier_btn");
    suppr=document.querySelector("#suppr_btn");
    ajouter.style.visibility='hidden';
    modifier.style.visibility='visible';
    suppr.style.visibility='visible';
}
function search(mot){
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("class1").innerHTML = this.responseText;
        color_table();
    }
    };
    xhttp.open("GET", "search.php?q="+mot, true);
    xhttp.send();
}
function top_page(){
    location.reload();
    window.location.href = "home_admin.php";
}