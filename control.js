function verif1(){ 
t1=document.getElementById("t1").checked;
t2=document.getElementById("t2").checked;
t3=document.getElementById("t3").checked;
t4=document.getElementById("t4").checked;
sel=document.getElementById("sel").selectedIndex;
pr=document.getElementById("pr").value;
des=document.getElementById("des").value;
if(des.length<10||des.length>100)
{
    alert("taille entre 10 et 100");
    return false;
}

if (t1==false &&t2==false &&t3==false &&t4==false )
    {
        alert("selection obligatoire d'une tailee");
    return false;
    }
if(sel<1){
    alert("selctioner une categorie")
    return false
}
if(2000<pr ||pr<100){
    alert("selctioner Un prix entre 100 et 2000.")
    return false
}

}
function verif2()
{
ch=document.getElementById("ch").value;
cin=document.getElementById("cin").value;
if(ch<1)
{alert("code habit  supérieur ou égal à 1")
return false}
if(cin.length!=8)
{alert("num cin =8")
return false}
d=document.getElementById("du").value;
if(d<1||d>4)
{alert("duree entre 1 et 4. ")
return false}
}