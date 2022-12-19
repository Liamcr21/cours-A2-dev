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

// for (let i = 1; i <= 199; i++) {
//     if (i % 3 === 0 && i % 5 === 0) {
//       console.log("FizzBuzz");
//     } else if (i % 3 === 0) {
//       console.log("Fizz");
//     } else if (i % 5 === 0) {
//       console.log("Buzz");
//     } else {
//       console.log(i);
//     }
//   }
  

// Petit jeu entre 1 et 100 / 10 essaie pour trouver le nombre

// const prompt = require('prompt-sync')({sigint: true});
// const numberToGuess = Math.floor(Math.random() * 10) + 1;
// let foundCorrectNumber = false;

// while (!foundCorrectNumber) {
//   let guess = prompt('Trouve un nombre entre 1 et 10: ');
//   guess = Number(guess);

//   if (guess === numberToGuess) {
//     console.log('Bravo c est gagné !');
//     foundCorrectNumber = true;
//   } if (guess > numberToGuess) {
//     console.log('plus petit nb');
//     foundCorrectNumber = false;
//   }  else (guess < numberToGuess) 
//     console.log('plus grand nb!');
//     foundCorrectNumber = false;
//   }

const readline = require('readline');
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});  
const correctNumber = Math.floor(Math.random() * 10) + 1;
let tries = 0;
function getGuess() {
  rl.question("Entrez un nbr entre 1 et 10: ", (choix) => {
    // Convert the guess to a number
    const guessNumber = parseInt(choix);
    tries++;
    const correct = checkGuess(guessNumber);
    if(!correct && tries == 10){
      console.log("Fin du jeu ! Vous avez échoué");
      rl.close();
    }
    else if (!correct && tries <= 10) {
      getGuess();
    }
    else {
      rl.close();
    }
  });
}

function checkGuess(choix) {
  if (choix === correctNumber ) {
    console.log("GG nbr bon !!");
    return true;
  } 
  else if(choix !== correctNumber && choix < correctNumber) {
    console.log("Essaye Encore le nbr est plus haut !!");
    return false;
  }
  else if(choix !== correctNumber && choix > correctNumber){
    console.log("Essaye Encore le nbr est plus bas !!");
    return false;
  }
}
getGuess();