const tableau = ["sanji", "Usoop", "nami","zoro","Francki","Luffy","Chopper","Robin","Yamato","Jimbei"];
// compte le nombre de personnage dans le tableau
// console.log(tableau.length)



//affiche les noms dans le tableau

// for (let i = 0; i < tableau.length; i++) {
//     console.log(tableau[i]);
//      }


//affiche une suite de nombre qui est = au nombre de personnage dans le tableau

// for(const nakama in tableau) {
//     console.log(nakama);
//      }



// boucle qui affiche zoro

// for(const nakama of tableau){
//     if(nakama == 'zoro'){
//         console.log(nakama);
//     }
// }


// Boucle qui affiche plus Yamato Jibay 

// for(const nakama of tableau){
//     if(nakama == 'Yamato' || nakama == 'Jimbei' ){
//         console.log('');
//     } else{
//         console.log(nakama);
//     }
// }



// fizzbuzz

for (let i = 1; i <= 199; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
      console.log("FizzBuzz");
    } else if (i % 3 === 0) {
      console.log("Fizz");
    } else if (i % 5 === 0) {
      console.log("Buzz");
    } else {
      console.log(i);
    }
  }
  