# ejercicio-javascript
Ejercicio para postulación de empleo


El live demo lo puedes ver en: https://tidok.000webhostapp.com/


### El ejercicio consiste de dos cosas: 

Encontrar el factorial de un número

Encontrar la palabra más larga en una frase

### Tecnologías

El proyecto se realizó en un simple archivo PHP, con Bootstrap para dar estilo y la libreria VueJS para dar funcionalidad.


### Funciones

Aunque las funciones no se aplicaron tal cual, dada la bondad de Vuejs, se definen por separado como:

```
function myFactorial(num) {
   // Calcula el factorial de el número
   var resFactorial = num;
   for (let i = num - 1; i > 0; i--) {
      resFactorial *= i;
   }
   // Si el número es 0 el factorial es 1
   if (num == 0) {
      resFactorial = 1;
   }
   return resFactorial;
}

function myWord(phrase) {
   // Encuentra la palabra de mayor longitud en la frase
   var palabras = [];
   var maxLength = 0;
   var maxWord = '';
   var wordLength = 0;
   // Quita los símbolos de la frase
   var strLimpío = phrase.replace(/[^\w\s]/gi, '')
   if (phrase == '') {
      // En caso de que no haya frase
      strWord = "nothing";
   } else {
      // Separa las palabras en un array
      palabras = strLimpío.split(" ");
      // Calcula la longitud de las palabras y mantiene la máxima longitud y su respectiva palabra
      for (let palabra of palabras) {
         if (palabra.length > maxLength) {
            maxWord = palabra;
            maxLength = palabra.length;
            wordLength = palabra.length;
         }
      }
      strWord = maxWord;
   }
   return strWord
}
```


Elaborado el 23 de marzo del 2020
