"use strict";

// alert('coucou');


// // LET
// let message;
// message='coucou avec let';
// alert(message);

// // CONST (sur une seule ligne)
// const message='coucou avec const';
// alert(message);

// // Déclarer plusieurs variables
// let user='moi', 
//     age=20,
//     message='coucou';
//     alert(user+age+message);


//  Demander l'age et l'afficher
// let age=prompt("quel est ton âge");
// console.log("Tu as " + age + " ans");


// Poser une question avec une condition
// let nom=prompt("Quel est le nom officiel de Javascript ?");
// let reponse=(nom=="ECMAScript")?"oui c'est ça":"La réponse est ECMAScript";
// prompt(reponse);


// Poser une question avec deux conditions
// let nom=prompt("Quel est votre nom");
// if(nom=="admin"){
//     let mdp=prompt("mot de passe");
//     if(mdp=="TheMaster"){
//         alert("Connecté");
//     }else if(mdp==null){
//         alert("Cancel");
//     }else{
//         alert("Mauvais mot de passe");
//     }
// }else if(nom==null){
//     alert("Cancel");
// }else{
//     alert("Vous n'êtes pas connectés");
// }

// Boucle qui renvoie dans la console les numéros pairs de 1 à 10
// for (i=1; i<=10; i++){
//     if(i%2==0){
//         console.log(i);
//     }
// }


// for (let i=0; i<3; i++){
// alert(`number ${i}!`);
// } EN WHILE
// let i=0;
// while(i < 3){
//     alert("number" + (i) + "!");
//     i++;
// }


// let i = 0;
// do{
//     i=prompt("Rentre un nombre supérieur à 100");
// } while(i<=100 && i!=null && i!="");


// // switch(browser)
// let browser;
// // case 'Edge':
// if (browser == "Edge") {
//     alert("You've got the Edge");
//     // break;
// } else if (browser == "Chrome" || browser == "Firefox" || browser == "Safari" || browser == "Opera") {
//     alert("Okey we support theses browsers too");
// } else {
//     alert("We hope that this page looks ok!");
// }


// let a=a = +prompt('a?', '')
// switch (a) {
//     case 0:
//         alert(0);
//         break;
//     case 1:
//         alert(1);
//         break;
//     case 2:
//     case 3:
//         alert('2,3');
//         break;
// }


// Montre tous les chiffres premiers entre 2 et n
// function showPrimes(n){
//     for(let i=2; i < n; i++){ 
//         if(isPrimes(i)){ /*Si il est premier */
//             console.log(i);
//         }
//     }
// }

// // Regarde si un nombre est premier et retourne un booléen
// function isPrimes(a){
//     for(let j=2; j<a; j++){
//         if(j % a == 0) return false;
//     }
//     return true;
// }


// function checkAge(age){
// return (age > 18) ? true : confirm("Do you have");
// }

// Ecrire une fonction min(a,b) qui renvoie le plus petit des deux nombres
// function min(a,b){
//     if(a < b ){
//         return a;
//     }else if (a > b){
//         return b;
//     }else if (a === b){
//         return a;
//     }
// }



// Ecrire une fonction min(a,b) qui renvoie le plus petit des deux nombres
// function min(a,b){
// return a < b ? a : b;
// }



// Fonction au carré de deux nombres
// let x;
// let n;

// do{
//     x = prompt("Entrez un nombre");
//     n = prompt("Entrez un autre nombre");
// }while(!Number.isInteger(+n) && n > 1);

// function pow(x,n){
//     return x ** n;
// }

// alert(pow(x,n));



// let sum = (a,b) => a + b;
// a => a + a; 



// Fonctions fléchées vides
// let age = prompt("quel age?");
// let welcome = (age<18) ?
//  ()=>alert("hello"):
//  ()=>alert("coucou");
//  welcome();



// Copier un objet
// let user = {
//     name:"bob",
//     age: 20
// }

// let secondUser();

// for(let property in user){
//      secondUser[property] = user[property];
// }


// Fonction de isEmpty
// let schedule = {};
// alert( isEmpty(schedule));

// schedule["8:30"] = "get up";
// alert( isEmpty(schedule));

// function isEmpty(obj){
//     for(let key in obj){
//         return false;
//     }return true;
// }



// Sommes des salariés 
// let salaries = {
//     John: 100,
//     Ann: 160,
//     Pete: 130
// }
// for (let key in salaries) {
//     sommes = sommes + salaries[key];
// }
// console.log(sommes);



// Menu avec la somme de width et height
// let menu = {
//     width: 200,
//     height: 300,
//     title: "My menu"
// };

// function multiplyNumeric(obj) {
//     for (let key in obj) {
//         if (typeof obj[key] == "number") {
//             obj[key] = obj[key] * 2;
//         }
//     }
//     console.log(obj);
// }
// multiplyNumeric(menu);



// Créer un objet calculator avec 3 méthodes
// read() qui demande 2 valeurs et les sauvent en tant que propriétés de l'objet
// sum() qui renvoie la somme des valeurs sauvées
// nul() qui renvoie le résultat de la multiplication des valeurs sauvées 

let nb1;
let nb2;

let calculator = {
    read(){
        nb1 = prompt("Entrez une valeur");
        nb2 = prompt("Entrez une seconde valeur");
        calculator["nb1"] = nb1;
        calculator["nb2"] = nb2;
    },
    sum(){
        return this.nb1 + this.nb2;
    },
    nul(){
        return this.nb1 * this.nb2;
    }
}